<?php
    session_start();
    $to = "clayphillipp@gmail.com";
    $subject = "Contact Us";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $message = $name . "\n ". $email . "\n ". $phone . "\n ". $message;
    $headers = "From: $email";
    $sent = mail($to, $subject, $message, $headers);
    if(!isset($sent)) {
        $_SESSION['message'] = 'Contact form submitted! Thank you, we will be in touch soon.';
        header('Location: attorney-contact.php#bottom');
    }
    else{
        $_SESSION['message'] = 'Sorry, there was a problem. Please try again.';
        header('Location: attorney-contact.php#bottom');
    }
?>