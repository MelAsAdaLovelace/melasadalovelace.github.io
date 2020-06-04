<?php

    $myAwardSpaceEmail = "kavcioglumelike@gmail.com";
    $myPersonalEmail = "mkavcioglu13@ku.edu.tr";
    
    if(isset($_POST['submit'])) {
        $subject = "MelAsAdalovelace üzerinden mail geldi";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $headers = "From: Contact Form <" . $myAwardSpaceEmail . ">" . "\r\n";
        $headers .= "Reply-To: " . $name . " <" . $email .">" . "\r\n";
        
        echo 'Your message was sent successfully!';
        mail($myPersonalEmail, $subject, $message, $headers);
    } else {
        echo 'An error has occurred!';
    }
?>