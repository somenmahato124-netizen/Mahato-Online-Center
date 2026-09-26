<?php

/*
=========================================
    MAHATO ONLINE CENTER
    CONTACT FORM PROCESS
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
$message = trim($_POST["message"] ?? "");


/*
=========================================
    VALIDATION
=========================================
*/

if ($name === "" || $phone === "" || $message === "") {

    header("Location: index.php?error=required");
    exit;

}


if (
    $email !== "" &&
    !filter_var($email, FILTER_VALIDATE_EMAIL)
) {

    header("Location: index.php?error=email");
    exit;

}


/*
=========================================
    INSERT INTO DATABASE
=========================================
*/

try {

    $sql = "
        INSERT INTO contact_messages
        (
            name,
            phone,
            email,
            message
        )
        VALUES
        (
            :name,
            :phone,
            :email,
            :message
        )
    ";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([

        ":name" => $name,

        ":phone" => $phone,

        ":email" => $email,

        ":message" => $message

    ]);


    /*
    =====================================
        SUCCESS
    =====================================
    */

    header("Location: index.php?success=1");
    exit;


} catch (PDOException $e) {

    header("Location: index.php?error=database");
    exit;

}

?>