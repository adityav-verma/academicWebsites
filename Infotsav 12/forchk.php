<?php
include("dbcon.php");
mysql_select_db("web");
$event = $_POST['sq'];
$uname=$_POST['mail'];
$passq=md5($_POST['pass']);
$query = "SELECT sq FROM users WHERE mail='$uname' ";
$ans=mysql_query($query);
$result=mysql_fetch_array($ans);
if($result['sq']==$event)
{
$query = "UPDATE users SET passw = '$passq' WHERE mail='$uname' ";
mysql_query($query) or die(mysql_error());
echo '<script language="javascript">alert("Password Changed"),window.location = "login.php"</script>';
}

else
{
echo '<script language="javascript">alert("Wrong mail Id or Security Answer"),window.location = "forgot.php"</script>';
}

?>