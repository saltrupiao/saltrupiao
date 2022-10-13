<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subjectIn = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n Subject: $subjectIn \n Message: $message";
$recipient = "sal.trupiano@icloud.com";
$subject = "Contact Form Response";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>