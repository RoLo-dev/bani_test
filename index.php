<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Bani Bakery specializes in Custom cakes, Wedding cakes and delicious pastries using fine ingredients and everything made fresh and with love by order. Never compromising quality over quantity. Located in Santa Ana California and cater all of Orange County and Los Angeles County.">
    <meta name="keywords" content="cakes,custom,wedding cakes,desserts,pastries,Orange County,OC,bakery,french,macarons,pastel,pan dulce,wedding,cookies,fresh,love,delivery, smash cake,asian,high end,Santa ana,California,Orange,Southern California,local bakery">

    <title>Bani Bakery | Custom Cakes</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,600,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="images/bani_favicon.png">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/queries.css">
    <link rel="stylesheet" type="text/html" href="gallery.html">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>

</head>
<body>
    <header class="main-head">

        <div id="desktop-header" class="wrapper">  <!-- Desktop Nav -->
            <div class="logo">
                <a href="index.php"><img src="images/bani_logo_hor.svg" alt="bakery logo" class="pics"></a>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#lists">Flavors & Fillings</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                </ul>
            </div>
        </div>

        <div id="mobile-header" class="wrapper">   <!-- Mobile Nav -->
            <div class="logo">
                <a href="index.php"><img src="images/bani_logo_hor.svg" alt="bakery logo" class="pics"></a>
            </div>
            <div class="empty"></div>
            <span id="open" class="open mobile">&#9776</span>
            <div id="mobileNav" class="mobile-nav">
                <ul>
                    <li><a href="javascript:void(0)" id="close" class="close">&times</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#lists">Flavors & Fillings</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="headTxt mobile-HeaderTxt wrapper">
            <h1>Welcome</h1>
            <p>We provide a wide variety of high quality custom cakes and pastries using fine ingredients all freshly made by order</p>
        </div>
        
    </header>

    <section id="introDesktop">     <!-- This is for desktop only -->
        <div id="lessSugar" class="wrapper">     <!-- Section One -->
            <div id="imgOne-a">     
                <img src="images/mini_cheesecake.jpg" alt="mini cheesecake" class="pics">
            </div>
            <div id="secOneTxt" class="introTxtStyle">
                <h3 class="introTitle">Less sugar, healthy you</h3>
                <p>Our sweets contain a low amount of sugar and we always provide fresh fruit</p>
            </div>
            <div id="imgTwo-a">
                <img src="images/mini_cupcakes.jpg" alt="mini cupcakes" class="pics">
            </div>
        </div>
        <div id="themeCakes" class="wrapper">        <!-- Section Two -->
            <div id="imgOne-b">
                <img src="images/7tiers.jpg" alt="Under the Sea theme cake" class="pics">
            </div>
            <div id="secTwoTxt" class="introTxtStyle">
                <h3 class="introTitle">Character theme cakes</h3>
                <p>Get creative with your cake, make it unique, give a big surprise and you'll leave behind a big impression</p>
            </div>
            <div id="images-b">
                <div>
                    <a href="images/totoro.JPG" data-lightbox="introduction">
                    <img src="images/totoro.JPG" alt="Totoro theme wedding cake cake" class="pics"></a>
                </div>
                <div>
                    <a href="images/bouquet.jpg" data-lightbox="introduction">
                    <img src="images/bouquet.jpg" alt="Bouquet made out of cupcakes" class="pics"></a>
                </div>
                <div>
                    <a href="images/mex_cake.jpg" data-lightbox="introduction">
                    <img src="images/mex_cake.jpg" alt="Mexican theme cake" class="pics"></a>
                </div>
            </div>
        </div>
        <div id="sweetTable" class="wrapper">        <!-- Section Three -->
            <div id="imgOne-c">
                <img src="images/Sweet-table.jpg" alt="Royal theme cupcakes" class="pics">
            </div>
            <div id="secThreeTxt" class="introTxtStyle">
                <h3 class="introTitle">Need a sweet table</h3>
                <p>Catering is available for all Orange County. Ask about our Sweet Table packages and cake stand rentals</p>
            </div>
        </div>      
    </section>

    <section id="intro">        <!-- This is for mobile only -->
        <div id="lessSugar">     <!-- Section One -->
            <div class="secOneImg">     
                <img src="images/mini_cheesecake.jpg" alt="mini cheesecake" class="pics mobilePicWrap">
            </div>
            <div class="secOneTxt introTxtStyle">
                <h3 class="introTitle">Less Sugar, healthy you</h3>
                <p class="wrapper">Our sweets contain a low amount of sugar and we always provide fresh fruit</p>
            </div>
        </div>
        <div id="themeCakes">        <!-- Section Two -->
            <div class="secTwoImg">
                <img src="images/7tiers.jpg" alt="Under the Sea theme cake" class="pics mobilePicWrap">
            </div>
            <div class="secTwoTxt introTxtStyle">
                <h3 class="introTitle">Character theme cakes</h3>
                <p class="wrapper">Get creative with your cake, make it unique, give a big surprise and you'll leave behind a big impression</p>
            </div>
        </div>
        <div id="sweetTable">        <!-- Section Three -->
            <div class="secThreeImg">
                <img src="images/Sweet-table.jpg" alt="Royal theme cupcakes" class="pics mobilePicWrap">
            </div>
            <div class="secThreeTxt introTxtStyle">
                <h3 class="introTitle">Need A Sweet Table</h3>
                <p>Catering is available for all Orange County. Ask about our Sweet Table packages and cake stand rentals</p>
            </div>
        </div>      
    </section>

    <section id="about">
        <div class="baniImg">
            <img src="images/bani2.JPG" alt="Bani Dao picture" class="pics">
        </div>
        <div class="aboutTxt">
            <h2>ABOUT</h2>
            <p>My name is Bani Dao, I started cake decorating in 2009, searching on YouTube for tutorials. After 2 years of being a home baker making cakes for family and friends, I decided to take it further by turning it to a profession. In 2011, I graduated from Le Cordon Bleu in Baking and Patisserie. Since then, I’ve been working in several bakeries as a pastry cook and cake decorator to gain real-life experience and knowledge about my field. From hobby to business, I continue baking cakes, pastries and now catering to the Orange County residents. Cake design has become my passion in life, so I always keep up to date with new and upcoming trends and try out new techniques to continue to improve and refine my skills.</p>
        </div>
    </section>

    <section id="lists">

        <div id="flavorFill">     <!-- This is for Desktop -->
            <div class="wrapper boundary">
                <div class="secTitle">
                    <h2>FLAVORS<br />&<br />FILLINGS</h2>
                </div>
                <div class="warning">
                    <p>* Items come with an additional charge</p>
                </div>
                <div id="listBox">
                    <div class="flavors listTitle">
                        <h3>Cake</h3>
                    </div>
                    <div class="listFlv listStyles">
                        <li>Vanilla</li>
                        <li>Chocolate</li>
                        <li>Marble</li>
                        <li>Strawberry</li>
                        <li>Lemon</li>
                        <li>Peanut Butter</li>
                        <li>Spices</li>
                        <li>Lemon Blueberry</li>
                        <li>Almond</li>
                        <li>Funfetti</li>
                        <li>Cookies & Cream</li>
                        <li>Yellow chocolate chips</li>
                        <li>Hazelnut swirls</li>
                        <li>Matcha swirls</li>
                        <li>Blueberry swirls</li>
                        <li><span class="boldTxt">Red Velvet *</span></li>
                        <li><span class="boldTxt">Coconut *</span></li>
                        <li><span class="boldTxt">Banana *</span></li>
                        <li><span class="boldTxt">Carrot *</span></li>
                        <li><span class="boldTxt">Pandan *</span></li>
                        <li><span class="boldTxt">Angel Food *</span></li>
                        <li><span class="boldTxt">Cherry *</span></li>
                    </div>
                </div>
                <div id="listBox2">
                    <div class="fillings listTitle">
                        <h3>Fillings</h3>
                    </div>
                    <div class="listFill listStyles">
                        <li>Lemon mousse</li>
                        <li>Whipped cream</li>
                        <li>Pineapple cream</li>
                        <li>Chocolate buttercream</li>
                        <li>Tiramisu cream</li>
                        <li>Strawberry mousse</li>
                        <li>Raspberry mousse</li>
                        <li>Mango mousse</li>
                        <li>Bailey's buttercream</li>
                        <li>Cappucino mousse</li>
                        <li>Chocolate mousse</li>
                        <li>Coconut cream</li>
                        <li>Cookies & Cream</li>
                        <li>Mocha buttercream</li>
                        <li>Passion fruit cream</li>
                        <li>Green tea cream</li>
                        <li>Peanut butter cream</li>
                        <li>Hazelnut buttercream</li>
                        <li>Banana cream</li>
                        <li><span class="boldTxt">Fresh fruit *</span></li>
                        <li><span class="boldTxt">Creamcheese *</span></li>
                        <li><span class="boldTxt">Chocolate ganache *</span></li>
                        <li><span class="boldTxt">Durian cream *</span></li>
                        <li><span class="boldTxt">Guava cream *</span></li>
                    </div>
                </div>
            </div>
        </div>

        <div id="cakeFill">     <!-- This is for mobile -->
            <div class="wrapper">
                <h2>FLAVORS & FILLINGS</h2>
                <div id="flavors" class="ffStyles listTitle">
                    <h3>Cake</h3>
                </div>
                <div id="listFlv" class="listStyles">
                    <li>Vanilla</li>
                    <li>Chocolate</li>
                    <li>Marble</li>
                    <li>Strawberry</li>
                    <li>Lemon</li>
                    <li>Peanut Butter</li>
                    <li>Spices</li>
                    <li>Lemon Blueberry</li>
                    <li>Almond</li>
                    <li>Funfetti</li>
                    <li>Cookies & Cream</li>
                    <li>Yellow chocolate chips</li>
                    <li>Hazelnut swirls</li>
                    <li>Matcha swirls</li>
                    <li>Blueberry swirls</li>
                    <li><span class="boldTxt">Red Velvet *</span></li>
                    <li><span class="boldTxt">Coconut *</span></li>
                    <li><span class="boldTxt">Banana *</span></li>
                    <li><span class="boldTxt">Carrot *</span></li>
                    <li><span class="boldTxt">Pandan *</span></li>
                    <li><span class="boldTxt">Angel Food *</span></li>
                    <li><span class="boldTxt">Cherry *</span></li>
                    <li>* Items come with additional charge *</li>
                </div>
                <div id="fillings" class="ffStyles listTitle">
                    <h3>Fillings</h3>
                </div>
                <div id="listFill" class="listStyles">
                    <li>Lemon mousse</li>
                    <li>Whipped cream</li>
                    <li>Pineapple cream</li>
                    <li>Chocolate buttercream</li>
                    <li>Tiramisu cream</li>
                    <li>Strawberry mousse</li>
                    <li>Raspberry mousse</li>
                    <li>Mango mousse</li>
                    <li>Bailey's buttercream</li>
                    <li>Cappucino mousse</li>
                    <li>Chocolate mousse</li>
                    <li>Coconut cream</li>
                    <li>Cookies & Cream</li>
                    <li>Mocha buttercream</li>
                    <li>Passion fruit cream</li>
                    <li>Green tea cream</li>
                    <li>Peanut butter cream</li>
                    <li>Hazelnut buttercream</li>
                    <li>Banana cream</li>
                    <li><span class="boldTxt">Fresh fruit *</span></li>
                    <li><span class="boldTxt">Creamcheese *</span></li>
                    <li><span class="boldTxt">Chocolate ganache *</span></li>
                    <li><span class="boldTxt">Durian cream *</span></li>
                    <li><span class="boldTxt">Guava cream *</span></li>
                    <li>* Items come with additional charge *</li>
                </div>
            </div>
        </div>

    </section>
    

    <section id="contact">
        <div class="wrapper">
            <h2>CONTACT</h2>
            <p>Have any questions? Please feel free to send us any questions or comments. For a quote request or placing an order, please provide detailed information (cake flavor, filling, servings and picture) as well as the date of the event.
            </br>
            </br>
            Place your cake and/or sweet table orders 7-10 days prior from due date. Pastry and cookie orders should be placed at least 5 days prior from due date. We do require a 50% deposit for any order over $75.</p>

            <div class="cntctForm">
                <form action="mail.php" method="POST">
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="phone" placeholder="Phone">
                    <input type="text" name="date" placeholder="Due Date">
                    <textarea name="message" placeholder="Message"></textarea>
                    <button type="submit" name="submit">SEND</button>
                </form>
            </div>

            <div class="cntctInfo">
                <div class="storehrs">
                    <h4>Store Hours</h4>
                    <li>Monday closed</li>
                    <li>Tues - Fri: 9am - 6pm</li>
                    <li>Sat - Sun: 8am - 3pm</li>
                </div>
                <div class="webPhone">
                    <li>
                        <i class="fas fa-globe-americas"></i>
                        <a href="mailto:banibake@banibakery.com"> banibake@banibakery.com</a>
                    </li>
                    <li>
                        <i class="fas fa-phone-square"></i>
                        <a href="tel:6572316211"> (657) 231 - 6211</a>
                    </li>
                </div>
                <div class="address">
                    <li>
                        <i class="fas fa-map-marked-alt"></i>
                        <a href="https://www.google.com/maps/place/3710+Westminster+Ave,+Santa+Ana,+CA+92703/@33.7592065,-117.9220215,17z/data=!3m1!4b1!4m5!3m4!1s0x80dcd80b68a29147:0x8f38e2865ae5971b!8m2!3d33.7592021!4d-117.9198328" target="_blank">3710 Westminster Ave. Ste. E,</br>Santa Ana, Ca, 92703</a>
                    </li>
                </div>
                <div class="socialM">
                    <h4>Follow us on Social Media</h4>
                    <div class="icons">
                        <li>
                            <a href="https://www.facebook.com/banibakery/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li>                           
                            <a href="https://www.instagram.com/banihouseofcakes/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>                           
                            <a href="https://www.yelp.com/biz/bani-bakery-santa-ana" target="_blank"><i class="fab fa-yelp"></i></a>
                        </li>
                    </div>
                </div>
                <div class="award">
                    <img src="images/best.png" alt="Award for best business of 2018" class="pics">
                </div>
            </div>
        </div>
    </section>
    
    <script type="text/javascript" src="js/script.js"></script>
</body>

<footer>
    <div class="wrapper ftContent">
        <div class="ftLogo">
            <a href="index.php"><img src="images/bani_logo_17.png" alt="Bani bakery logo" class="pics"></a>
        </div>
        <div class="ftLinks">
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="index.php#lists">Flavors & Fillings</a></li>
            <li><a href="index.php#contact">Contact</a></li>
        </div>
        <div class="copyRight">&copy; Copyright 2019 www.banibakery.com</div>
    </div>
</footer>
</html>