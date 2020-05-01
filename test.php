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
                    echo $msg = "Thank you, we will get back to you soon";
                    echo $msgClass = "emailSuccess";
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
// < ?p h p echo $_SERVER["PHP_SELF"]; ? >

    // if (isset($_POST['submit'])) {
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $phone = $_POST['phone'];
    //     $date = $_POST['date'];
    //     $message = $_POST['message'];
    //     $nameErr = $emailErr = $phoneErr = $dateErr = $messageErr = "";

    //     if(empty($name) && empty($email) && empty($phone) && empty($date) && empty($message)) {
    //         // Failed
    //         $nameErr = "Name is required";
    //         $emailErr = "Email is required";
    //         $phoneErr = "Phone number is required";
    //         $dateErr = "Date is required";
    //         $messageErr = "Message is required";
    //     } else{
    //         if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    //             $emailErr = "Invalid email format";
    //         } else {
    //             $email_to = "banibake@banibakery.com";
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
    //                 echo "Thank you, your email has been sent and we'll get back to you soon.<br /><br />";
    //                 echo '<a href="http://banibakery.com">Return home</a>';
    //             } else {
    //                 // Failed
    //                 echo 'Your email was not sent';
    //             }
    //         }
    //     }
    // }


    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $phone = $_POST['phone'];
    //     $date = $_POST['date'];
    //     $message = $_POST['message'];
    //     $emailSuccess = "";
    //     $emailFailed = "";
    //     $nameErr = $emailErr = $phoneErr = $dateErr = $messageErr = "";

    //     if(empty($name) && empty($email) && empty($phone) && empty($date) && empty($message)) {
    //         // Failed
    //         $nameErr = "Name is required";
    //         $emailErr = "Email is required";
    //         $phoneErr = "Phone number is required";
    //         $dateErr = "Date is required";
    //         $messageErr = "Message is required";
    //     } else{
    //         if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    //             $emailErr = "Invalid email format";
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
    //                 // $emailSuccess = "Thank you, we will get back to you soon";
    //             } else {
    //                 // Failed
    //                 // $emailFailed = "I'm sorry, something went wrong. Please try again";
    //             }
    //         }
    //     }
    // }
?>
