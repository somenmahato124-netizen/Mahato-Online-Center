<?php

$page = "contact";

$title = "Contact Us | Mahato Online Center";

$description = "Contact Mahato Online Center for Aadhaar, PAN Card, Banking, Ticket Booking, Printing and other digital services.";

include 'includes/header.php';

?>

<!-- ===========================
        PAGE BANNER
=========================== -->

<section class="page-banner">

    <div class="container">

        <h1>Contact Us</h1>

        <p>
            We are always happy to help you.
        </p>

    </div>

</section>

<!-- ===========================
        CONTACT SECTION
=========================== -->

<section class="contact-page">

    <div class="container">

        <div class="contact-grid">

            <!-- Contact Information -->

            <div class="contact-info">

                <span class="section-tag">

                    Get In Touch

                </span>

                <h2>

                    Mahato Online Center

                </h2>

                <p>

                    Contact us for Government Services,
                    Banking Services, Online Applications,
                    Ticket Booking, Printing and many more.

                </p>

                <div class="contact-item">

                    <i class="fa-solid fa-phone"></i>

                    <div>

                        <h4>Phone</h4>

                        <p>

                            <a href="tel:+917076111493">
                                +91 7076111493
                            </a>

                        </p>

                    </div>

                </div>

                <div class="contact-item">

                    <i class="fa-brands fa-whatsapp"></i>

                    <div>

                        <h4>WhatsApp</h4>

                        <p>

                            <a href="https://wa.me/917076111493" target="_blank">

                                Chat on WhatsApp

                            </a>

                        </p>

                    </div>

                </div>

                <div class="contact-item">

                    <i class="fa-solid fa-location-dot"></i>

                    <div>

                        <h4>Address</h4>

                        <p>

                            Your Shop Address Here

                        </p>

                    </div>

                </div>

            </div>

            <!-- Contact Form -->

            <div class="contact-form">

                <span class="section-tag">

                    Send Message

                </span>

                <h2>

                    Contact Form

                </h2>

                <form
                    action="contact-process.php"
                    method="POST">

                    <div class="form-group">

                        <input
                            type="text"
                            name="name"
                            placeholder="Your Full Name"
                            required>

                    </div>

                    <div class="form-group">

                        <input
                            type="tel"
                            name="phone"
                            placeholder="Mobile Number"
                            required>

                    </div>

                    <div class="form-group">

                        <input
                            type="email"
                            name="email"
                            placeholder="Email Address">

                    </div>

                    <div class="form-group">

                        <textarea
                            name="message"
                            rows="6"
                            placeholder="Write Your Message..."
                            required></textarea>

                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary">

                        Send Message

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>



<!-- =====================================
        GOOGLE MAP SECTION
====================================== -->

<section class="map-section">

    <div class="container">

        <div class="section-header">

            <span class="section-tag">
                OUR LOCATION
            </span>

            <h2>
                Visit Mahato Online Center
            </h2>

            <p>
                Find us easily using Google Maps.
            </p>

        </div>

        <div class="map-box">

            <!-- Replace the src below with your own Google Maps Embed link -->

            <iframe
                src="https://www.google.com/maps/embed?pb="
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

    </div>

</section>

<!-- =====================================
        BUSINESS HOURS
====================================== -->

<section class="business-hours">

    <div class="container">

        <div class="section-header">

            <span class="section-tag">
                BUSINESS HOURS
            </span>

            <h2>
                Opening Hours
            </h2>

        </div>

        <div class="hours-card">

            <ul>

                <li>
                    <strong>Monday - Saturday</strong>
                    <span>09:00 AM - 08:00 PM</span>
                </li>

                <li>
                    <strong>Sunday</strong>
                    <span>10:00 AM - 02:00 PM</span>
                </li>

            </ul>

        </div>

    </div>

</section>

<!-- =====================================
        FREQUENTLY ASKED QUESTIONS
====================================== -->

<section class="faq-section">

    <div class="container">

        <div class="section-header">

            <span class="section-tag">
                FAQ
            </span>

            <h2>
                Frequently Asked Questions
            </h2>

        </div>

        <div class="faq-container">

            <div class="faq-item">
                <h3>Do I need original documents?</h3>
                <p>
                    Yes, original documents may be required depending on the service.
                </p>
            </div>

            <div class="faq-item">
                <h3>Can I contact you on WhatsApp?</h3>
                <p>
                    Yes. You can contact us anytime on WhatsApp at <strong>7076111493</strong>.
                </p>
            </div>

            <div class="faq-item">
                <h3>Do you provide ticket booking services?</h3>
                <p>
                    Yes. We provide Railway, Bus and Flight Ticket Booking services.
                </p>
            </div>

        </div>

    </div>

</section>

<!-- =====================================
        CALL TO ACTION
====================================== -->

<section class="contact-cta">

    <div class="container">

        <div class="cta-content">

            <h2>
                Need Any Digital Service?
            </h2>

            <p>
                Call or WhatsApp us today for quick and reliable assistance.
            </p>

            <div class="cta-buttons">

                <a href="tel:+917076111493" class="btn btn-primary">
                    <i class="fa-solid fa-phone"></i>
                    Call Now
                </a>

                <a href="https://wa.me/917076111493"
                   target="_blank"
                   class="btn btn-success">
                    <i class="fa-brands fa-whatsapp"></i>
                    WhatsApp
                </a>

            </div>

        </div>

    </div>

</section>



<script>
document.addEventListener("DOMContentLoaded", function () {

    const params = new URLSearchParams(window.location.search);

    /* ==============================
       CONTACT SUCCESS
    ============================== */

    if (params.get("contact_success") === "1") {

        const alertBox = document.createElement("div");

        alertBox.innerHTML = `
            <div class="success-alert">

                <i class="fa-solid fa-circle-check"></i>

                <span>
                    Your message has been sent successfully.
                </span>

                <button type="button"
                        onclick="this.parentElement.remove()">
                    &times;
                </button>

            </div>
        `;

        document.body.appendChild(alertBox);

        setTimeout(function () {
            alertBox.remove();
        }, 4000);

        window.history.replaceState(
            {},
            document.title,
            window.location.pathname
        );
    }


    /* ==============================
       CONTACT ERROR
    ============================== */

    if (params.get("contact_error") === "1") {

        const alertBox = document.createElement("div");

        alertBox.innerHTML = `
            <div class="danger-alert">

                <i class="fa-solid fa-circle-exclamation"></i>

                <span>
                    Message could not be sent. Please try again.
                </span>

                <button type="button"
                        onclick="this.parentElement.remove()">
                    &times;
                </button>

            </div>
        `;

        document.body.appendChild(alertBox);

        setTimeout(function () {
            alertBox.remove();
        }, 4000);

        window.history.replaceState(
            {},
            document.title,
            window.location.pathname
        );
    }

});
</script>

<?php include 'includes/footer.php'; ?>