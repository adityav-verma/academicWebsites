<?php
include('../include/conn.php');
	if(!isset($_SESSION["logged"]))
	{
		header("location:../index.php");
	}
	else
	{
		if($_SESSION["logged"]=="admin")
		{
			header("location:../index.php");
		}
		else if($_SESSION["logged"]=="user")
		{
				$sid = $_GET["sid"];
				$qry = "delete from schedule where sid = $sid";
				$res = mysql_query($qry) or die(mysql_error());
				header("location:schedule.php");
		}
	
	}
	
	
?>