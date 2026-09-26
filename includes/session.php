<?php
/*
=========================================
        MAHATO ONLINE CENTER
            SESSION.PHP
=========================================
*/

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/*
|--------------------------------------------------------------------------
| Session Timeout (30 Minutes)
|--------------------------------------------------------------------------
*/

$session_timeout = 1800;

if (isset($_SESSION['LAST_ACTIVITY'])) {

    if ((time() - $_SESSION['LAST_ACTIVITY']) > $session_timeout) {

        session_unset();

        session_destroy();

        header("Location: login.php?expired=1");

        exit();

    }

}

$_SESSION['LAST_ACTIVITY'] = time();

/*
|--------------------------------------------------------------------------
| Login Check Function
|--------------------------------------------------------------------------
*/

function isLoggedIn()
{
    return isset($_SESSION['admin_id']);
}

/*
|--------------------------------------------------------------------------
| Admin Authentication
|--------------------------------------------------------------------------
*/

function requireLogin()
{

    if (!isLoggedIn()) {

        header("Location: login.php");

        exit();

    }

}

/*
|--------------------------------------------------------------------------
| Redirect If Already Logged In
|--------------------------------------------------------------------------
*/

function redirectIfLoggedIn()
{

    if (isLoggedIn()) {

        header("Location: admin/dashboard.php");

        exit();

    }

}

/*
|--------------------------------------------------------------------------
| Logout Function
|--------------------------------------------------------------------------
*/

function logout()
{

    session_unset();

    session_destroy();

    header("Location: login.php");

    exit();

}
?>