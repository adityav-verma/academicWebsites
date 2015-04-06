<?php 

//starting the session and checking the value of session variable
session_start();
if($_SESSION['user']!="admin")
{
	session_destroy(); 
	header('location:home.php');
}
?>
<html>
<head>
<title>Admin</title>
</head>
<body background="back.jpg" marginheight="0" topmargin="0" vspace="0" onLoad="StartSlideShow()"
marginwidth="0" leftmargin="0" hspace="0" style="margin:0; padding:0" >
<a href="home.html"><img src="bottom.jpg" border="0"></a>

<h1 align="center"><font face="AlphaMaleModern" COLOR="f26522" size="+4">REGISTER</font></h1>

<!-- php connection !-->
<?php
include("dbcon.php");
mysql_select_db('web');

//taking the input form the user in the via post!
															//escape string is used to remove sql injection
$value = mysql_escape_string($_POST['event']);
$data = mysql_escape_string($_POST['data']);
$col = mysql_escape_string($_POST['col']);

$a= mysql_query("SELECT `name` FROM `data` Where `event_id`='$value'");
$b=mysql_fetch_array($a);

//definig all the session variables
$_SESSION['ename']=$b['name'];
if($col=="desc"){$_SESSION['val']="Description";}
elseif($col=="rules"){$_SESSION['val']="Rules";}
elseif($col=="timeline"){$_SESSION['val']="Timeline";}
elseif($col=="timeline"){$_SESSION['val']="Timeline";}

//using the update query to update the requied data
$query= "UPDATE `data` SET `$col` = '$data' WHERE `event_id` = '$value'";
mysql_query($query) or die(mysql_error());
header("location:admin.php");

?>


</body>
</html>