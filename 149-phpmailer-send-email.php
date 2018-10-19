<?php
//NOTE : If you upload this to a server then the path needs to be changed accordingly
require 'C:\xampp\htdocs\FLATHTML\149-class.phpmailer.php';
require 'C:\xampp\htdocs\FLATHTML\149-class.smtp.php';
 
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP


$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only

$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "gator3264.hostgator.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);              // SMTP username
    	
$mail->Username = 'dan@formrecorder.com';                 // SMTP username
$mail->Password = 'october2018';                           // SMTP password

$name = $_POST['Fullname']; // required
$email_to = $_POST['Email']; // required

 //Recipients
$mail->setFrom('dan@formrecorder.com', 'Formrecorder');
$mail->addAddress($email_to, $name);     // Add a recipient
$mail->Subject  = 'Welcome to Formrecorder';
$mail->Body     = 'Hi! Welcome to Formrecorder';
   
if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
 
//Uncomment this if you want to see the thank you message
//echo "<script> location.href='149-thanks.html'; </script>"; 
?>
