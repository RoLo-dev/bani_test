// This code is for smooth scrolling effect
const scroll = new SmoothScroll('.navLink', {
    speed: 300
})
// This is for the Flavor & Filling buttons on mobile
$('#flavor-title').on('click', function(){
    $('#flavor-list').slideToggle('slow');
});
$('#filling-title').on('click', function(){
    $('#filling-list').slideToggle('slow');
});
// This is the code for the modal
let swtBtnDesktop = document.getElementById('swtBtn-desktop');
let modal = document.getElementById('modal');
let modalContent = document.getElementById('modal-content');

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
// This is for mobile
let mobileOnly = window.matchMedia('(max-width: 690px)');
const swtBtnMobile = document.getElementById('swtBtn-mobile');
const openNavBtn = document.getElementById('mobile-openBtn');
const mobileNav = document.getElementById('mobile-nav');
const openIcon = document.querySelector('.openIcon');

mobileOnly.addListener(function(){
   if (mobileOnly.matches) {
        swtBtnMobile.addEventListener('click', displaySweetList);
    }
});
// swtBtnMobile.addEventListener('click', displaySweetList);
openNavBtn.addEventListener('click', openNavMenu);

// function screenSize() {
//     if (mobileOnly.matches) {
//         swtBtnMobile.addEventListener('click', displaySweetList);
//     }
// };
// if (mobileOnly.matches) {
//       swtBtnMobile.addEventListener('click', displaySweetList);
//   }
function openNavMenu(){
  openIcon.classList.toggle('animate');
  mobileNav.classList.toggle('show-nav')
}
function displaySweetList(){
    modal.classList.toggle('show');
};

AOS.init({
    offset: 150,
    duration: 350
});