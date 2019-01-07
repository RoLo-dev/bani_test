<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    if(!empty($name) && !empty($email) && !empty($phone) && !empty($date) && !empty($message)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo 'Please use a valid email.<br /><br /> ';
            echo 'Click on the BACK button to resolve.';
        } else {
            $email_to = "banibake@banibakery.com";
            $email_subject = 'Contact form submission from '.$name;
            $body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
                    <h4>Email</h4><p>'.$phone.'</p>
                    <h4>Email</h4><p>'.$date.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

                // Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($email_to, $email_subject, $body, $headers)){
					// Email Sent
					echo "Thank you, your email has been sent and we'll get back to you soon.<br /><br />";
                    echo '<a href="http://banibakery.com">Return home</a>';
				} else {
					// Failed
					echo 'Your email was not sent';
				}
			}
		} else {
			// Failed
			echo 'Please fill in all fields.<br /><br />';
            echo 'Click on the BACK button to resolve.';
        }
    }

?>
