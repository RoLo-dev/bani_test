// This code is for smooth scrolling effect
$(document).ready(function(){
    // Add smooth scrolling to all links
    $(".navLink").on('click', function(event) {
        if (this.hash !== "b") {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;
            $('html, body').animate(
                {scrollTop: $(hash).offset().top},
                200, 
                function(){window.location.hash = hash;}
            );
        } // End if
    });
    // This is for the Flavor & Filling buttons on mobile
    $('#flavor-title').on('click', function(){
        $('#flavor-list').slideToggle('slow');
    });
    $('#filling-title').on('click', function(){
        $('#filling-list').slideToggle('slow');
    });
});
// This is the code for the modal
let swtBtn = document.querySelector('.swtBtn');
let modal = document.getElementById('modal');
let modalContent = document.getElementById('modal-content');

window.addEventListener('click', outsideClick);

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

mobileOnly.addListener(screenSize);
swtBtnMobile.addEventListener('click', displaySweetList);
openNavBtn.addEventListener('click', openNavMenu);

function screenSize() {
    if (mobileOnly.matches) {
        swtBtnMobile.addEventListener('click', displaySweetList);
    }
};
function openNavMenu(){
  openIcon.classList.toggle('animate');
  mobileNav.classList.toggle('show-nav')
}
function displaySweetList(){
    modal.classList.toggle('show');
};

AOS.init({
    offset: 250,
    duration: 650
});