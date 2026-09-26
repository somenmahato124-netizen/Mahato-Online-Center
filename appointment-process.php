<?php

/*
=========================================
    MAHATO ONLINE CENTER
    APPOINTMENT PROCESS
=========================================
*/

require_once __DIR__ . "/database/database.php";


/*
=========================================
    ONLY POST REQUEST
=========================================
*/

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    header("Location: index.php");
    exit;

}


/*
=========================================
    GET FORM DATA
=========================================
*/

$name = trim($_POST["name"] ?? "");

$phone = trim($_POST["phone"] ?? "");

$email = trim($_POST["email"] ?? "");

$service = trim($_POST["service"] ?? "");

$appointment_date = trim($_POST["date"] ?? "");

$appointment_time = trim($_POST["time"] ?? "");

$message = trim($_POST["message"] ?? "");


/*
=========================================
    VALIDATION
=========================================
*/

if (
    $name === "" ||
    $phone === "" ||
    $service === "" ||
    $appointment_date === "" ||
    $appointment_time === ""
) {

    die("Please fill all required fields.");

}


/*
=========================================
    EMAIL VALIDATION
=========================================
*/

if (
    $email !== "" &&
    !filter_var($email, FILTER_VALIDATE_EMAIL)
) {

    die("Please enter a valid email address.");

}


/*
=========================================
    INSERT APPOINTMENT
=========================================
*/

try {

    $sql = "
        INSERT INTO appointments
        (
            name,
            phone,
            email,
            service,
            appointment_date,
            appointment_time,
            message,
            status
        )
        VALUES
        (
            :name,
            :phone,
            :email,
            :service,
            :appointment_date,
            :appointment_time,
            :message,
            :status
        )
    ";


    $stmt = $pdo->prepare($sql);


    $stmt->execute([

        ":name" => $name,

        ":phone" => $phone,

        ":email" => $email,

        ":service" => $service,

        ":appointment_date" => $appointment_date,

        ":appointment_time" => $appointment_time,

        ":message" => $message,

        ":status" => "Pending"

    ]);


    /*
    =====================================
        SUCCESS
    =====================================
    */

    header(
        "Location: appointment.php?success=1"
    );

    exit;


} catch (PDOException $e) {

    die(
        "Appointment could not be booked. " .
        "Database Error: " .
        htmlspecialchars($e->getMessage())
    );

}