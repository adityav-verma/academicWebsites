<?php
session_start();
include('dbcon.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AASF</title>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link href="_css/menu_assets/styles.css" rel="stylesheet" type="text/css">
<link href="_css/la.css" rel="stylesheet" type="text/css">
<link href="_css/formStyle.css" type="text/css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="_js/form.js" type="text/javascript"></script>
<script src="_js/ajax.js" type="text/javascript"></script>
<script src="_js/animate.js" type="text/javascript"></script><!--For the animations-->
</head>

<body>

<!--Facebook SDk javascript-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script> 
<!--sdk ends here--> 

<!--DropDown menu of CSS starts here-->
<div id='cssmenu'>
  <ul>
    <li id="in"><a href="index.php"><span>Home</span></a></li>
    <li id="re"><a href="result.php"><span>Result Portal</span></a> </li>
    <li><a href='#'><span>Team AASF</span></a></li>
    <li><a href='#'><span>Albums</span></a></li>
    <li id="contact" onClick="contact()" style="cursor:pointer"><a><span>Contact Us</span></a></li>
  </ul>
  <a style="float: right; height: 0px; width:50px" href="https://www.facebook.com/AASFIIITM"><img src="_img/facebook.png" width="40" height="40"></a> </div>
<!--Dropdown menu CSS ends here--> 

<!--The Main Container Class starts here-->
<div class="container"> 
  
  <!--This division is added to bring the other division down a bit-->
  <div style="min-height:56px;"></div>
  <!--Padding division ends here--> 
  
  <!--Divisions to display the popUp!!-->
  <div class="popUp" id="popUp"> <!--PopUp-->
    <div>
      <input type="button" style="top:0%; float:right" id="exit" value="Close"/>
    </div>
    <div id="popCont"> </div>
  </div>
  <div class="popBack" id="popBack"> <!--Popback--> 
  </div>
  
  <!--Start of Header-->
  <div class="header"> <img src="_img/logo.png" width="150" height="140" alt="aasflogo" style="float:left; margin-top:-20px; margin-right:-50px" >
    <h1>Abhigyan Abhikaushalam Students’ Forum</h1>
    <h3>………coalescence of knowledge and skills</h3>
  </div>
  <!-- end of header -->
  
  <div class="sidebar1"> 
    <!-- A divison of div with class condense is made to show the upcoming events-->
    <div class="condense" id="test">
      <h3>UpComing Events</h3>
      
      <!--Php code to get the values form the database-->
      <?php
            	$qry = "SELECT * FROM `events` WHERE `status` = '0' ORDER BY `sDate` ASC";
				$temp = mysql_query($qry) or die(mysql_errno());
				while($res = mysql_fetch_array($temp)){
					$date = date("F j, Y, g:i a", strtotime($res['sDate']));
					echo "<p class='eHead' onClick='pop(".$res['id'].")'>".$res['name']."<br><font size='2.5em'>".$date."</font></p>";	
				}
				
			?>
    </div>
    <!--Div of Condense ends here--> 
    <br>
    <br>
    <!-- A divison of div with class condense is made to the top coders!-->
    <div class="condense">
      <h3>Top Coders</h3>
    </div>
    <br>
    <!--Div of Condense ends here--> 
    
    <!--This is the code of the facebook like button!-->
    <div class="fb-like" data-href="http://www.facebook.com/AASFIIITM" data-send="true" data-width="280" data-show-faces="true" layout="standard"></div>
    <div class="fb-comments" data-href="http://www.facebook.com/AASFIIITM" data-width="280" data-num-posts="10"></div>
    <!--code of facebook like button ends here--> 
    <br>
    <br>
    <!--Division for Admin Login starts here-->
    <div class="condense">
      <h3>Admin Login</h3>
      <?php
	if(!isset($_SESSION['admin'])){
		echo '<form action="adminCheck.php" method="post" name="adminLogin" id="adminLogin"><fieldset><ul><li>
<label for="user" class="text">Username</label><input type="text" name="usr" id="user" tabindex="10"></li><li><label for="pass" class="text">Password</label><input type="password" name="pass" id="pass" tabindex="20"></li><li><input type="submit" name="submit" id="submit" value="LogIn!" tabindex="30"></li></ul>
</fieldset></form>';
}
else{
	echo '<p>Already LoggedIn!</p><a href="admin.php"><input type="button" value = "Profile!"></a>';
}
?>
    </div>
    <!--End of Admin Login Division--> 
    
    <!-- sidebar division ends here--></div>
  
  <!--This divison is the Main text area of the page-->
  <div class="content" id="cont"> 
	<div class="left">
   	  <form name="f" method="post" action="">
   	    <fieldset>
          <legend>Result</legend>
          <ul>
            <li>
              <label for="resEvent" class="text" onClick="getResult()">Select an Event</label>
              <select name="resEvent" id="resEvent">
              <?php
              	$x = "SELECT * FROM `winners` NATURAL JOIN `events`";
				$rr = mysql_query($x) or die(mysql_error());
				while($r = mysql_fetch_array($rr)){
					echo "<option value=".$r['id'].">".$r['name']."</option>";
				}
			  ?>
              </select>
            </li>
            <li>
              <input type="button" name="getResult" id="gRB" value="Get Result!" onClick="gR()">
            </li>
            <li>
              <label for="getPcRating" class="text">Get Programming Contest Rating</label>
              <input type="button" name="getPcRating" id="getPcRating" value="Get Rating!">
            </li>
          </ul>
   	    </fieldset>
  	  </form>
    </div>
<!-- end .content --></div>
  <div class="footer">
    <p>&copy; Abhigyan Abhikaushalam Students’ Forum, 2013-2014</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
