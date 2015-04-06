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
<link rel="shortcut icon" type="image/x-icon" href="a.ico">
<!-- including styles!-->
<style type="text/css">body, a:hover {cursor: url(cur1002.cur), progress !important;}</style>
<style>
a {
outline: none;
}
a:active { outline: none; }
a:focus { -moz-outline-style: none; }
.button
{
background-color:#050505;
border-bottom:solid;
border-left: solid;
border-right:solid;
border-top: solid;
color:#f26522;
width:150px;
height:30px;

font-family: AlphaMaleModern
}
</style>


</head>
<body background="f.jpg" marginheight="0" topmargin="0" vspace="0" onLoad="StartSlideShow()"
marginwidth="0" leftmargin="0" hspace="0" style="margin:0; padding:0" >
<br><br><br>
<h1 align = "center"><font face="AlphaMaleModern" COLOR="f26522">ADMIN</font></h1>

<!-- division for logout button!-->
<a href="destroy.php" style='text-decoration: none;'>
<div id='a' align="right" style="margin-right:50">
	<input type="button" value="Log Out" class="button"></a><!--destroying the seesion by redirecting it to destroy.php!-->
</div>

<!-- php connection !-->
<?php
include("dbcon.php");
mysql_select_db('web');
?>

<!-- form for updation of data !-->
<br>
<img src="admin.jpg" width="120" height="150" align="right" style="margin-right:50">
<div>

</div>

<!--start of form to update the data!-->
<form action="admin_event_update.php" method="POST">

<!--making the table to design the form!-->
<table align="left">
<tr>

<td width="200">
<!--making two coloums inside one!-->
	<td width="200">
		<?php
			echo "<font face='AlphaMaleModern' COLOR='f26522' size='+2'>Events</font><br><br>";
			$q=mysql_query("SELECT * FROM `data`");
			while($res=mysql_fetch_array($q)){
			echo "<font face='AlphaMaleModern' COLOR='f26522'>".$res['name']."</font><br>";
			}
		?>
	</td>
	<td width="100" valign="top">
		<?php
			echo "<font face='AlphaMaleModern' COLOR='f26522' size='+2'>Users</font><br><br>";
			$q=mysql_query("SELECT * FROM `data`");
			while($res=mysql_fetch_array($q)){
			echo "<font face='AlphaMaleModern' COLOR='f26522'>".$res['regusers']."</font><br>";
			}
		?>
	</td>
</td>

<td width="200" valign="top">
	<?php
		if(isset($_SESSION['ename'])){
		echo "<font face='AlphaMaleModern' COLOR='f26522'>".$_SESSION['val']." of ".$_SESSION['ename']." updated!!</font><br>";
		}
	?>
	<font face="AlphaMaleModern" COLOR="f26522" size="+2">Select the event to update:</font>
	<textarea name="data" rows="20" cols="50"></textarea>
	<input type="submit" value="Update" class="button">
</td>
<td valign="top">
	<br>
	<br>
	<SELECT name="event">
	<?php

		//fetching the value from the database and using it to show the frop down list selection
		$query="SELECT * FROM `data`";
		$result = mysql_query($query) or die(mysql_error());
		while($line = mysql_fetch_array($result, MYSQL_ASSOC)){
			echo "<option value=".$line['event_id'].">".$line['name']."</option>";
			}
	?>
	</SELECT>
	<br>
	<select name="col">
		<option value="desc">Description</option>
		<option value="rules">Rules</option>
		<option value="timeline">Timeline</option>
		</td>
</tr>
</table>
</form>

</body>
</html>






</body>
</html>