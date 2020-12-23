<?php
session_start();
$OTP = $_SESSION['OTP'];
$OTPNO = $_POST['OTP'];

if($OTPNO == $OTP)
{
	include 'new_pass.html';
}
else
{
	echo "<script type='text/javascript'>alert('Wrong OTP entered');</script>";
}
?>