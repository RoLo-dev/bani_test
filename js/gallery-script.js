// This code is for smooth scrolling effect
const scroll = new SmoothScroll('.navLink', {
    speed: 300
})
const mobileNav = document.getElementById('mobile-nav');
const openIcon = document.querySelector('.openIcon');
const openNavBtn = document.getElementById('mobile-openBtn');

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
let today = new Date();
let year = today.getFullYear();
let footerYear = document.getElementById('footer-year');

function updateYear() {
    footerYear.innerText = year;
    console.log(year);
}
updateYear();