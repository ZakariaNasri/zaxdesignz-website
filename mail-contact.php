<?php

$to = "zakaria.nasri@univ-constantine2.dz"; // this is your Email address
$from = $_POST['email']; // this is the sender's Email address
$sender_name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_subject = "New Portfolio Contact Form Submission: " . $subject;

$email_message = "You have received a new message from your portfolio website.\n\n";
$email_message .= "Name: " . $sender_name . "\n";
$email_message .= "Email: " . $from . "\n";
$email_message .= "Subject: " . $subject . "\n\n";
$email_message .= "Message:\n" . $message;

$headers = 'From: ' . $from . "\r\n" .
	'Reply-To: ' . $from . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

mail($to, $email_subject, $email_message, $headers);

?>