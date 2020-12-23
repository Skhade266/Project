<?php
session_start();
$CPF = $_SESSION['CPF'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

		
		$OTP = rand(1000, 9999);
		
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
$mail->Subject = 'One Time Password';
$mail->Body = 'Your one time password is '.$OTP;
$mail->AddAddress($CPF.'@ongc.com');



$mail->Send();
$_SESSION['OTP']=$OTP;
include 'enterotp.html';
?>
