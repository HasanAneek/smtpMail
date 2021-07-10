<?php
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = "true";
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->Username = "ab@gmail.com";
$mail->Password = "12345";
$mail->Subject = "Test mail using SMTP";
$mail->setFrom("ab@gmail.com");
$mail->isHTML(true);
$mail->addAttachment("file\Me.jpg");
$mail->addAttachment("file\Covid_vaccination.pdf");
$mail->Body = "<h1>This is Plain Text mail</h1> <br>
<p>This is demo paragraph</p>   ";
$mail->addAddress("ab@gmail.com");
if($mail->send()){
    echo "Sent Successful";
}else{
    echo "Failed 2....!";
}
$mail->smtpClose();
