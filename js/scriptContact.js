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

const form = document.getElementById('messageForm');
let name = document.forms['contactForm']['name'].value;
let email = document.forms['contactForm']['email'].value;
let phone = document.forms['contactForm']['phone'].value;
let date = document.forms['contactForm']['date'].value;
let message = document.forms['contactForm']['message'].value;

// form.addEventListener('click', validateForm)

function validateForm(){
    nameInput();
    emailInput();
    phoneInput();
    dateInput();
    messageInput();
    event.preventDefault();
}

function nameInput(){
    if(name === ''){
        document.getElementById('name').style.visibility = 'visible';
        return false
    } else{
        document.getElementById('name').style.visibility = 'hidden';
        return true;
    }
}
function emailInput(){
    if(email === ''){
        document.getElementById('email').style.visibility = 'visible';
        return false;
    } else{
        document.getElementById('email').style.visibility = 'hidden';
        return true;
    }
}
function phoneInput(){
    if(phone === ''){
        document.getElementById('phone').style.visibility = 'visible';
        return false;
    } else{
        document.getElementById('phone').style.visibility = 'hidden';
        return true;
    }
}
function dateInput(){
    if(date === ''){
        document.getElementById('date').style.visibility = 'visible';
        return false;
    } else{
        document.getElementById('date').style.visibility = 'hidden';
        return true;
    }
}
function messageInput(){
    if(message === ''){
        document.getElementById('message').style.visibility = 'visible';
        return false;
    } else{
        document.getElementById('message').style.visibility = 'hidden';
        return true;
    }
}