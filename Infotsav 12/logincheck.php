<?php
include("dbcon.php");
mysql_select_db("web");
$mail=$_POST["mail"];
$pass=md5($_POST["pass"]);

//checking the login details for admin
if($mail=="Admin" && $pass==md5("admin"))
{
	session_start();
	$_SESSION['user']="admin";
	header('location:admin.php');
}

//checking the login details for users
else
{

	$sql="select `passw` from `users` where `mail`='$mail'";
	$qury=mysql_query($sql);

	$result=mysql_fetch_array($qury);

	if($result['passw']==$pass)
	{
		session_start();
		$n=mysql_query("select `fname` from `users` where `mail`='$mail'");
		$res=mysql_fetch_array($n);
		$_SESSION['mail'] =$mail;
		$_SESSION['name']=$res['fname'];
		header('location:profile.php');
	}
	else
	{
	echo '<script language="javascript">alert("Wrong Username or Password"),window.location = "login.php"</script>';
	}
}
?>