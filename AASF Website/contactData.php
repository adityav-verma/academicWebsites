<?php
session_start();
include('dbcon.php');
$name = $_POST['cName'];
$email = $_POST['cEmail'];
$data = $_POST['cQuery'];
$q = "INSERT INTO `contact` (`name`, `email`, `data`) VALUES('$name', '$email', '$data')";
$res = mysql_query($q) or die(mysql_error());
header('location:index.php');
?>