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
    <li id="in" style="cursor:pointer"><a><span>Home</span></a></li>
    <li id="re" style="cursor:pointer"><a><span>Results</span></a> </li>
    <li id="te" style="cursor:pointer"><a><span>Team AASF</span></a></li>
    <li id="contact" style="cursor: pointer; font-size: 100%;"><a><span>Contact Us</span></a></li>
    <li id="edito" style="cursor:pointer"><a href="editorial.php"><span>Editorial</span></a></li>
<?php
    	if(isset($_SESSION['admin'])){
			echo "<li><a href='admin.php'><span>Profile</span></a></li></ul>";
			echo "<a style='float: right; height: 0px; width:50px' href='sessionDestroy.php'><input name='logout' type='button' class='logoutB' id='logout' value='LogOut!'></a>";	
		}
		else if(isset($_SESSION['user'])){
			echo "<li><a href='profile.php'><span>Profile</span></a></li></ul>";
			echo "<a style='float: right; height: 0px; width:50px;' href='sessionDestroy.php'><input name='logout' type='button' class='logoutB' id='logout' value='LogOut!'></a>";
		}
		else{
			echo "<li id='login' style='cursor:pointer'><a><span>Sign In</span></a></li></ul>";	
		}		
	?> 

  <!--<a style="float: right; height: 0px; width:50px" href="https://www.facebook.com/AASFIIITM" target="_blank"><img src="_img/facebook.png" width="40" height="40"></a> <-->
  </div>
<!--Dropdown menu CSS ends here--> 

<!--The Main Container Class starts here-->
<div class="container"> 
  
  <!--This division is added to bring the other division down a bit-->
  <div style="min-height:56px;"></div>
  <!--Padding division ends here--> 
  
  <!--Divisions to display the popUp!!-->
  <div class="popUp" id="popUp"> <!--PopUp-->
    <div>
      <input type="button" style="top:0%; float:right;" id="exit" value="Close"/>
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
    <!--gogole calender is used here to show all the events-->

<iframe src="https://www.google.com/calendar/embed?title=Upcoming%20Events&amp;showPrint=0&amp;showTabs=0&amp;mode=AGENDA&amp;height=400&amp;wkst=2&amp;bgcolor=%23cccccc&amp;src=a2jhshnnd8taoi9u8bl230uvbk%40group.calendar.google.com&amp;color=%23125A12&amp;ctz=Asia%2FCalcutta" style=" border:solid 1px #777 " width="280" height="400" frameborder="0" scrolling="no"></iframe>
	<!--google calender ends here-->
	<input type='button' value='Show Details' id='viewCal'><!--button to show the entire calender-->
 
    <br>
    <br>
    <!-- A divison of div with class condense is made to the top coders!-->
    <div class="condense">
      <h3>Top Coders</h3>
      <?php
      	$qq = "SELECT * FROM `profile` WHERE `rating`>'0' ORDER BY `rating` DESC";
		$r = mysql_query($qq) or die(mysql_error());
		if(mysql_num_rows($r)>0){
		echo "<input type='button' value='View All' id='viewRating' onClick='viewRating(1)'>";	
		}
		$c = 5;
		while($res = mysql_fetch_array($r)){
			if($c == 0)
				break;
			echo "<p class='eHEad'>".$res['name']."<br><font size='2.5em'>Rating: ".$res['rating']."</font></p>";
			$c--;	
		}
	  ?>
     
    </div>
    <br>
    <!--Div of Condense ends here--> 
    
    <!--This is the code of the facebook like button!-->
    <div class="fb-like" data-href="http://www.facebook.com/AASFIIITM" data-send="true" data-width="280" data-show-faces="true" layout="standard"></div>
    <div class="fb-comments" data-href="http://www.facebook.com/AASFIIITM" data-width="280" data-num-posts="10"></div>
    <!--code of facebook like button ends here--> 
    <br>
    <br>
    
    <!-- sidebar division ends here--></div>
  
  <!--This divison is the Main text area of the page-->
  <div class="content" id="cont"> 
  
  <div id="ind">
    <!--Youtube codes are added in order to add the videos-->
    <iframe width="560" height="315" src="http://www.youtube.com/embed/QxFTCM0vNAg?wmode=opaque&rel=0" frameborder="0" allowfullscreen style="z-index:1"></iframe>
    <p>AASF Documentry, 2013</p>
    
    <!--youtube code ends here-->
    
    <h1>AASF</h1>
    <p>Abhigyan Abhikaushlam Students's forum(AASF) aims at providing the students basic knowledge about the IT and Management related topic... It's based on "Peer to Peer" learning..</p>
    <h2>Description</h2>
    <p>The Abhigyan Abhikaushalam Students’ Forum has been laboriously engaged in organizing a variety of formal and informal events. activities like HIQs were organized prominently as they act as a catalyst to evolve and nurture knowledge and know how. Being in a ever changing world with technology galloping at a pace never seen before in history, HIQs with their concept of peer to peer learning have proved to be specially useful in techno- managerial knowledge sharing. The HIQs undertaken include some in relatively sought after fields like Cryptography, Linux, Flash etc. Another major initiative undertaken was the hardware workshop conducted for IPG first year. It aimed at giving an on hand exposure of computer hardware through peer to peer learning. The forum also tried to provide platform for students to prove their mettle. This was done by conducting several competitions like Programming Contest, Design Contest and others. These competitions also aimed to test the competence in many important fields and provide them a look at where they stand. A students' life does not comprises only of academic part. It exists vast beyond that. The forum also focused its' energies provide a peep into the non-academic life of a student and give a much needed impetus to it. Various informal activities like Paricharcha(Group Discussion), Bitz Quiz, Vaad Vivad were also conducted. The forum also introduced the informal students' magazine, Pragyanki. We also aim to take more such initiatives in future to provide a fuller and more meaningful chapter to the lives of students' here in IIITM.</p>
</div>    
<div class="left" style=" display:none" id="res">
   	  <form name="f" method="post" action="">
   	    <fieldset>
          <legend>Result</legend>
          <ul>
            <li>
              <label for="resEvent" class="text" onClick="getResult()">Select an Event</label>
              <select name="resEvent" id="resEvent">
              <?php
			  	include('dbcon.php');
              	$x = "SELECT * FROM `winners` NATURAL JOIN `events`";
				$rr = mysql_query($x) or die(mysql_error());
				$nRow = mysql_num_rows($rr);
					while($r = mysql_fetch_array($rr)){
						echo "<option value=".$r['id'].">".$r['name']."</option>";
					}
			  ?>
              </select>
            </li>
            <li>
              <div id="b"><input type="button" name="getResult" id="gRB" value="Get Result!" onClick="gR()" class="x"></div>
            </li>
            <li>
              <label for="getPcRating" class="text">Programming Contest Rating</label>
              <input type="button" name="getPcRating" id="getPcRating" value="View Rating" class="x" onClick="viewRating(1)">
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
