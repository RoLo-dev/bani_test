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

function validateForm(){
    let name = document.forms['contactForm']['name'].value;
    let email = document.forms['contactForm']['email'].value;
    let phone = document.forms['contactForm']['phone'].value;
    let date = document.forms['contactForm']['date'].value;
    let message = document.forms['contactForm']['message'].value;

    if(name === ''){
        document.getElementById('name').style.visibility = 'visible';
    }
    if(email === ''){
        document.getElementById('email').style.visibility = 'visible';
    }
    if(phone === ''){
        document.getElementById('phone').style.visibility = 'visible';
    }
    if(date === ''){
        document.getElementById('date').style.visibility = 'visible';
    }
    if(message === ''){
        document.getElementById('message').style.visibility = 'visible';
    }
}