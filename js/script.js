// This code is for smooth scrolling effect
const scroll = new SmoothScroll('.navLink, .banner-btn', {
    speed: 300
});
// This is for the Flavor & Filling buttons on mobile
$('#flavor-title').on('click', function(){
    $(this).toggleClass('active');
    $('#flavor-list').slideToggle('slow');
});
$('#filling-title').on('click', function(){
    $(this).toggleClass('active');
    $('#filling-list').slideToggle('slow');
});
// This is the code for the modal
const swtBtnDesktop = document.getElementById('swtBtn-desktop');
const modal = document.getElementById('modal');
const modalContent = document.getElementById('modal-content');

window.addEventListener('click', outsideClick);
swtBtnDesktop.addEventListener('click', openModal);

function openModal() {
    modal.style.opacity = '1';
    modal.style.visibility = 'visible';
}
function outsideClick(e) {
    if (e.target == modal) {
        modal.style.opacity = '0';
        modal.style.visibility = 'hidden';
    }
}
// CONTACT FORM VALIDATION

let nameValue = document.getElementById("name")
const form = document.getElementById("contact-form");
const nameInput = document.getElementById('name');
const phoneInput = document.getElementById('phone');
const emailInput = document.getElementById("email");
const emailConfirm = document.getElementById("emailConfirm");
const dateInput = document.getElementById("date");
const timeInput = document.getElementById("time");
const servingsInput = document.getElementById("servings");

const nameErrorMsg = document.getElementById('name-errorMsg')
const phoneErrorMsg = document.getElementById('phone-errorMsg')
const emailErrorMsg = document.getElementById('email-errorMsg')
const emailConfirmErrorMsg = document.getElementById("emailConfirm-errorMsg");
const dateErrorMsg = document.getElementById('date-errorMsg')
const timeErrorMsg = document.getElementById('time-errorMsg')
const servingsErrorMsg = document.getElementById('servings-errorMsg')

function validateForm() {
    if (nameInput.value == '') {
        nameErrorMsg.style.display = "block";
        console.log("*** Error message: Name field empty ***");
    }
    if (phoneInput.value == '') {
        phoneErrorMsg.style.display = "block";
        console.log("*** Error message: Phone field empty ***");
    }
    if (emailInput.value == '') {
        emailErrorMsg.style.display = "block";
        console.log("*** Error message: Email field empty ***");
    }
    if (emailConfirm.value != emailInput.value) {
        emailConfirmErrorMsg.style.display = "block";
        console.log(emailConfirm.value)
        console.log("*** Error message: Email's don't match ***");
    }
    // if (dateInput.value == '') {
    //     dateErrorMsg.style.display = "block";
    //     console.log("*** Error message: Date field empty ***");
    // }
    // if (timeInput.value == '') {
    //     timeErrorMsg.style.display = "block";
    //     console.log("*** Error message: Time field empty ***");
    // }
    // if (servingsInput.value == '') {
    //     servingsErrorMsg.style.display = "block";
    //     console.log("*** Error message: Servings field empty ***");
    // }
    else {
        subject.setAttribute('value', 'New email from ' + nameValue.value)
        document.getElementById('validation-complete').click()

    }
}
                               
// FORM SUBMISSION VALUE FROM NAME INPUT
// let nameValue = document.getElementById("name")
// let subject = document.getElementById("subject")
// let submitBtn = document.querySelector(".submit-btn")

// submitBtn.addEventListener('click', addNameOfSender)

// function addNameOfSender(){
//   subject.setAttribute('value', 'New email from ' + nameValue.value)
// }

// This is for mobile
const mobileOnly = window.matchMedia('(max-width: 900px)');
const swtBtnMobile = document.getElementById('swtBtn-mobile');
const openNavBtn = document.getElementById('mobile-openBtn');
const mobileNav = document.getElementById('mobile-nav');
const openIcon = document.querySelector('.openIcon');
const listTitle = document.querySelectorAll('.listTitle-btn');

// mobileOnly.addListener(screenSize);
swtBtnMobile.addEventListener('click', openModal);
openNavBtn.addEventListener('click', openNavMenu);

function openNavMenu(){
    openIcon.classList.toggle('animate');
    mobileNav.classList.toggle('show-nav');
}

// Footer
let today = new Date();
let year = today.getFullYear();
let footerYear = document.getElementById('footer-year');

function updateYear() {
    footerYear.innerText = year;
    console.log(year);
}
updateYear();

AOS.init({
    offset: 150,
    duration: 650
});