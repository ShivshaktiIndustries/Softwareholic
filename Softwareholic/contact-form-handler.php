<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$to = 'softwareholic7@gmail.com';

$email_subject = 'New form submission';

$email_body = "Name: " . $name . "\nEmail: " . $visitor_email . "\nMessage: " . $message;

$header = "From: noreply@softwareholic.com\n";

if ($visitor_email != NULL) {
    mail($to, $email_subject, $email_body, $header);
}

header("Location: contact.html");
