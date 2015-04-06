<?php
session_start();
if(isset($_SESSION['name']))
{
include("dbcon.php");
mysql_select_db("web");
$event = md5($_POST['pass']);
$uname=$_SESSION['mail'];
$query = "UPDATE users SET passw = '$event' WHERE mail='$uname' ";
if(mysql_query($query))
{
echo '<script language="javascript">alert("Password Changed"),window.location = "profile.php"</script>';
}

else
{
echo "fail";
}

}
else
{
header('location:change.php');
}
?>