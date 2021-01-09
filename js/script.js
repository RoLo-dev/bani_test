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
const form = document.getElementById('contact-form');
let name = document.forms['contact-form']['name'].value;
let phone = document.forms['contact-form']['phone'].value;
let email = document.forms['contact-form']['email'].value;
let emailConfirm = document.forms['contact-form']['emailConfirm'].value;
let date = document.forms['contact-form']['date'].value;
const emailError = document.getElementById('emailError');

// form.addEventListener('click', validateForm);

// function validateForm() {
//     // nameInput();
//     console.log('clicked');
//     emailInput();
//     e.preventDefault();
// }

// function nameInput() {
//     if(fullName === ''){
//         return false;
//     } else {
//         return true;
//     }
// }
// function emailInput() {
//     if(email === emailConfirm){
//         emailError.visibility = "visible";
//         return false;
//     } else {
//         return true;
//     }
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

AOS.init({
    offset: 150,
    duration: 650
});