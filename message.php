<?php
$CPF = $_SESSION['CPF'];
$Email = $_SESSION['Email'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';

$mail->isHTML();

$mail->Username = 'ongc989@gmail.com';

$mail->Password = 'Ongc@123';
$mail->SetFrom('admin@ongc.com');
$mail->Subject = 'Registration successful';
$mail->Body = 'you are successfully registered with CPF:'.$CPF;
$mail->AddAddress($Email);



$mail->Send();
?>
