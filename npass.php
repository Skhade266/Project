<?php
	session_start();
	$CPF = $_SESSION['CPF'];
	$Password = $_POST['newp'];
	
	$con = mysqli_connect('127.0.0.1','root','');
		
		if(!$con)
		{
			echo 'Not Connected To Server';
		}
		
		if(!mysqli_select_db($con,'ongc'))
		{
			echo "Database Not Selected";
		}
	// $result = mysqli_query($con, "SELECT * FROM logindata WHERE CPF='".$CPF"'");
	// $row = mysqli_fetch_array($result);
	
	
	$sql = mysqli_query($con,"UPDATE logindata SET Password ='" .$Password."' where CPF ='" .$CPF."'");
	
	if(!mysqli_query($con,$sql))
	{
		echo "<script type='text/javascript'>alert('Successfully changed Password');</script>";
		header("refresh:1; url=ongc.html");
	}
	else
	{
		echo "<script type='text/javascript'>alert('Password not changed');</script>";
		header("refresh:1; url=new_pass.html");
	}
?>