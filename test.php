<?php
    if (isset($_POST['submit'])) {

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $date = htmlspecialchars($_POST['date']);
        $message = htmlspecialchars($_POST['message']);
        $msg = "";
        $msgClass = "";

        if(!empty($name) && !empty($email) && !empty($phone) && !empty($date) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg = "Please enter a valid email address";
            } else {
                $email_to = "banibake@banibakery.com";
                // $email_to = "rlopantzi@gmail.com";
                $email_subject = 'Contact form submission from '.$name;
                $body =
                    '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Phone</h4><p>'.$phone.'</p>
                    <h4>Date</h4><p>'.$date.'</p>
                    <h4>Message</h4><p>'.$message.'</p>';
                // Email Headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
                // Additional Headers
                $headers .= "From: " .$name. "<".$email.">". "\r\n";
                if(mail($email_to, $email_subject, $body, $headers)){
                    // Email Sent
                    // echo "Thank you, your email has been sent and we'll get back to you soon.<br /><br />";
                    // echo '<a href="http://banibakery.com">Return home</a>';
                    // header("Location: http://banibakery.com/contact.php");
                    // exit();
                    $msg = "Thank you, we will get back to you soon";
                    $msgClass = "emailSuccess";
                } else {
                    // Failed
                    echo $msg = "Sorry, something went wrong. Please try again";
                    echo $msgClass = "emailFailed";
                }
            }
        } else {
            // Failed
            // echo 'Please fill in all fields.<br /><br />';
            // echo 'Click on the BACK button to resolve.';
            echo $msg = "Please fill in all fields";
            echo $msgClass = "emailFailed";
            echo $nameErr = "Name is required";
            echo $emailErr = "Email is required";
            echo $phoneErr = "Phone number is required";
            echo $dateErr = "Date is required";
            echo $messageErr = "Message is required";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bani Bakery | Custom Cakes</title>

    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Text|Muli:300,700,800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/bani_favicon.png">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/queries.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>

</head>
<body>

    <div>
        <p class="alert alert-container <?php echo $msgClass ?>"><?php echo $msg ?></p>
    </div>
    
</body>
</html>
