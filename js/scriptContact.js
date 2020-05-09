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
    if(name === ''){
        document.getElementById('name').style.visibility = 'visible';
    } else{
        document.getElementById('name').style.visibility = 'hidden';
    }
    if(email === ''){
        document.getElementById('email').style.visibility = 'visible';
    } else{
        document.getElementById('email').style.visibility = 'hidden';
    }
    if(phone === ''){
        document.getElementById('phone').style.visibility = 'visible';
    } else{
        document.getElementById('phone').style.visibility = 'hidden';
    }
    if(date === ''){
        document.getElementById('date').style.visibility = 'visible';
    } else{
        document.getElementById('date').style.visibility = 'hidden';
    }
    if(message === ''){
        document.getElementById('message').style.visibility = 'visible';
    } else{
        document.getElementById('message').style.visibility = 'hidden';
    }
    // event.preventDefault();
    console.log('here');
    // form.onsubmit();
    // if(!name === '' && !email === "" && !phone === "" && !date === "" && !message === ""){
    //     console.log('Hello');
    //     form.onsubmit();
    // }
}



// function validateForm(e){
//     e.preventDefault();

//     if(name === ''){
//         document.getElementById('name').style.visibility = 'visible';
//     }
//     if(email === ''){
//         document.getElementById('email').style.visibility = 'visible';
//     }
//     if(phone === ''){
//         document.getElementById('phone').style.visibility = 'visible';
//     }
//     if(date === ''){
//         document.getElementById('date').style.visibility = 'visible';
//     }
//     if(message === ''){
//         document.getElementById('message').style.visibility = 'visible';
//     }
//     if(!name === '' && !email === "" && !phone === "" && !date === "" && !message === ""){}
// }