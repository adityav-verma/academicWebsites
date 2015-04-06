<?php
	session_start();
	include('dbcon.php');
?>
<html>
<head>
<script>
	function success(){
		alert("Event Added Successfully, Check the Home Page to see it!");
		window.location.assign('admin.php');	
	}
	
	function reDirect(){
		window.location.assign('index.php');	
	}
</script>
</head>
<body>
<?php
	if(!isset($_SESSION['admin'])){			//if admin is not set then redirect to index.php
		echo "<script>reDirect();</script>";
	}
	
	else{				//else add the event
	$name = mysql_escape_string($_POST['name']);
	$type = $_POST['type'];
	$sTime = $_POST['sTime'];
	$eTime = $_POST['eTime'];
	$sDate = $_POST['sDate']." ".$sTime;		//creating datetime for mysql DB
	$eDate = $_POST['eDate']." ".$eTime;
	$venue = $_POST['venue'];
	//echo $sDate." ".$eDate; 
	$data  = mysql_escape_string($_POST['data']); 
	
	if($type == "hiq" || $type == "ws"){		//for hIQ and Workshops
		$org = mysql_escape_string($_POST['org']);
		$q = "INSERT INTO events (type, name, sDate, eDate, venue, data, organisers, status) VALUES('$type', '$name', '$sDate', '$eDate', '$venue', '$data', '$org', '0')";
		$res = mysql_query($q) or die(mysql_error());
		if($res>0){
			echo "<script>success();</script>";
		}
	}
	
	else if($type == "ct" || $type == "le" || $type == "me"){		//for any Contest
		$org = mysql_escape_string($_POST['org']);
		$judge = mysql_escape_string($_POST['judge']);
				$q = "INSERT INTO events (type, name, sDate, eDate, venue, data, organisers, judges, status) VALUES('$type', '$name', '$sDate', '$eDate', '$venue', '$data', '$org', '$judge', '0')";
		$res = mysql_query($q) or die(mysql_error());
		if($res>0){
			echo "<script>success();</script>";
		}
	}
	
	else{						//for programming contest
		$pSetter = mysql_escape_string($_POST['pSetter']);
		$pTester = mysql_escape_string($_POST['pTester']);
				$q = "INSERT INTO events (type, name, sDate, eDate, venue, data, pSetter, pTester, status) VALUES('$type', '$name', '$sDate', '$eDate', '$venue', '$data', '$pSetter', '$pTester', '0')";
		$res = mysql_query($q) or die(mysql_error());
		if($res>0){
			echo "<script>success();</script>";
		}
	}
	
	}//else of admin session check ends here
?>
</body>
</html>