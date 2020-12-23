<?php
	session_start();
	$CPF = $_POST['CPF'];
	$password = $_POST['psw'];
	
	$CPF = stripcslashes($CPF);
	$password = stripcslashes($password);
	
	

	$con = mysqli_connect('127.0.0.1','root','');
		
	if(!$con)
	{
		echo 'Not Connected To Server';
	}
		
	if(!mysqli_select_db($con,'ongc'))
	{
		echo "Database Not Selected";
	}
		
	$CPF = $con-> real_escape_string($CPF);
	$password = $con-> real_escape_string($password);
	
	if($CPF == '111111' && $password == 'ongc')
	{
		include 'reg-users.php';
	}
	else
	{
	
	$result = mysqli_query($con,"select * from logindata where CPF = '$CPF' and Password = '$password'")
				or die("Failed to query database".mysqli_error());
	$row = mysqli_fetch_array($result);
	if($row['CPF'] == $CPF && $row['Password'] == $password)
	{
		$_SESSION['CPF']=$CPF;
		include 'employee_registration.html';
	}
	else
	{
		echo "<script type='text/javascript'>alert('Login Failed');</script>";
		header("refresh:1; url=ongc.html");
	}
	}
?>