<?php
session_start();
	if(!isset($_SESSION['admin'])){
		header('location:index.php');
	}
include('dbcon.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AASF</title>
<link href="_css/admin.css" rel="stylesheet" type="text/css">
<link href="_css/menu_assets/styles.css" rel="stylesheet" type="text/css">
<link href="_css/formStyle.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<script src="_js/form.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="_js/ajax.js"></script>
<script src="_js/animate.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
  $(function() {
    $( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
    $( "#datepicker2" ).datepicker({ dateFormat: "yy-mm-dd" });
	$( "#datepicker3" ).datepicker({ dateFormat: "yy-mm-dd" });
  });
  
  function reDirect(){
		window.location.assign('index.php'); 
	}
</script>
</head>

<body>

<!--DropDown menu of CSS starts here-->
<div id='cssmenu'>
  <ul>
    <li id="in" style="cursor:pointer"><a href="index.php"><span>Home</span></a></li>
    <li id="re" style="cursor:pointer"><a href="index.php"><span>Results</span></a> </li>
    <li id="te" style="cursor:pointer"><a><span>Team AASF</span></a></li>
    <li id="contact" style="cursor:pointer"><a><span>Contact Us</span></a></li>
     <li id="edito" style="cursor:pointer"><a href="editorial.php"><span>Editorial</span></a></li>
    <?php
    	if(isset($_SESSION['admin'])){
			echo "<li><a href='admin.php'><span>Profile</span></a></li></ul>";
			echo "<a style='float: right; height: 0px; width:50px' href='sessionDestroy.php'><input name='logout' type='button' class='logoutB' id='logout' value='LogOut!'></a>";	
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
  <!--Start of Header-->
  <div class="header"> <img src="_img/logo.png" width="150" height="140" alt="aasflogo" style="float:left; margin-top:-20px; margin-right:-50px" >
    <h1>Abhigyan Abhikaushalam Students’ Forum</h1>
    <h3>………coalescence of knowledge and skills</h3>
  </div>
  <!-- end of header --> 
  
    <!--Divisions to display the popUp!!-->
  <div class="popUp" id="popUp"> <!--PopUp-->
    <div>
      <input type="button" style="top:0%; float:right" id="exit" value="Close"/>
    </div>
    <div id="popCont"> </div>
  </div>
  <div class="popBack" id="popBack"> <!--Popback--> 
  </div>
  
  <!--This divison is the Main text area of the page-->
  <div class="content">
    <div class="left"> <!--division for form of adding an Event -->
      <form action="addEvent.php" method="post" name="addEvent" id="addEvent" onSubmit="return(addEventValidator())">
        <fieldset>
          <legend>Add an Event (Enter Values According the Format!)</legend>
          <ul>
            <li>
              <label for="name" class="text">Name:</label>
              <input type="text" name="name" id="name" tabindex="10">
            </li>
            <li>
              <label for="type" class="text">Select the Type Of Event</label>
              <select name="type" id="type" tabindex="20" onChange="changeEventType(this.value)">
                <option value="hiq" selected="selected">hIQ</option>
                <option value="ws">Workshop</option>
                <option value="ct">Contest</option>
                <option value="pc">Programming Contest</option>
                <option value="le">Literary Event</option>
                <option value="me">Managerial Event</option>
              </select>
            </li>
            <li>
              <label for="sDate" class="text">Start Date of the Event (yyyy-mm-dd)</label>
              <input type="text" name="sDate" id="datepicker" tabindex="30">
            </li>
            <li>
              <label for="sTime" class="text">Start Time (hh:mm:ss)</label>
              <input type="text" name="sTime" id="sTime" tabindex="30">
            </li>
            <li>
              <label for="eDate" class="text">End Date of the Event (yyyy-mm-dd)</label>
              <input type="text" name="eDate" id="datepicker2" tabindex="40">
            </li>
            <li>
              <label for="eTime" class="text">End Time (hh:mm:ss)</label>
              <input type="text" name="eTime" id="eTime" tabindex="40">
            </li>
            <li>
              <label for="venue" class="text">Venue of the Event</label>
              <input type="text" name="venue" id="venue" tabindex="50">
            </li>
            <li id="tBox1">
              <label for="org" class="text">Organisers of the Event (comma seperated values)</label>
              <textarea name="org" id="org" tabindex="60"></textarea>
            </li>
            <li id="tBox2"> </li>
            <li>
              <label for="data" class="text">Data (insert basic html tags)</label>
              <textarea name="data" id="data" tabindex="70"></textarea>
            </li>
            <li>
              <input type="submit" name="submit" id="submit" value="Add Event!" tabindex="80">
              <input type="reset" name="reset" id="reset" value="Reset!" tabindex="90">
            </li>
          </ul>
        </fieldset>
      </form>
    </div>
    <!--End of addEvent Form divsion-->
    
    <div class="right">
      <form action="eventDone.php" method="post" name="eventDone" id="eventDone">
        <fieldset>
          <legend>Mark Event as Done!</legend>
          <ul>
            <li>
              <label for="event1" class="text">Select an Event</label>
              <select name="event1" id="event1" tabindex="100">
                <?php
            	$q = "SELECT * FROM `events` WHERE `status`='0'";
				$temp = mysql_query($q) or die(mysql_errno());
				while($res = mysql_fetch_array($temp)){
					echo "<option value = ".$res['id'].">".$res['name']."</option>";
				}
			?>
              </select>
            </li>
            <li>
              <input type="submit" name="submit1" id="submit1" value="Mark as Done!" tabindex="110">
            </li>
          </ul>
        </fieldset>
      </form>
    </div>
    <div class="right">
      <form name="removeEvent" method="post" action="eventRemove.php">
        <fieldset>
          <legend>Remove an Event!</legend>
          <ul>
            <li>
              <label for="event2" class="text">Select an Event</label>
              <select name="event2" id="event2" tabindex="120">
                <?php
            	$q = "SELECT * FROM `events`";
				$temp = mysql_query($q) or die(mysql_error());
				while($res = mysql_fetch_array($temp)){
					echo "<option value = ".$res['id'].">".$res['name']."</option>";
				}
			?>
              </select>
            </li>
            <li>
              <input type="submit" name="submit2" id="submit2" value="Remove Event!" tabindex="130">
            </li>
          </ul>
        </fieldset>
      </form>
    </div>
    
    <div class="right" style="height:400px; overflow:auto">
    	<h1 style="color:white; font-weight: 300; font-size:1.4em">Queries and Suggestions!</h1>
    	<?php
        	$q = "SELECT * FROM `contact` ORDER BY `id` DESC";
			$tem = mysql_query($q) or die(mysql_error());
			while($res2 = mysql_fetch_array($tem)){
				echo "<p style='color:white; font-size:1em; margin-left:15px' >".$res2['name']."<br>( ".$res2['email']." )</p>";
				echo "<p style='color:white; font-size:1em; margin-left:15px'>".$res2['data']."</p>";
				echo "<p style='color:white; font-size:1em; margin-left:15px'>----------------------------------------------------------------</p>";
			}
		?>
    </div>
  </div>
  <!--End of Content Division-->
  
  <div class="content"> <!--second content division-->
    
    <div class="left"> <!--Add Result Form-->
      <form action="addResult.php" method="post" name="addResult" id="addResult" onSubmit="return resultValidation()">
        <fieldset>
          <legend>Add a Contest Result</legend>
          <ul>
            <li>
              <label for="conDone" class="text">Contest</label>
              <select name="conDone" id="conDone">
                <?php
 				$sql = "SELECT * FROM `events` WHERE (`type`='ct' OR `type` ='le' OR `type` ='me') AND `status` = '1'";
				$temp = mysql_query($sql) or die(mysql_error());
				while($res = mysql_fetch_array($temp)){
					echo "<option value = ".$res['id'].">".$res['name']."</option>";
				}	
		  ?>
              </select>
            </li>
            <li>
              <label for="first" class="text">First (comma seperated values)</label>
              <textarea name="first" id="first"></textarea>
            </li>
            <li>
              <label for="second" class="text">Second (comma seperated values)</label>
              <textarea name="second" id="second"></textarea>
            </li>
            <li>
              <label for="firstyear" class="text">First from First Year (comma seperated values)</label>
              <textarea name="firstyear" id="firstyear"></textarea>
            </li>
            <li>
              <input type="submit" name="submit3" id="submit3" value="Add Winners">
            </li>
          </ul>
        </fieldset>
      </form>
    </div>		<!--End of result form-->
  </div>		<!--End of Content Division-->
  
  
  <!-- divison to add the editorial form-->
  <div class="content">
  	<div class="full">
    <form action="addEdit.php" method="post" name="editorial" id="editorial"  onSubmit="return editValidation()">
      <fieldset>
        <legend>Add Editorial (use pre and code tag for data):</legend>
        <ul>
          <li>
            <label for="progEvent" class="text">Name of PC:</label>
            <input type="text" name="progEvent" id="progEvent">
          </li>
            <li>
              <label for="pcDate" class="text">Date of the PC:</label>
              <input type="text" name="pcDate" id="datepicker3">
            </li>
            <li>
              <label for="progSetter" class="text">Problem Setter (Comma Seperated):</label>
              <textarea name="progSetter" id="progSetter"></textarea>
            </li>
            <li>
              <label for="progTester" class="text">Problem Tester (Comma Seperated):</label>
              <textarea name="progTester" id="progTester"></textarea>
            </li>
            <li>
              <label for="one" class="text">Problem A:</label>
              <textarea name="one" id="one" style="width:800px; height:200px;"></textarea>
            </li>
            <li>
              <label for="two" class="text">Problem B:</label>
              <textarea name="two" id="two" style="width:800px; height:200px;"></textarea>
            </li>
            <li>
              <label for="three" class="text">Problem C:</label>
              <textarea name="three" id="three" style="width:800px; height:200px;"></textarea>
            </li>
            <li>
              <label for="four" class="text">Problem D:</label>
              <textarea name="four" id="four" style="width:800px; height:200px;"></textarea>
            </li>
            <li>
              <label for="five" class="text">Problem E:</label>
              <textarea name="five" id="five" style="width:800px; height:200px;"></textarea>
            </li>
            <li>
              <input type="submit" name="addEditorial" id="addEditorial" value="Submit">
            </li>
        </ul>
      </fieldset>
    </form>
  	</div>
  </div>
  <!--end of editorial division-->
  <div class="footer">
    <p>&copy; Abhigyan Abhikaushalam Students’ Forum, 2013-2014</p>
    <!-- end .footer --></div> 
  <!-- end .container --></div>
</body>
</html>
