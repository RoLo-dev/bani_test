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

let folderSource = "images/galleryImgs/"
// let imageArray = [
//     "pho.jpeg",
//     "sushi_cake.jpg",
//     "sub_sandwhich1.jpeg",
//     "sub_sandwhich2.jpeg",
//     "canes.jpeg",
//     "grilling_cake.jpg",
//     "sushi2_cake.jpg",
//     "bowlBum_cake.jpg",
//     "sushi3_cake.jpg",
//     "cupNoodle_cake.jpg",
//     "in-n-out.jpg",
//     "sushi5_cake.jpeg",
//     "che1.jpeg",
//     "sushi7_cake.jpeg",
//     "sushi4_cake.jpeg",
//     "sushi8_cake.jpeg",
//     "mickey-cookies12.jpeg",
//     "cookie_cake.jpg",
//     "chemistry_cake.jpg",
//     "boob_cake.jpg",
//     "adult2-cake.jpeg",
//     "flower-cakes.jpeg",
//     "adult3-cake.jpeg",
//     "flowerTier-cake.jpeg",
//     "flower-cake1.jpeg",
//     "16.jpg",
//     "image-one.jpg",
//     "minieMouse_cake.jpg",
//     "charac3.jpg",
//     "lv_cake.jpg",
//     "naked2_cake.jpg",
//     "fondantFlower_cake.jpg",
//     "flower_cupcakes.jpg",
//     "pussin_cake.jpg",
//     "naked_cake.jpg",
//     "chicks-colorful.jpeg",
//     "shoe_cake.jpg",
//     "ohBaby_cookies.jpg",
//     "gucciBag_cake.jpg",
//     "hexagon_cake.jpg",
//     "nurse_cake.jpeg",
//     "barrel_cake.jpg",
//     "mint_cake.jpg",
//     "minecraft12.jpeg",
//     "coronaBeer-cake.jpeg",
//     "tropical2-cake.jpeg",
//     "pills-cake.jpeg",
//     "nikeShoe-cake.jpeg",
//     "iceCream_cake.jpg",
//     "champagneBottle_cake.jpg",
//     "bagBox_cake.jpg",
//     "unicornCandy_cake.jpg",
//     "unicorn_cake.jpg",
//     "underTheSea_cake.jpg",
//     "swan_cake.jpg",
//     "18.jpg",
//     "makeUp_cake.jpg",
//     "buttcrack_cake.jpg",
//     "pumpkin_cake.jpg",
//     "money_bag_cake.jpg",
//     "milleniumFalcon_cake.jpg",
//     "mexican_cake.jpg",
//     "lemon_theme.jpg",
//     "kingBob_cake.jpg",
//     "lion-cake.jpeg",
//     "hennessy_cake.jpg",
//     "underTheSea_cakePops.jpg",
//     "gucciBag2_cake.jpg",
//     "firefighter_cake.jpg",
//     "candyland-cake.jpeg",
//     "unicornRainbow_cake.jpg",
//     "construction_cake.jpg",
//     "construction2_cake.jpg",
//     "safari.jpeg",
//     "pawPatrol_cake.jpg",
//     "wedding-cake12.jpeg",
//     "charac2.jpg",
//     "dino_cupcakes.png",
//     "hermes_box_cake.jpeg",
//     "naked_wedding_cake.jpeg",
//     "simple_vines_cake.jpeg",
//     "dry_flower_cake.jpeg",
//     "earth-tone-cake.jpeg",
//     "unicorn_cakepop.jpeg",
//     "sleeping_beauty_cake.jpeg",
//     "succulent_cupcakes.jpeg",
//     "safari_theme_cookies.jpeg",
//     "geometric_cake.jpeg",
//     "tropical_cups.jpeg",
//     "tropical_coconut_cake.jpeg",
//     "flower_cake7.jpeg",
// ]