<?php
// require 'PHPMailer/PHPMailerAutoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer;
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'your email';          // SMTP username
$mail->Password = 'password'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to
$mail->setFrom('mail to');
$mail->addReplyTo('mail address');
$mail->addAddress('mail address');   // Add a recipient
// $mail->addCC('prabhupadhayay@gmail.com');
// $mail->addBCC('bcc@example.com');
$mail->isHTML(true);  // Set email format to HTML
$bodyContent = '<h1>HI this is Shailja</h1>';
$bodyContent .= '<p>welcome to my world</b></p>';
$mail->Subject = 'Email from Localhost by Shailja';
$mail->Body    = $bodyContent;
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>