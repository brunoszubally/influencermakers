<?php

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

$formcontent=" From: $name \n email: $email \n  subject: $subject \nMessage: $message \n";



$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: $email' . "\r\n";

$recipient = "szubally.bruno@gmail.com";
mail($recipient, $subject, $formcontent, $headers);
header("location: thank-you.html");

?>