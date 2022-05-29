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
let nameValue = document.getElementById('name')
const form = document.getElementById('contact-form');
const nameInput = document.getElementById('name');
const phoneInput = document.getElementById('phone');
const emailInput = document.getElementById('email');
const emailConfirm = document.getElementById('emailConfirm');
const dateInput = document.getElementById('date');
const timeInput = document.getElementById('time');
const servingsInput = document.getElementById('servings');

const nameErrorMsg = document.getElementById('name-errorMsg')
const phoneErrorMsg = document.getElementById('phone-errorMsg')
const emailErrorMsg = document.getElementById('email-errorMsg')
const emailConfirmErrorMsg = document.getElementById('emailConfirm-errorMsg');
const dateErrorMsg = document.getElementById('date-errorMsg')
const timeErrorMsg = document.getElementById('time-errorMsg')
const servingsErrorMsg = document.getElementById('servings-errorMsg')

function validateForm() {
    // if (nameInput.value == '') {
    //     nameErrorMsg.style.display = "block";
    //     console.log("*** Error message: Name field empty ***");
    // }
    // if (phoneInput.value == '') {
    //     phoneErrorMsg.style.display = "block";
    //     console.log("*** Error message: Phone field empty ***");
    // }
    if (emailInput.value == '') {
        emailErrorMsg.style.display = 'block';
    }
    if (emailConfirm.value != emailInput.value) {
        emailConfirmErrorMsg.style.display = 'block';
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
document.getElementById('mobile-nav').addEventListener('click', function() {
    mobileNav.classList.remove('show-nav')
    openIcon.classList.toggle('animate')
})

// Footer
let currentDay = new Date();
let year = currentDay.getFullYear();
let footerYear = document.getElementById('footer-year');

function updateYear() {
    footerYear.innerText = year;
    console.log(year);
}
updateYear();

// AOS.init({
//     offset: 150,
//     duration: 650
// });

// CURRENT HOURS
var sunday = '9:00AM - 4:00PM';
var monday = '<TMPL_VAR ESCAPE=HTML NAME="m">';
var tuesday = '<TMPL_VAR ESCAPE=HTML NAME="t">';
var wednesday = '10:00AM - 6:00PM';
var thursday = '10:00AM - 6:00PM';
var friday = '10:00AM - 6:00PM';
var saturday = '9:00AM - 4:00PM';
var timeString;
var startHours;
var endHours;
var startMinutes;
var endMinutes;
var date = new Date();
var today = date.getDay();

switch(today){
    case 0:
        document.querySelector('.sunday').classList.toggle('bold')
        console.log(today)
        break;
    case 1:
        document.querySelector('.monday').classList.toggle('bold')
        break;
    case 2:
        document.querySelector('.tuesday').classList.toggle('bold')
        break;
    case 3:
        document.querySelector('.wednesday').classList.toggle('bold')
        break;
    case 4:
        document.querySelector('.thursday').classList.toggle('bold')
        break;
    case 5:
        document.querySelector('.friday').classList.toggle('bold')
        break;
    case 6:
        document.querySelector('.saturday').classList.toggle('bold')
        break;
}

// setTimeout(function() {
//     switch(today){
//         case 0:
//             timeString = sunday.split('-');
//             break;
//         case 1:
//             timeString = monday.split('-');
//             break;
//         case 2:
//             timeString = tuesday.split('-');
//             break;
//         case 3:
//             timeString = wednesday.split('-');
//             break;
//         case 4:
//             timeString = thursday.split('-');
//             break;
//         case 5:
//             timeString = friday.split('-');
//             break;
//         case 6:
//             timeString = saturday.split('-');
//             break;
//     }
//     if (timeString[0].search('AM') > -1 || timeString[0].search('am') > -1){
//         startHours = parseInt(timeString[0].substr(0,2), 10);
//         if (startHours == '12') {
//             startHours = 0;
//         }
//         startMinutes = parseInt(timeString[0].substr(3,2), 10)
//     } else {
//         startHours = parseInt(timeString[0].substr(0,2), 10) + 12;
//         if (startHours == '24') {
//             startHours = 12;
//         }
//         startMinutes = parseInt(timeString[0].substr(3,2), 10)
//     }

//     if (timeString[1].search('AM') > -1 || timeString[1].search('am') > -1) {
//         endHours = parseInt(timeString[1].substr(0,2), 10);
//         if (endHours == '12') {
//             endHours = 0;
//         }
//         endMinutes = parseInt(timeString[1].substr(3,2), 10)
//     }
//     else {
//         endHours = parseInt(timeString[1].substr(0,2), 10) + 12;
//         if (endHours == '24') {
//             endHours = 12;
//         }
//         endMinutes = parseInt(timeString[1].substr(3,2), 10)
//     }

//     var startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate(),startHours, startMinutes);
//     var endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate(),endHours, endMinutes);

//     function formatAMPM(date) {
//         var hours = date.getHours();
//         var minutes = date.getMinutes();
//         var ampm = hours >= 12 ? 'PM' : 'AM';
//         hours = hours % 12;
//         hours = hours ? hours : 12;
//         minutes = minutes < 10 ? '0'+minutes : minutes;
//         var strTime = hours + ':' + minutes + ' ' + ampm;
//         return strTime;
//     }

//     var hoursPlaceholder = document.getElementById('current-storeHours');
//     if (date < startDate) {
//         hoursPlaceholder.innerHTML = "closed, open at " + formatAMPM(startDate);
//     }
//     else if (date > startDate && date < endDate) {
//         hoursPlaceholder.innerHTML = "Open until " + formatAMPM(endDate);
//     }
//     else if (date > startDate && date > endDate && startDate > endDate) {
//         hoursPlaceholder.innerHTML = "Open until " + formatAMPM(endDate);
//     }
//     else if (date > endDate) {
//         hoursPlaceholder.innerHTML = "Closed now";
//     }
// }, 1000)