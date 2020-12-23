


<?php
	
		$con = mysqli_connect('127.0.0.1','root','');
		
		if(!$con)
		{
			echo 'Not Connected To Server';
		}
		
		if(!mysqli_select_db($con,'ongc'))
		{
			echo "Database Not Selected";
		}
	
		$CPF = $_POST['CPF'];
		$password = $_POST['psw'];
		$RepeatPassword = $_POST['psw-repeat'];
		
		if($password==$RepeatPassword)
		{	
		$sql= "INSERT INTO logindata (CPF,Password) VALUES ('$CPF','$password')";
		
		if(!mysqli_query($con,$sql))
		{
			echo "<script type='text/javascript'>alert('Not registered');</script>";
			include 'signin.html';
		}
		else
		{
			echo "<script type='text/javascript'>alert('Registration successful');</script>";
			
		}
		
		header("refresh:1; url=ongc.html");
		}
		
		else
		{
			echo "<script type='text/javascript'>alert('Password doesnt match');</script>";
			header("refresh:1; url=signin.html");
		}
		
?>
