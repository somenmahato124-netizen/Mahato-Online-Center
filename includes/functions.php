<?php
/*
=========================================
        MAHATO ONLINE CENTER
        FUNCTIONS.PHP
=========================================
*/

require_once __DIR__ . '/config.php';

/*=========================================
        CLEAN INPUT
=========================================*/
function clean($data)
{
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

/*=========================================
        REDIRECT
=========================================*/
function redirect($url)
{
    header("Location: " . $url);
    exit();
}

/*=========================================
        FLASH MESSAGE
=========================================*/
function setFlash($type, $message)
{
    $_SESSION['flash'] = [
        'type'    => $type,
        'message' => $message
    ];
}

function showFlash()
{
    if (isset($_SESSION['flash'])) {

        $flash = $_SESSION['flash'];

        echo '<div class="alert alert-' .
            $flash['type'] .
            ' alert-dismissible fade show" role="alert">';

        echo htmlspecialchars($flash['message']);

        echo '<button type="button"
                class="btn-close"
                data-bs-dismiss="alert"></button>';

        echo '</div>';

        unset($_SESSION['flash']);
    }
}

/*=========================================
        DATE FORMAT
=========================================*/
function formatDate($date)
{
    return date("d M Y", strtotime($date));
}

function formatDateTime($date)
{
    return date("d M Y h:i A", strtotime($date));
}

/*=========================================
        FILE UPLOAD
=========================================*/
function uploadImage($file, $folder = "assets/uploads/")
{
    if (!isset($file['tmp_name']) || $file['error'] !== UPLOAD_ERR_OK) {
        return false;
    }

    $allowed = ['jpg', 'jpeg', 'png', 'webp'];

    $extension = strtolower(
        pathinfo($file['name'], PATHINFO_EXTENSION)
    );

    if (!in_array($extension, $allowed)) {
        return false;
    }

    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    $filename = time() . "_" . uniqid() . "." . $extension;

    $destination = $folder . $filename;

    if (move_uploaded_file($file['tmp_name'], $destination)) {
        return $filename;
    }

    return false;
}

/*=========================================
        DELETE IMAGE
=========================================*/
function deleteImage($path)
{
    if (!empty($path) && file_exists($path)) {
        unlink($path);
    }
}

/*=========================================
        DATABASE HELPERS
=========================================*/

function fetchAll($sql, $params = [])
{
    global $pdo;

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    return $stmt->fetchAll();
}

function fetchOne($sql, $params = [])
{
    global $pdo;

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    return $stmt->fetch();
}

function executeQuery($sql, $params = [])
{
    global $pdo;

    $stmt = $pdo->prepare($sql);

    return $stmt->execute($params);
}

/*=========================================
        WEBSITE SETTINGS
=========================================*/

function siteName()
{
    return SITE_NAME;
}

function phone()
{
    return PHONE_NUMBER;
}

function whatsapp()
{
    return WHATSAPP_NUMBER;
}

/*=========================================
        CURRENT PAGE
=========================================*/

function currentPage()
{
    return basename($_SERVER['PHP_SELF']);
}

/*=========================================
        ACTIVE MENU
=========================================*/

function activeMenu($page)
{
    return currentPage() == $page ? "active" : "";
}

/*=========================================
        ADMIN CHECK
=========================================*/

function isAdmin()
{
    return isset($_SESSION['admin_id']);
}

/*=========================================
        RANDOM STRING
=========================================*/

function randomString($length = 10)
{
    return substr(
        str_shuffle(
            "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
        ),
        0,
        $length
    );
}

/*=========================================
        SUCCESS JSON RESPONSE
=========================================*/

function jsonResponse($status, $message, $data = [])
{
    header("Content-Type: application/json");

    echo json_encode([
        "status"  => $status,
        "message" => $message,
        "data"    => $data
    ]);

    exit();
}

?>