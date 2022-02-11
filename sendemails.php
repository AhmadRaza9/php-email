<?php
$to_email = "raza.ataki@gmail.com";

$subject = "Simple Email Test via PHP";

$body = "Hi, This is test email send by PHP Script";

$headers = "From: <rajpoot888iq@gmail.com>\r\n";
$headers .= "Reply-To: <rajpoot888iq@gmail.com>\r\n";
$headers .= "Content-type: text/html\r\n";

mail($to_email, $subject, $body, $headers);
