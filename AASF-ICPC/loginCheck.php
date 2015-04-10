<?php
	session_start();
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	if($user == "admin" && $pass == "admin"){
		$_SESSION['admin'] = "admin";
		header('location:admin.php');
	}
	else{
		header('location:login.php');
	}
?>
