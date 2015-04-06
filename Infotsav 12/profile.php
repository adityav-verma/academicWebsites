<!-- starting the session and checking for the session variable!-->
<?php
session_start();
if(!isset($_SESSION['name'])){header('location:home.php');}
else{}
?>
<html>
<head>
<title>Profile</title>
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
<script language="javascript">
function validate()
{
var chks = document.getElementsByName('work[]');
var hasChecked = false;
for (var i = 0; i < chks.length; i++)
{
if (chks[i].checked)
{
hasChecked = true;
break;
}
}
if(chks.length==0)
{
alert("Already Registered for all events");
return false;
}
if (hasChecked == false)
{
alert("Please select at least one event to register");
return false;
}
return true;
}
</script>

</head>
<body background="f.jpg" marginheight="0" topmargin="0" vspace="0"
marginwidth="0" leftmargin="0" hspace="0" style="margin:0; padding:0" >
<br><br><br>
<!-- printing the required name using session variable !-->
<?php
echo "<br><p align='center'><font face='AlphaMaleModern' COLOR='f26522' size='+3'>Welcome ".$_SESSION['name']."!!</font></p>";
?>

<!--setting the link on the log out division!-->
<a href="destroy.php" style='text-decoration: none;'>
	<div id='a' align="right" style="margin-right:50">
		<input type="button" value="Log Out" class="button">
	</div>
</a>
<br>
<a href="change.php" style='text-decoration: none;'>
<div id='a' align="right" style="margin-right:50">
		<input type="button" value="Change Password" class="button">
	</div>
</a>	
<form action="event_register.php" method="POST" style="margin-left:60" onSubmit="return validate()">
<?php
	include("dbcon.php");
	$uname=$_SESSION['mail'];
mysql_select_db("web");
$uname=$_SESSION['mail'];
$sql="select `id` from `users` where `mail`='$uname'";
$qury=mysql_query($sql);

$result1=mysql_fetch_array($qury);
$checkformember = mysql_query("SELECT * FROM reg WHERE user_id = '$result1[id]'") or die(mysql_error());
$sql2= mysql_query("SELECT * FROM users WHERE mail='$uname'");
$sql1= mysql_query("SELECT event_id FROM reg WHERE user_id='$result1[id]'");

while($result = mysql_fetch_array($sql2)) 
{

echo " <font face='Algerian' COLOR='f26522' size='+2'><b>Name&nbsp;&nbsp;</b> :&nbsp;&nbsp; " .$result["fname"] . "</font>";
echo " <font face='Algerian' COLOR='f26522' size='+2'>".$result["lname"] . "</font><br><br>";
echo " <font face='Algerian' COLOR='f26522' size='+2'><b>Gender&nbsp;&nbsp;</b> : &nbsp;&nbsp;" .$result["sex"] . " </font><br><br>";
echo " <font face='Algerian' COLOR='f26522' size='+2'><b>City&nbsp;&nbsp;</b> : &nbsp;&nbsp;" .$result["city"] . " </font><br><br>";
echo " <font face='Algerian' COLOR='f26522' size='+2'><b>E-Mail&nbsp;&nbsp;</b> : &nbsp;&nbsp;" . $result["mail"]."</font><br><br>";
echo " <font face='Algerian' COLOR='f26522' size='+2'><b>Phone&nbsp;&nbsp;</b> : &nbsp;&nbsp;" . $result["mob"]."</font><br><br>";
}
if(mysql_num_rows($checkformember)!= 0)
{
echo " <font face='Algerian' COLOR='f26522' size='+2'><b>Already Registered Events&nbsp;&nbsp;: </b> &nbsp;&nbsp;";
while($result2=mysql_fetch_array($sql1))
{
$sql8= mysql_query("SELECT name FROM data WHERE id='$result2[event_id]'");
$result4= mysql_fetch_array($sql8);
echo " <font face='Algerian' COLOR='f26522' size='+1.2'>" . $result4['name']." , </font>";
}

echo "<br><p align='center'><font face='AlphaMaleModern' COLOR='f26522' size='+3'>REGISTER HERE FOR EVENTS!!</font></p>";
	
$total_number_of_events=22;
	$query="SELECT * FROM `data`";
	$query1="SELECT * FROM `reg` WHERE user_id=$result1[id]";
for($i =1 ; $i<=$total_number_of_events;$i++)
{
$query1="SELECT * FROM reg WHERE user_id='$result1[id]' AND event_id='$i'";
$res1=mysql_query($query1);
if($val2=mysql_fetch_array($res1))
{}
else
{
$query3="SELECT name FROM data WHERE id='$i'";
$res5=mysql_query($query3);
$val4=mysql_fetch_array($res5);
$name=$val4['name'];
echo "<input type='checkbox' name='work[]' value='".$i."'><font face='AlphaMaleModern' COLOR='gray' size='+2'>".$name."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
}

	
}
else
{
echo "<br><p align='center'><font face='AlphaMaleModern' COLOR='f26522' size='+3'>REGISTER HERE FOR EVENTS!!</font></p>";
$query="SELECT * FROM `data`";
	$res=mysql_query($query);
	while($ans=mysql_fetch_array($res)){
		$name=$ans['name'];
		$val=$ans['id'];
		echo "<input type='checkbox' name='work[]' value='".$val."'><font face='AlphaMaleModern' COLOR='f26522' size='+2'>".$name."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
}
?>
<br><br><br>
<input type="submit" value="Register" class="button">
</form>
</body>
</html>
