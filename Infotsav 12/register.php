<?php
session_start();
session_destroy();
?>
<html>
<head>
<script type='text/javascript'>
function SelectAll(id)
{
    document.getElementById(id).focus();
    document.getElementById(id).select();

	
	}
	function formValidator(){
	
	var firstname = document.getElementById('fname');
	var addr = document.getElementById('city');
	var lastname = document.getElementById('lname');
	var gender = document.getElementById('sex');
	var email = document.getElementById('mail');
	var password = document.getElementById('pass');
	var cpassword = document.getElementById('rpass');
	var phone = document.getElementById('mob');
	var security = document.getElementById('sq');
	
	if(isAlphabet(firstname, "Please enter valid first name")){
		if(isAlphabet(lastname, "Please enter valid last name")){
			if(isAlphanumeric(addr, "Please enter valid place")){
				if(emailValidator(email, "Please enter a valid email address")){
					if(notEmpty(password,"Enter Valid password")){
						if(notValid(phone,"Enter Valid phone no.")){
						if(isAlphabet(security, "Please enter valid answer")){
							
							 return true;
							}					
						}		
							
					}
					
				}
			}
		}
	}
	
	
	return false;
	
}

function notEmpty(elem,helperMsg){
	if(elem.value.length < 6){
		alert(helperMsg);
		elem.focus();
		return false;
	}
	return true;
}

function notValid(elem, helperMsg){
	if(elem.value.length != 10){
		alert(helperMsg);
		elem.focus();
		return false;
	}
	return true;
}




function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter a username between " +min+ " and " +max+ " characters");
		elem.focus();
		return false;
	}
}

function passcheck(elem,helperMsg){
    var check = password;
	var user = elem;
	if(user == check){
	    return true;
	}else{
	     alert(helperMsg);
		 elem.focus();
		 return false;
	}
}	
	
	

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

</script>
<title>REGISTER</title>
<link rel="shortcut icon" type="image/x-icon" href="a.ico">
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
<a href="home.php"><img src="bottom.jpg" border="0"></a>

<h1 align="center"><font face="AlphaMaleModern" COLOR="f26522" size="+4">REGISTER</font></h1>

<form action="check.php" onSubmit="return (formValidator());" method="POST">
<table align="center">
<tr>
<td height="35">
<font face="AlphaMaleModern" COLOR="f26522" size="+2.8">First Name: </font></td><td><input type="text" name="fname" value="Enter your first name" id="fname" onClick="SelectAll('fname');" class="text_box"></td>
</tr>
<tr></tr>
<tr>
<td height="35">
<font face="AlphaMaleModern" COLOR="f26522" size="+2.8">Last Name: </font></td><td><input type="text" name="lname" value="Enter your last name" id="lname" onClick="SelectAll('lname');"></td>
</tr>
<tr>
<td height="35">
<font face="AlphaMaleModern" COLOR="f26522" size="+2.8">City:</font></td><td><input type="text" name="city" value="Enter your city" id="city" onClick="SelectAll('city');"></td>
</tr>
<tr>
<td height="35">
<font face="AlphaMaleModern" COLOR="f26522" size="+2.8">Gender: </font></td><td><input type="radio" name="sex" value="male" id="sex" checked><font face="AlphaMaleModern" COLOR="f26522" size="+2.8">Male </font><br>
<input type="radio" name="sex" value="fmale"><font face="AlphaMaleModern" COLOR="f26522" size="+2.8">Female</font></td>
</tr>
<tr>
<td height="35">
<font face="AlphaMaleModern" COLOR="f26522" size="+2.8">E-Mail ID:</td><td><input type="text" name="mail" value="Enter your email id" id="mail" onClick="SelectAll('mail');"></td>
</tr>
<tr>
<td height="35">
<font face="AlphaMaleModern" COLOR="f26522" size="+2.8">Password: </font>&nbsp;<font face="AlphaMaleModern" COLOR="f26522" size="+1.2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Min. 6 Characters]</font></td><td><input type="password" name="pass"  id="pass" onClick="SelectAll('paas');"></td>
</tr>
<tr>
<td height="35">
<font face="AlphaMaleModern" COLOR="f26522" size="+2.8">Re-Password: </font></td><td><input type="password" name="rpass"  id="rpaas" onClick="SelectAll('rpaas');"></td>
</tr>
<tr>
<td height="35">
<font face="AlphaMaleModern" COLOR="f26522" size="+2.8">Phone No.</font></td><td><input type="tel" name="mob" value="Enter your Mob Number" id="mob" onClick="SelectAll('mob');"></td>
</tr>
<tr>
<tr>
<td height="35" width="220">
<font face="AlphaMaleModern" COLOR="f26522" size="+2.8">Security Question: </font></td><td>
<select>

<option value="" selected>Select Question</option>
<option>Your Favourite Book</option>
<option>Your Favourite Teacher</option>
<option>Your Best Friend's Name</option>
<option>Answer Anything</option>
</select></td>
<tr>
<td height="35">
<font face="AlphaMaleModern" COLOR="f26522" size="+2.8">Answer: </font></td><td><input type="text" name="sq" value="Write your answer" id="sq" onClick="SelectAll('sq');"></td>
</tr>


</tr>
<tr>
<td height="35"><input type="reset" value="Reset" class="button"></td>
<td><input type="submit" onClick="return (formValidator());" value="Submit" class="button"></td>
<td width="250" align="right"><a href="home.php" style='text-decoration: none;'><img src="back_arrow.png"></td>

</tr>

</table>
</form>
</body>
</html>