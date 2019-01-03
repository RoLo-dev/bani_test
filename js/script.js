// This is for the mobile nav
let mobileOnly = window.matchMedia('(maxwidth: 640px)');
let open = document.getElementById('open');
let close = document.getElementById('close');

mobileOnly.addListener(screenSize);
open.addEventListener('click', openNav);
close.addEventListener('click', closeNav);

function screenSize() {
    if (mobileOnly.matches) {
        openNav();
        closeNav();
        toggleFlavor();
        toggleFilling();
    } else {
        open.style.display = 'none';
    }
};

function openNav() {
    document.getElementById('open').style.display = 'none';
    document.getElementById('mobileNav').style.width = '100%';
};
function closeNav() {
    document.getElementById('mobileNav').style.width = '0';
    document.getElementById('open').style.display = 'block'
}

// This is for the Flavor & Filling buttons
let flavorBtn = document.getElementById('flavors');
let fillingBtn = document.getElementById('fillings');

flavorBtn.addEventListener('click', toggleFlavor);
fillingBtn.addEventListener('click', toggleFilling);

function toggleFlavor() {
    // if (flavorList.style.display === 'none') {
    //     flavorList.style.display = 'block';
    // } else {
    //     flavorList.style.display = 'none';
    // }
    $('#listFlv').slideToggle('slow');
};
function toggleFilling() {
    $('#listFill').slideToggle('slow');
};