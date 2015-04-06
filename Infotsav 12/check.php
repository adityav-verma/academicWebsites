<?php
session_start();
session_destroy();
?>
<html>
<head>
<title>REGISTER</title>
<link rel="shortcut icon" type="image/x-icon" href="a.ico">
<style type="text/css">body, a:hover {cursor: url(cur1002.cur), progress !important;}</style><a href="http://www.cursors-4u.com/cursor/2012/01/17/cow-print-pointer.html" target="_blank" title="Cow Print Pointer"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Cow Print Pointer" style="position:absolute; top: 0px; right: 0px;" /></a>
<style>
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

#text_box{
float:left;
background:"green";
font-size:12px;
padding:4px 2px;
border:solid 1px "black";

width:200px;
margin:4px 4 20px 10px;
}

</style>
</head>

<body background="back.jpg" marginheight="0" topmargin="0" vspace="0" onLoad="StartSlideShow()"
marginwidth="0" leftmargin="0" hspace="0" style="margin:0; padding:0" >
<a href="home.html"><img src="bottom.jpg" border="0"></a>

<?php 
include("dbcon.php");

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$place=$_POST["city"];
$email=$_POST["mail"];
$gender=$_POST["sex"];
$pass=md5($_POST["pass"]); 
$cpass=md5($_POST["rpass"]);
$phone=$_POST["mob"];
$security=$_POST["sq"];
$checkformember = mysql_query("SELECT * FROM users WHERE mail = '$email'");

if(empty($_POST["fname"]))
{
$fnmerror='Invalid First Name';
header('location:register.php');
}
elseif(empty($_POST["lname"]))
{
$lnmerror='Invalid Last Name';
header('location:register.php');
}
elseif(empty($_POST["city"]))
{
$cityerror='Invalid City';
header('location:register.php');
}
elseif(empty($_POST["mail"]))
{
$emailerror='Invalid Email address';
header('location:register.php');
}
elseif(empty($_POST["pass"]))
{
$emailerror='Invalid Password';
header('location:register.php');
}
elseif(empty($_POST["mob"]))
{
$emailerror='Invalid Phone no.';
header('location:register.php');
}

elseif(mysql_num_rows($checkformember) != 0)
{
echo '<script language="javascript">alert("Email Already In Use."),window.location = "register.php"</script>';
}

elseif($_POST["pass"] != $_POST["rpass"]) 
{
echo '<script language="javascript">alert("Password do not match."),window.location = "register.php"</script>';
}


else{
echo $fname." ".$lname." ".$place."  ".$gender." ".$pass."\n";
$sql="INSERT INTO users( `fname`, `lname`, `city`, `sex`, `mail`,`passw`,`mob`,`sq`) VALUES ('$fname', '$lname', '$place', '$gender', '$email', '$pass', '$phone','$security');";
$qury=mysql_query($sql) or die(mysql_error());


if(!$qury)
{	
	
    header('location:register.php');
}
else
{
    
	header('location:login.php');
}
}
?>
</font>
</body>
</html>