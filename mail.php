<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $servings = $_POST['servings'];
    $message = $_POST['message'];

    $formcontent=" From: $name \n Email: $email \n Phone: $phone \n Servings: $servings \n Message: $message";
    $mailTo = "bakery@banibakery.com";
    $subject = "Contact Form";
    $mailheader = "From: ".$email;

    mail($mailTo, $subject, $formcontent, $mailheader) or die("Error!");
    echo 'Thank you!';
}

?>