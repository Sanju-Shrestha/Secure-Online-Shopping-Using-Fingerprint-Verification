<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'buyoshop@gmail.com';          // SMTP username
$mail->Password = 'biometricbois'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('buyoshop@gmail.com', 'BuyoShop');
$mail->addReplyTo('buyoshop@gmail.com', 'BuyoShop');
$mail->addAddress('@gmail.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Your Transaction was completed securly :)</h1>';
$bodyContent .= '<p>Thank you for choosing us as your online shopping site  <b>BuyoShop</b></p>';

$mail->Subject = 'Email from BuyoShop';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
