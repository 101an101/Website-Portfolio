<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "ankangchen153@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $firstName $lastName\nEmail: $email\nMessage:\nmessage";
    mail($to, $subject, $body);

    echo "<p>Thank you for your message!</p>";
}
else {
    echo "<p>Invalid request method.</p>";
}
?>
