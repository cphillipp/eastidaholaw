<?php
    session_start();
    $to = "info@paymentrix.com";
    $subject = "Contact Us";
    $email = $_POST['email'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $name . "\n ". $email . "\n ". $phone . "\n ". $message;
    $headers = "From: $email";
    $sent = mail($to, $subject, $message, $headers);
    if($sent) {
        $_SESSION['message'] = 'Contact form submitted! Thank you, we will be in touch soon.';
        header('Location: contact.php#bottom');
    }
    else{
        $_SESSION['message'] = 'Sorry, there was a problem. Please try again.';
        header('Location: contact.php#bottom');
    }
?>