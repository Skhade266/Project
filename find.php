<?php
session_start();
$CPF = $_POST['CPF'];
$_SESSION['CPF']=$CPF;
include 'forgot.html';
?>