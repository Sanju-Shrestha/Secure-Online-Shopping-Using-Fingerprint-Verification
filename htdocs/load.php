<!DOCTYPE html>
<html>
<head>
  <title>Transaction Successful</title>
</head>
<body>
<!-- Progress bar holder -->
<div id="progress" style="width:750px;border:3px solid #000000;"></div>
<!-- Progress information -->
<div id="information" style="width"></div>

<?php
session_start();
?>
<?php

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$var = $_SESSION['email'];
$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'buyoshop@gmail.com';          // SMTP username
$mail->Password = '***********';                 // Password required
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to
$mail->setFrom('buyoshop@gmail.com', 'BuyoShop');
$mail->addReplyTo('buyoshop@gmail.com', 'BuyoShop'); 
$mail->addAddress($var);
   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
$mail->isHTML(true);  // Set email format to HTML
$bodyContent = '<h1>Your Transaction was completed successfully :)</h1>';
$bodyContent .= '<p>Thank you for choosing us as your online shopping site  <b>BuyoShop</b></p>';
$bodyContent .= '<p>For further enquiry, complaints or tracking of order please contact us @ <b>+919538187244</b></p>';
$mail->Subject = 'Email from BuyoShop';
$mail->Body    = $bodyContent;
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
// Total processes
$total = 5;
// Loop through process
for($i=1; $i<=$total; $i++){
  // Calculate the percentation
  $percent = intval($i/$total * 100)."%";
  // Javascript for updating the progress bar and information

  echo '<script language="javascript">
  document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-color:#003388;\">&nbsp;</div>";
  document.getElementById("information").innerHTML="Processing";
  </script>';
  // This is for the buffer achieve the minimum size in order to flush data
  echo str_repeat(' ',1024*64);
  // Send output to browser immediately
  flush();
 
  // Sleep one second so we can see the delay
  sleep(1);
  
}
// Tell user that the process is completed
echo '<script language="javascript">document.getElementById("information").innerHTML="Transaction completed"</script>';
sleep(1);
echo '<script> window.location.replace("http://localhost/welcome.php");</script>';
}
?>

</body>
</html>