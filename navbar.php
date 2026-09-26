<?php
/*
=========================================
        MAHATO ONLINE CENTER
            NAVBAR.PHP
=========================================
*/
?>

<header class="header" id="header">

    <div class="container">

        <nav class="navbar">

            <!-- ===========================
                    LOGO
            =========================== -->

            <a href="index.php" class="logo">

                <img
                    src="assets/images/image15.png"
                    alt="Mahato Online Center Logo">

                <div class="logo-text">

                    <h2>Mahato Online Center</h2>

                    <span>Digital Service Center</span>

                </div>

            </a>

            <!-- ===========================
                    NAVIGATION MENU
            =========================== -->

            <ul class="nav-menu" id="navMenu">

                <li>
                    <a href="index.php"
                       class="<?= ($page == 'home') ? 'active' : ''; ?>">
                        Home
                    </a>
                </li>

                <li>
                    <a href="about.php"
                       class="<?= ($page == 'about') ? 'active' : ''; ?>">
                        About
                    </a>
                </li>

                <li>
                    <a href="services.php"
                       class="<?= ($page == 'services') ? 'active' : ''; ?>">
                        Services
                    </a>
                </li>

                <li>
                    <a href="gallery.php"
                       class="<?= ($page == 'gallery') ? 'active' : ''; ?>">
                        Gallery
                    </a>
                </li>

                <li>
                    <a href="appointment.php"
                       class="<?= ($page == 'appointment') ? 'active' : ''; ?>">
                        Appointment
                    </a>
                </li>

                <li>
                    <a href="contact.php"
                       class="<?= ($page == 'contact') ? 'active' : ''; ?>">
                        Contact
                    </a>
                </li>

            </ul>

            <!-- ===========================
                    RIGHT BUTTONS
            =========================== -->



            <!-- ===========================
                    MOBILE MENU BUTTON
            =========================== -->

            <button
                class="menu-toggle"
                id="menuToggle"
                aria-label="Toggle Menu">

                <i class="fa-solid fa-bars"></i>

            </button>

        </nav>

    </div>

</header>

<!-- ===========================
        MOBILE MENU
=========================== -->

<div class="mobile-menu" id="mobileMenu">

    <div class="mobile-menu-header">

        <h3>Menu</h3>

        <button
            class="close-menu"
            id="closeMenu">

            <i class="fa-solid fa-xmark"></i>

        </button>

    </div>

    <ul>

        <li>
            <a href="index.php">Home</a>
        </li>

        <li>
            <a href="about.php">About</a>
        </li>

        <li>
            <a href="services.php">Services</a>
        </li>

        <li>
            <a href="gallery.php">Gallery</a>
        </li>

        <li>
            <a href="appointment.php">Appointment</a>
        </li>

        <li>
            <a href="contact.php">Contact</a>
        </li>

    </ul>

    <div class="mobile-contact">

        <a
            href="tel:+91<?= PHONE_NUMBER; ?>"
            class="mobile-call">

            <i class="fa-solid fa-phone"></i>

            Call Now

        </a>

        <a
            href="https://wa.me/<?= WHATSAPP_NUMBER; ?>"
            target="_blank"
            class="mobile-whatsapp">

            <i class="fa-brands fa-whatsapp"></i>

            WhatsApp

        </a>

    </div>

</div>

<!-- ===========================
        MOBILE OVERLAY
=========================== -->

<div class="mobile-overlay" id="mobileOverlay"></div>