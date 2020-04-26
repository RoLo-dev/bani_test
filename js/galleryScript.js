const openNavBtn = document.getElementById('mobile-openBtn');
const mobileNav = document.getElementById('mobile-nav');
const openIcon = document.querySelector('.openIcon');

openNavBtn.addEventListener('click', openNavMenu);

function openNavMenu(){
  openIcon.classList.toggle('animate');
  mobileNav.classList.toggle('show-nav')
}

AOS.init({
    offset: 250,
    duration: 650
});