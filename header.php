<?php

require_once __DIR__ . '/config.php';

if (!isset($title)) {
    $title = SITE_NAME;
}

if (!isset($description)) {
    $description = "Mahato Online Center - Trusted Digital Service Center";
}

if (!isset($keywords)) {
    $keywords = "Mahato Online Center, Aadhaar, PAN Card, Voter ID, Passport, Banking, AEPS, Online Center";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Meta -->

    <meta charset="UTF-8">

    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <!-- SEO -->


    <link rel="icon" type="image/png" href="assets/images/image13.png">

    <title><?= htmlspecialchars($title); ?></title>

    <meta
        name="description"
        content="<?= htmlspecialchars($description); ?>">

    <meta
        name="keywords"
        content="<?= htmlspecialchars($keywords); ?>">

    <meta
        name="author"
        content="Mahato Online Center">

    <meta
        name="robots"
        content="index, follow">

    <!-- Theme -->

    <meta
        name="theme-color"
        content="#0d6efd">

    <!-- Open Graph -->

    <meta property="og:title"
          content="<?= htmlspecialchars($title); ?>">

    <meta property="og:description"
          content="<?= htmlspecialchars($description); ?>">

    <meta property="og:type"
          content="website">

    <meta property="og:site_name"
          content="<?= SITE_NAME; ?>">

    <!-- Favicon -->

    <link
        rel="icon"
        type="image/png"
        href="assets/images/favicon.png">

    <!-- Google Fonts -->

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Font Awesome -->

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- AOS Animation -->

    <link
        rel="stylesheet"
        href="https://unpkg.com/aos@2.3.4/dist/aos.css">

    <!-- Main CSS -->

    <link
        rel="stylesheet"
        href="assets/css/style.css">

</head>

<body>

<!-- ===============================
        PAGE LOADER
================================ -->

<div id="loader">

    <div class="loader-spinner"></div>

</div>

<!-- ===============================
        TOP BAR
================================ -->

<div class="top-bar">

    <div class="container">

        <div class="top-bar-content">

            <div class="top-left">

                <a href="tel:+91<?= PHONE_NUMBER; ?>">

                    <i class="fa-solid fa-phone"></i>

                    +91 <?= PHONE_NUMBER; ?>

                </a>

                <a href="https://wa.me/<?= WHATSAPP_NUMBER; ?>"
                   target="_blank">

                    <i class="fa-brands fa-whatsapp"></i>

                    WhatsApp

                </a>

            </div>

            <div class="top-right">

                <span>

                    Welcome to
                    <strong><?= SITE_NAME; ?></strong>

                </span>

            </div>

        </div>

    </div>

</div>

<!-- ===============================
        NAVBAR
================================ -->

<?php include __DIR__ . '/navbar.php'; ?>

<!-- ===============================
        MAIN CONTENT
================================ -->

<main>