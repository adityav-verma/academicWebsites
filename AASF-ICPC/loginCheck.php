<?php
	session_start();
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	if($user == "aasf" && $pass == "percy_jackson"){
		$_SESSION['admin'] = "percy_jackson";
		header('location:admin.php');
	}
	else{
		header('location:login.php');
	}
?>