<?php
	session_start();
		$con = mysqli_connect('127.0.0.1','root','');
		
		if(!$con)
		{
			echo 'Not Connected To Server';
		}
		
		if(!mysqli_select_db($con,'ongc'))
		{
			echo "Database Not Selected";
		}
		
		$Ename = $_POST['Ename'];
		$Gender = $_POST['Gender'];
		$Designation = $_POST['Designation'];
		$CPF = $_POST['CPF'];
		$Email = $_POST['Email'];
		$Level = $_POST['Level'];
		$Landline= $_POST['Landline'];
		$Mobile = $_POST['Mobile'];
		$Seat = $_POST['Seat'];
	
		$Building = $_POST['Building'];
		$Office = $_POST['Office'];
		
		$sql= "INSERT INTO registration (Ename,Gender,Designation,CPF,Email,Level,Landline,Mobile,Seat,Building,Office) VALUES ('$Ename','$Gender','$Designation','$CPF','$Email','$Level','$Landline','$Mobile','$Seat','$Building','$Office')";
		
		if(!mysqli_query($con,$sql))
		{
			echo "<script type='text/javascript'>alert('Not Registered');</script>";
			header("refresh:1; url=employee_registration(1).html");
		}
		else
		{
			$_SESSION['Email']=$Email;
			include 'message.php';
			echo "<script type='text/javascript'>alert('Registration successful');</script>";
			header("refresh:1; url=ongc.html");
		}
		
		
		
?>