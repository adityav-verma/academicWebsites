<?php
/*using session and checking the condition so that the person cannot go back to login page once he has logged in, only after logging out
he will be able to see the login page..!!*/

session_start();
if(isset($_SESSION['name'])){header('location:profile.php');}

elseif(@$_SESSION['user']=="admin"){header('location:admin.php');}
?>


<html>
<head>
<title>LOGIN</title>
<link rel="shortcut icon" type="image/x-icon" href="a.ico">
<style type="text/css">body, a:hover {cursor: url(cur1002.cur), progress !important;}</style>
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
a:active { outline: none; }
a:focus { -moz-outline-style: none; }
</style>
<script type='text/javascript'>
function SelectAll(id)
{
    document.getElementById(id).focus();
    document.getElementById(id).select();

	
	}
	</script>
</head>

<body background="back.jpg" marginheight="0" topmargin="0" vspace="0" onLoad="StartSlideShow()"
marginwidth="0" leftmargin="0" hspace="0" style="margin:0; padding:0" >
<a href="home.php"><img src="bottom.jpg" border="0"></a>
<br><br><br><br>
<h1 align="center"><font face="AlphaMaleModern" COLOR="f26522" size="+4.3">USER LOGIN</font></h1>
<br><br>
<form action="logincheck.php" method="POST">
<table align="center">
<tr>
<td height="50" width="170">
<font face="AlphaMaleModern" COLOR="f26522" size="+3.3">E-Mail ID: </font></td><td><input type="text" name="mail" value="Enter your email id" id="mail" onClick="SelectAll('mail');"></td>
</tr>
<tr>
<td height="50">
<font face="AlphaMaleModern" COLOR="f26522" size="+3.3">Password: </font></td><td><input type="password" name="pass" value="password" id="pass" onClick="SelectAll('pass');"></td>
</tr>
<tr>
<td height="70">
<a href="forgot.php" style='text-decoration: none;'><input type="button" class="button" value="Forgot Password??" style="font-size:95%"></a></td>
<td><input type="submit" value="Submit" class="button" style="font-size:105%"></td></tr>

<tr>
<td height="70"></td>
<td width="250" align="right"><a href="home.php" style='text-decoration: none;'><img src="back_arrow.png"></td>
</tr>
</table>
</form>

</body>
</html>