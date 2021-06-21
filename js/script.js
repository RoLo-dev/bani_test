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
// Contact form validation
const form = document.getElementById("contact-form");
const email = document.getElementById("email");
const emailConfirm = document.getElementById("emailConfirm");
const emailError = document.getElementById("emailError");

// form.addEventListener('submit', (e) => {
//     if (emailConfirm != email) {
//         e.preventDefault();
//         emailError.style.visibility = "visible";
//         console.log("hello world");
//     }
// });

// function validateForm(e) {
//     if (emailConfirm != email) {
//         e.preventDefault();
//         emailError.style.visibility = "visible";
//         console.log("hello world");
//     } else {
//         return true;
//     }
// }

// FORM SUBMISSION VALUE FROM NAME INPUT
let nameValue = document.getElementById("name")
let subject = document.getElementById("subject")
let submitBtn = document.querySelector(".submit-btn")

submitBtn.addEventListener('click', addNameOfSender)

function addNameOfSender(){
  subject.setAttribute('value', 'New email from ' + nameValue.value)
}

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
