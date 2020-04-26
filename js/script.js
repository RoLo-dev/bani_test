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

// This is for the mobile
let mobileOnly = window.matchMedia('(max-width: 690px)');

mobileOnly.addListener(screenSize);

function screenSize() {
    if (mobileOnly.matches) {
        swtBtnMobile.addEventListener('click', displaySweetList);
        toggleFlavor();
        toggleFilling();
    }
};

// This is for the sweet table list after 690px
const swtBtnMobile = document.getElementById('swtBtn-mobile');

swtBtnMobile.addEventListener('click', displaySweetList);

function displaySweetList(){
    modal.classList.toggle('show');
}

// This is for the Flavor & Filling buttons on mobile
function toggleFlavor() {
    $('#listFlv').slideToggle('slow');
};
function toggleFilling() {
    $('#listFill').slideToggle('slow');
};

AOS.init({
    offset: 250,
    duration: 650
});