// This is for the mobile nav
let mobileOnly = window.matchMedia('(maxwidth: 640px)');


mobileOnly.addListener(screenSize);

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

// This is for the Flavor & Filling buttons on mobile
let flavorBtn = document.getElementById('flavors');
let fillingBtn = document.getElementById('fillings');

flavorBtn.addEventListener('click', toggleFlavor);
fillingBtn.addEventListener('click', toggleFilling);

function toggleFlavor() {
    $('#listFlv').slideToggle('slow');
};
function toggleFilling() {
    $('#listFill').slideToggle('slow');
};

// This code is for smooth scrolling effect
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".navLink").on('click', function(event) {

    if (this.hash !== "b") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 200, function(){

        window.location.hash = hash;
      });
    } // End if
  });
});

// This is the code for the modal
let swtBtn = document.getElementById('swtBtn');
let modal = document.getElementById('modal');
let modalContent = document.getElementById('modal-content');
let closeBtn = document.getElementById('closeBtn');

swtBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', outsideClick);

function openModal() {
  modal.style.opacity = '1';
  modal.style.visibility = 'visible'
  modalContent.style.top = '0';
}
function closeModal() {
  modal.style.opacity = '0';
  modal.style.visibility = 'hidden';
  modal.style.transition = '0.5s';
  modalContent.style.top = '110%';
}
function outsideClick(e) {
  if (e.target == modal) {
    modal.style.opacity = '0';
    modal.style.visibility = 'hidden';
    modal.style.transition = '0.5s';
    modalContent.style.top = '110%';
  }
}

// Hidden Sweet table list for mobile
let swtListBtn = document.getElementById('swtListBtn');
let hiddenList = document.getElementById('hiddenList');
let closeList = document.getElementById('closeList');

swtListBtn.addEventListener('click', showList);
closeList.addEventListener('click', hideList);

function showList() {
  $('#hiddenList').slideToggle('slow');
}
function hideList() {
  $('#hiddenList').slideToggle('slow');
}

AOS.init({
    offset: 250,
    duration: 650
});