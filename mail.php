<?php
require  'includes/PHPMailer.php';
require  'includes/SMTP.php';
require  'includes/Exception.php';

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
$mail->Password = "123";
$mail->Subject  = "Smtp Test subject";
$mail->setFrom("cd@gmail.com");
$mail->isHTML(true);
$mail->addAttachment("file\Covid_vaccination.pdf");
$mail->addAttachment("file\Me.jpg");
$mail->Body = "<h2>This is Html text</h2><br>
<p>This is Html paragraph demo</p> ";
$mail->addAddress("cd@gmail.com");
if($mail->send()){
    echo "Successful";
}else{
    echo "failed...!";
}
$mail->smtpClose();
