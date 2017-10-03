<?php

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: ElizabethUnruh.com';
    $to = 'klutzworthy.com';
    $subject = $_POST['subject'];
    $body = "From: $firstname\n $lastname\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) {
            echo '<p>Your message has been sent!</p>';
        } else {
            echo '<p>Something went wrong, go back and try again!</p>';
        }
    }
?>
