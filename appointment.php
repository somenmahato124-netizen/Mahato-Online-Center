<?php

$page = "appointment";

$title = "Book Appointment | Mahato Online Center";

$description = "Book your appointment online at Mahato Online Center.";

include 'includes/header.php';

?>

<!-- =====================================
        PAGE BANNER
====================================== -->

<section class="page-banner">

    <div class="container">

        <h1>Book Appointment</h1>

        <p>
            Schedule your visit quickly and easily.
        </p>

    </div>

</section>

<!-- =====================================
        APPOINTMENT INTRO
====================================== -->
<section class="appointment-section">

    <div class="container">

        <form id="appointmentForm" class="appointment-form">

            ...

        </form>

    </div>

</section>




<section class="appointment-intro">

    <div class="container">

        <div class="section-header">

            <span class="section-tag">

                ONLINE APPOINTMENT

            </span>

            <h2>

                Reserve Your Time

            </h2>

            <p>

                Fill out the form below to book your appointment.
                Our team will contact you to confirm your booking.

            </p>

        </div>

    </div>

</section>

<!-- =====================================
        APPOINTMENT FORM
====================================== -->

<div class="container">

    <form
        id="appointmentForm"
        class="appointment-form"
        action="appointment-process.php"
        method="POST"
    >

        <div class="form-row">

            <div class="form-group">

                <label>Full Name</label>

                <input
                    type="text"
                    name="name"
                    placeholder="Your Full Name"
                    required
                >

            </div>


            <div class="form-group">

                <label>Mobile Number</label>

                <input
                    type="tel"
                    name="phone"
                    placeholder="Mobile Number"
                    required
                >

            </div>

        </div>


        <div class="form-row">

            <div class="form-group">

                <label>Email (Optional)</label>

                <input
                    type="email"
                    name="email"
                    placeholder="Email Address"
                >

            </div>


            <div class="form-group">

                <label>Select Service</label>

                <select name="service" required>

                    <option value="">
                        Choose Service
                    </option>

                    <option value="Aadhaar Service">
                        Aadhaar Service
                    </option>

                    <option value="PAN Card">
                        PAN Card
                    </option>

                    <option value="Passport">
                        Passport
                    </option>

                    <option value="Money Transfer">
                        Money Transfer
                    </option>

                    <option value="AEPS Banking">
                        AEPS Banking
                    </option>

                    <option value="Ticket Booking">
                        Ticket Booking
                    </option>

                    <option value="Others">
                        Others
                    </option>

                </select>

            </div>

        </div>


        <div class="form-row">

            <div class="form-group">

                <label>Preferred Date</label>

                <input
                    type="date"
                    name="date"
                    required
                >

            </div>


            <div class="form-group">

                <label>Preferred Time</label>

                <input
                    type="time"
                    name="time"
                    required
                >

            </div>

        </div>


        <div class="form-group">

            <label>Additional Message</label>

            <textarea
                name="message"
                rows="5"
                placeholder="Write your message..."
            ></textarea>

        </div>


        <button
            type="submit"
            class="btn btn-primary"
        >

            <i class="fa-solid fa-calendar-check"></i>

            Book Appointment

        </button>


    </form>

</div>



                        <!-- Appointment Information -->

            <div class="appointment-info">

                <span class="section-tag">
                    Appointment Information
                </span>

                <h2>
                    Why Book an Appointment?
                </h2>

                <p>
                    Booking an appointment helps us prepare in advance so
                    you receive faster service with minimal waiting time.
                </p>

                <div class="info-box">

                    <div class="info-item">
                        <i class="fa-solid fa-clock"></i>

                        <div>
                            <h4>Save Time</h4>
                            <p>Get priority service at your scheduled time.</p>
                        </div>

                    </div>

                    <div class="info-item">
                        <i class="fa-solid fa-user-check"></i>

                        <div>
                            <h4>Professional Assistance</h4>
                            <p>Our team will guide you through every step.</p>
                        </div>

                    </div>

                    <div class="info-item">
                        <i class="fa-solid fa-shield-halved"></i>

                        <div>
                            <h4>Secure Process</h4>
                            <p>Your personal information is handled safely.</p>
                        </div>

                    </div>

                </div>

            </div>

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
        TERMS & CONDITIONS
====================================== -->

<section class="terms-section">

    <div class="container">

        <div class="section-header">

            <span class="section-tag">
                IMPORTANT INFORMATION
            </span>

            <h2>
                Appointment Guidelines
            </h2>

        </div>

        <div class="terms-box">

            <ul>

                <li>Please arrive at least 10 minutes before your scheduled appointment.</li>

                <li>Bring all required original documents for your selected service.</li>

                <li>If you cannot attend, please inform us in advance.</li>

                <li>Appointments are subject to confirmation by Mahato Online Center.</li>

            </ul>

        </div>

    </div>

</section>

<!-- =====================================
        CALL TO ACTION
====================================== -->

<section class="appointment-cta">

    <div class="container">

        <div class="cta-content">

            <h2>
                Need Immediate Assistance?
            </h2>

            <p>
                Call or WhatsApp us for quick support regarding any of our services.
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

    if (params.get("success") === "1") {

        const alertBox = document.createElement("div");

        alertBox.innerHTML = `
            <div class="success-alert">
                <i class="fa-solid fa-circle-check"></i>

                <span>
                    Your appointment has been booked successfully.
                </span>

                <button onclick="this.parentElement.remove()">
                    &times;
                </button>
            </div>
        `;

        document.body.appendChild(alertBox);

        setTimeout(() => {
            alertBox.remove();
        }, 4000);

        window.history.replaceState(
            {},
            document.title,
            window.location.pathname
        );
    }


    if (params.get("error") === "database") {

        const alertBox = document.createElement("div");

        alertBox.innerHTML = `
            <div class="danger-alert">
                <i class="fa-solid fa-circle-exclamation"></i>

                <span>
                    Appointment could not be booked. Please try again.
                </span>

                <button onclick="this.parentElement.remove()">
                    &times;
                </button>
            </div>
        `;

        document.body.appendChild(alertBox);

        setTimeout(() => {
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