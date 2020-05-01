<?php
    // if(isset($_POST['submit'])) {
    //     $name = htmlspecialchars($_POST['name']);
    //     $email = htmlspecialchars($_POST['email']);
    //     $phone = htmlspecialchars($_POST['phone']);
    //     $date = htmlspecialchars($_POST['date']);
    //     $message = htmlspecialchars($_POST['message']);
    //     $msg = "";
    //     $msgClass = "";
    //     $nameErr = $emailErr = $phoneErr = $dateErr = $messageErr = "";
    //     if(empty($name) && empty($email) && empty($phone) && empty($date) && empty($message)){
    //         // Failed
    //         $msg = "Please fill in all fields";
    //         $msgClass = "emailFailed";
    //         $nameErr = "Name is required";
    //         $emailErr = "Email is required";
    //         $phoneErr = "Phone number is required";
    //         $dateErr = "Date is required";
    //         $messageErr = "Message is required";
    //     } else{
    //         if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    //             $msg = "Invalid email format";
    //             $msgClass = "emailFailed";
    //         } else {
    //             $email_to = "banibakery@gmail.com";
    //             $email_subject = 'Contact form submission from '.$name;
    //             $body =
    //                 '<h2>Contact Request</h2>
    //                 <h4>Name</h4><p>'.$name.'</p>
    //                 <h4>Email</h4><p>'.$email.'</p>
    //                 <h4>Phone</h4><p>'.$phone.'</p>
    //                 <h4>Date</h4><p>'.$date.'</p>
    //                 <h4>Message</h4><p>'.$message.'</p>';
    //             // Email Headers
    //             $headers = "MIME-Version: 1.0" ."\r\n";
    //             $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
    //             // Additional Headers
    //             $headers .= "From: " .$name. "<".$email.">". "\r\n";
    //             if(mail($email_to, $email_subject, $body, $headers)){
    //                 // Email Sent
    //                 $msg = "Thank you, we will get back to you soon";
    //                 $msgClass = "emailSuccess";
    //             } else {
    //                 // Failed
    //                 $msg = "I'm sorry, something went wrong. Please try again";
    //                 $msgClass = "emailFailed";
    //             }
    //         }
    //     }
    // }
    include 'test.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Bani Bakery specializes in Custom cakes, Wedding cakes and delicious pastries using fine ingredients and everything made fresh and with love by order. Never compromising quality over quantity. Located in Santa Ana California and cater all of Orange County and Los Angeles County.">
    <meta name="keywords" content="cakes, custom, wedding cakes, desserts, pastries, Orange County, OC,bakery, french, macarons, pastel, pan dulce, wedding,cookies,fresh,love, delivery, smash cake,asian, high end, Santa ana, California, Orange, Southern California, local bakery">

    <title>Bani Bakery | Custom Cakes</title>

    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Text|Muli:300,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="images/bani_favicon.png">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/queries.css">
    <link rel="stylesheet" type="text/html" href="index.html">
    <link rel="stylesheet" type="text/html" href="gallery.html">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>

</head>
<body>
    <header id="contact-page">
        <div id="contact-header" class="main-head wrapper">
            <div class="logo">
                <a href="index.html"><img src="images/bani_logo_hor.svg" alt="bakery logo" class="pics"></a>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="index.html#sweetTable" class="navLink">Sweet Table</a></li>
                    <li><a href="index.html#flavorFill" class="navLink">Flavors & Fillings</a></li>
                    <li><a href="index.html#about" class="navLink">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div id="mobile-openBtn">
                <span class="openIcon"></span>
            </div>
        </div>
    </header>

    <div id="mobile-nav">
        <ul>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="index.html#sweetTable" class="navLink">Sweet Table</a></li>
            <li><a href="index.html#flavorFill" class="navLink">Flavors & Fillings</a></li>
            <li><a href="index.html#about" class="navLink">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>

    <section id="contact">
        <div class="smaller-wrapper">
            <h2>CONTACT</h2>
            <p>Have any questions? Please feel free to send us any questions or comments. For a quote request or placing an order, please provide detailed information (cake flavor, filling, servings and picture) as well as the date of the event.
            </br>
            </br>
            All cake and sweet table orders should be placed <span class="boldTxt">8-10 days</span> prior from due date. Pastry and cookie orders should be placed at least <span class="boldTxt">6 days</span> prior from due date. We do require a 50% deposit for any order over $75, if no deposit is made, your order will be put on hold.</p>

            <div class="cntctForm">
                <form method="post" action="test.php">
                    <div class="alert-container alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                    <label>
                        Full name:
                        <span class="error"> * <?php echo $nameErr;?></span>
                    </label>
                    <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>"" placeholder="John Doe">

                    <label>
                        Email:
                        <span class="error"> * <?php echo $emailErr;?></span>
                    </label>
                    <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" placeholder="example@example.com">

                    <label>
                        Phone:
                        <span class="error"> * <?php echo $phoneErr;?></span>
                    </label>
                    <input type="tel" name="phone" value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>" placeholder="321-098-765">

                    <label>
                        Due date:
                        <span class="error"> * <?php echo $dateErr;?></span>
                    </label>
                    <input type="date" name="date" value="<?php echo isset($_POST['date']) ? $date : ''; ?>" placeholder="mm/dd/yyyy">

                    <label>
                        Message:
                        <span class="error"> * <?php echo $messageErr;?></span>
                    </label>
                    <textarea name="message" value="<?php echo isset($_POST['message']) ? $message : ''; ?>" placeholder="Your inquiry"></textarea>
                    <button type="submit" name="submit">SEND</button>
                </form>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.0578767952493!2d-117.92201634876362!3d33.75917024046908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcd80b68bcd7c1%3A0x595e516c978318ea!2sBani%20Bakery!5e0!3m2!1sen!2sus!4v1588195290219!5m2!1sen!2sus" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>

    <footer>
        <div class="wrapper ftContent">
            <div class="ftLogo">
                <a href="index.html"><img src="images/bani_logo_17.png" alt="Bani bakery logo" class="pics"></a>
                <div class="copyRight">&copy; Copyright 2020 banibakery.com</div>
            </div>
            <div class="ftLinks">
                <h4>Bani Bakery</h4>
                <ul>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="index.html#sweetTable" class="navLink">Sweet Table</a></li>
                    <li><a href="index.html#flavorFill" class="navLink">Flavors & Fillings</a></li>
                    <li><a href="index.html#about" class="navLink">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li></li>
                    <li></li>
                </ul>
                <h4 class="social">Social</h4>
                <ul class="socialList">
                    <li>
                        <a href="https://www.facebook.com/banibakery/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/banihouseofcakes/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://www.yelp.com/biz/bani-bakery-santa-ana" target="_blank"><i class="fab fa-yelp"></i></a>
                    </li>
                </ul>
            </div>
            <div class="award">
                <div>
                    <img src="images/best.png" class="pics" alt="Award for best business of 2018">
                </div>
                <div class="background-white">
                    <img src="https://threebestrated.com/awards/cakes-santa_ana-2019-clr.svg" alt="Best Cakes in Santa Ana" class="pics">
                </div>
            </div>
            <div class="business-info">
                <div class="storehrs">
                    <h4>Store Hours</h4>
                    <ul>
                        <li>Monday closed</li>
                        <li>Tues - Fri: 9am - 7pm</li>
                        <li>Sat - Sun: 8am - 3pm</li>
                    </ul>
                </div>
                <div class="business-contact">
                    <h4>Contact</h4>
                    <ul>
                        <li>
                            <i class="fas fa-globe-americas"></i>
                            <a href="mailto:banibakery@gmail.com"> banibakery@gmail.com</a>
                        </li>
                        <li>
                            <i class="fas fa-phone-square"></i>
                            <a href="tel:6572316211"> (657) 231 - 6211</a>
                        </li>
                        <li>
                            <i class="fas fa-map-marked-alt"></i>
                            <a href="https://www.google.com/maps/place/3710+Westminster+Ave,+Santa+Ana,+CA+92703/@33.7592065,-117.9220215,17z/data=!3m1!4b1!4m5!3m4!1s0x80dcd80b68a29147:0x8f38e2865ae5971b!8m2!3d33.7592021!4d-117.9198328" target="_blank">3710 Westminster Ave. Ste. E, Santa Ana, Ca, 92703</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script>
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
    </script>
</body>
</html>