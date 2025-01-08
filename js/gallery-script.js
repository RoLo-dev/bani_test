// This code is for smooth scrolling effect
const scroll = new SmoothScroll('.navLink', {
    speed: 300
})
const mobileNav = document.getElementById('mobile-nav');
const openIcon = document.querySelector('.openIcon');
const openNavBtn = document.getElementById('mobile-openBtn');
const yelpLink = document.getElementById('nav-yelp-link');

openNavBtn.addEventListener('click', openNavMenu);

function openNavMenu(){
    openIcon.classList.toggle('animate');
    mobileNav.classList.toggle('show-nav');

    const navAnchorTag = document.querySelectorAll('.nav-link-anchor')

    if(mobileNav.classList.contains('show-nav')){
        navAnchorTag.forEach((el) => {
            el.setAttribute('tabindex', '0')
        })
    } else{
        navAnchorTag.forEach((el) => {
            el.setAttribute('tabindex', '-1')
        })
    }
}
document.getElementById('mobile-nav').addEventListener('click', function() {
    mobileNav.classList.remove('show-nav')
    openIcon.classList.toggle('animate')
})
openNavBtn.addEventListener('keydown', (event) =>{
    if(event.key == 13){
        openNavMenu();
    }
});
yelpLink.addEventListener('keydown', (event) => {
    if (event.key == 'Tab') {
        event.preventDefault();
        if (openNavBtn) {
            openNavBtn.focus();
        }
    }
});

// Footer
let today = new Date();
let year = today.getFullYear();
let footerYear = document.getElementById('footer-year');

function updateYear() {
    footerYear.innerText = year;
    console.log(year);
}
updateYear();