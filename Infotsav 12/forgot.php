
<html>
<head>
<title>Profile</title>
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

function notEmpty(elem){
	if(elem.value.length < 6){
		alert("Password too Short");
		elem.focus();
		return false;
	}
	return true;
}
	
	
	</script>
</head>

<body background="back.jpg" marginheight="0" topmargin="0" vspace="0" onLoad="StartSlideShow()"
marginwidth="0" leftmargin="0" hspace="0" style="margin:0; padding:0" >
<a href="home.php"><img src="bottom.jpg" border="0"></a>
<br><br><br><br>
<h1 align="center"><font face="AlphaMaleModern" COLOR="f26522" size="+4.3">Answer your security question</font></h1>
<br><br>
<form action="forchk.php" method="POST">
<table align="center">
<tr>
<td height="50">
<font face="AlphaMaleModern" COLOR="f26522" size="+3.3">E-Mail</font></td><td><input type="text" name="mail" value="Enter your mail" id="mail" onClick="SelectAll('mail');"></td>
</tr><tr>
<td height="50">
<font face="AlphaMaleModern" COLOR="f26522" size="+3.3">Answer</font></td><td><input type="password" name="sq" value="" id="sq" onClick="SelectAll('sq');"></td>
</tr>><tr>
<td height="50">
<font face="AlphaMaleModern" COLOR="f26522" size="+3.3">New Password</font>&nbsp;<font face="AlphaMaleModern" COLOR="f26522" size="+1.5">[Min. 6 Characters]</font></td><td><input type="password" name="pass" value="" id="pass" onClick="SelectAll('pass');"></td>
</tr>
<tr>
<td height="70">
<td><input type="submit" onClick="return (notEmpty(pass));" value="submit" class="button" style="font-size:105%"></td></tr>

<tr>
<td height="70"></td>
<td width="250" align="right"><a href="login.php" style='text-decoration: none;'><img src="back_arrow.png"></td>
</tr>
</table>
</form>

</body>
</html>