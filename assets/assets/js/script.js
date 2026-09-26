/*
=========================================
        MAHATO ONLINE CENTER
            SCRIPT.JS
            PART 1
=========================================
*/

// ======================================
// PAGE LOADER
// ======================================

window.addEventListener("load", function () {

    const loader = document.getElementById("loader");

    if (loader) {

        setTimeout(function () {

            loader.style.opacity = "0";

            setTimeout(function () {

                loader.style.display = "none";

            }, 500);

        }, 800);

    }

});


// ======================================
// STICKY HEADER
// ======================================

const header = document.querySelector(".header");

window.addEventListener("scroll", function () {

    if (!header) return;

    if (window.scrollY > 50) {

        header.classList.add("sticky");

    } else {

        header.classList.remove("sticky");

    }

});


// ======================================
// MOBILE MENU
// ======================================

document.addEventListener("DOMContentLoaded", function () {

    const menuToggle = document.getElementById("menuToggle");

    const mobileMenu = document.getElementById("mobileMenu");

    const closeMenu = document.getElementById("closeMenu");

    const overlay = document.getElementById("mobileOverlay");

    if (menuToggle && mobileMenu) {

        menuToggle.addEventListener("click", function () {

            mobileMenu.classList.add("active");

            if (overlay) {

                overlay.classList.add("active");

            }

        });

    }

    if (closeMenu && mobileMenu) {

        closeMenu.addEventListener("click", function () {

            mobileMenu.classList.remove("active");

            if (overlay) {

                overlay.classList.remove("active");

            }

        });

    }

    if (overlay && mobileMenu) {

        overlay.addEventListener("click", function () {

            mobileMenu.classList.remove("active");

            overlay.classList.remove("active");

        });

    }

});


// ======================================
// CLOSE MENU AFTER CLICKING LINK
// ======================================

const mobileLinks =
document.querySelectorAll("#mobileMenu a");

mobileLinks.forEach(function (link) {

    link.addEventListener("click", function () {

        const mobileMenu =
        document.getElementById("mobileMenu");

        const overlay =
        document.getElementById("mobileOverlay");

        if (mobileMenu) {

            mobileMenu.classList.remove("active");

        }

        if (overlay) {

            overlay.classList.remove("active");

        }

    });

});


// ======================================
// SMOOTH SCROLL
// ======================================

document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {

    anchor.addEventListener("click", function (e) {

        const target =
        document.querySelector(this.getAttribute("href"));

        if (target) {

            e.preventDefault();

            target.scrollIntoView({

                behavior: "smooth"

            });

        }

    });

});


// ======================================
// CONSOLE MESSAGE
// ======================================

console.log("Mahato Online Center Loaded Successfully");


/*
=========================================
        MAHATO ONLINE CENTER
            SCRIPT.JS
            PART 2
=========================================
*/


// ======================================
// BACK TO TOP BUTTON
// ======================================

const backToTop =
document.getElementById("backToTop");

window.addEventListener("scroll", function () {

    if (!backToTop) return;

    if (window.scrollY > 300) {

        backToTop.classList.add("show");

    } else {

        backToTop.classList.remove("show");

    }

});

if (backToTop) {

    backToTop.addEventListener("click", function () {

        window.scrollTo({

            top: 0,

            behavior: "smooth"

        });

    });

}


// ======================================
// COUNTER ANIMATION
// ======================================

const counters =
document.querySelectorAll(".counter");

let counterStarted = false;

function startCounter() {

    counters.forEach(function (counter) {

        const target =
        parseInt(counter.dataset.target);

        let count = 0;

        const speed = target / 100;

        function updateCounter() {

            if (count < target) {

                count += speed;

                counter.innerText =
                Math.ceil(count);

                requestAnimationFrame(updateCounter);

            } else {

                counter.innerText = target;

            }

        }

        updateCounter();

    });

}

window.addEventListener("scroll", function () {

    const section =
    document.querySelector(".counter-section");

    if (!section) return;

    const top =
    section.offsetTop - window.innerHeight + 150;

    if (window.scrollY >= top && !counterStarted) {

        startCounter();

        counterStarted = true;

    }

});


// ======================================
// FORM VALIDATION
// ======================================

function validateForm(form) {

    let valid = true;

    const fields =
    form.querySelectorAll(
        "input[required], textarea[required], select[required]"
    );

    fields.forEach(function (field) {

        if (field.value.trim() === "") {

            field.style.border =
            "1px solid red";

            valid = false;

        } else {

            field.style.border =
            "1px solid #ddd";

        }

    });

    return valid;

}


// ======================================
// CONTACT FORM
// ======================================

const contactForm =
document.getElementById("contactForm");

if (contactForm) {

    contactForm.addEventListener("submit", function (e) {

        if (!validateForm(this)) {

            e.preventDefault();

            alert("Please fill all required fields.");

        }

    });

}


// ======================================
// APPOINTMENT FORM
// ======================================

const appointmentForm =
document.getElementById("appointmentForm");

if (appointmentForm) {

    appointmentForm.addEventListener("submit", function (e) {

        if (!validateForm(this)) {

            e.preventDefault();

            alert("Please fill all required fields.");

        }

    });

}


// ======================================
// PHONE VALIDATION
// ======================================

const phoneInputs =
document.querySelectorAll('input[type="tel"]');

phoneInputs.forEach(function (input) {

    input.addEventListener("blur", function () {

        const phonePattern =
        /^[6-9]\d{9}$/;

        if (this.value !== "" &&
            !phonePattern.test(this.value)) {

            this.style.border =
            "1px solid red";

        } else {

            this.style.border =
            "1px solid #ddd";

        }

    });

});


// ======================================
// IMAGE LAZY LOADING
// ======================================

document.querySelectorAll("img")
.forEach(function (img) {

    img.loading = "lazy";

});


// ======================================
// CURRENT YEAR
// ======================================

const currentYear =
document.getElementById("currentYear");

if (currentYear) {

    currentYear.innerText =
    new Date().getFullYear();

}


// ======================================
// AOS INITIALIZE
// ======================================

if (typeof AOS !== "undefined") {

    AOS.init({

        duration: 800,

        once: true

    });

}


// ======================================
// END MESSAGE
// ======================================

console.log("Mahato Online Center Script Loaded Successfully");



/*
=========================================
        MAHATO ONLINE CENTER
            SCRIPT.JS
            PART 3
=========================================
*/


// ======================================
// ACTIVE NAVIGATION LINK
// ======================================

const currentPage =
window.location.pathname.split("/").pop();

document.querySelectorAll(".nav-menu a, #mobileMenu a")
.forEach(function(link){

    const href = link.getAttribute("href");

    if(href === currentPage){

        link.classList.add("active");

    }

});



// ======================================
// HEADER HIDE / SHOW ON SCROLL
// ======================================

let lastScroll = 0;

const pageHeader =
document.querySelector(".header");

window.addEventListener("scroll", function(){

    if(!pageHeader) return;

    const currentScroll = window.pageYOffset;

    if(currentScroll <= 0){

       pageHeader.style.top = "0";

        return;

    }

    if(currentScroll > lastScroll &&
       currentScroll > 100){

        pageHeader.style.top = "-100px";

    }

    else{

        pageHeader.style.top = "0";

    }

    lastScroll = currentScroll;

});



// ======================================
// BUTTON RIPPLE EFFECT
// ======================================

document.querySelectorAll(".btn")
.forEach(function(button){

    button.addEventListener("click", function(e){

        const ripple =
        document.createElement("span");

        ripple.className = "ripple";

        ripple.style.left =
        e.offsetX + "px";

        ripple.style.top =
        e.offsetY + "px";

        this.appendChild(ripple);

        setTimeout(function(){

            ripple.remove();

        },600);

    });

});



// ======================================
// IMAGE FADE-IN
// ======================================

const allImages =
document.querySelectorAll("img");

allImages.forEach(function(img){

    img.addEventListener("load", function(){

        this.classList.add("loaded");

    });

});



// ======================================
// PREVENT DOUBLE FORM SUBMIT
// ======================================

document.querySelectorAll("form")
.forEach(function(form){

    form.addEventListener("submit", function(){

        const btn =
        form.querySelector("button[type='submit']");

        if(btn){

            btn.disabled = true;

            btn.innerHTML = "Please Wait...";

        }

    });

});



// ======================================
// SUCCESS MESSAGE
// ======================================

console.log("All JavaScript Loaded Successfully.");