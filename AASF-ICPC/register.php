<?php
	session_start();
	include('dbcon.php');
	$team = $_POST['teamName'];
	$fn = $_POST['fMem'];
	$fd = $_POST['fDet'];
	$fy = $_POST['fYear'];
	$sn = $_POST['sMem'];
	$sd = $_POST['sDet'];
	$sy = $_POST['sYear'];
	
	$tn = ""; $td = "";$ty="";
	
	if(isset($_POST['tMem'])){
		$tn = $_POST['tMem'];
	}
	else
		$tn = "-1";
	if(isset($_POST['tDet'])){
		$td = $_POST['tDet'];
	}
	else
		$td = "-1";
	if(isset($_POST['tYear'])){
		$ty = $_POST['tYear'];
	}
	else
		$ty = "-1";
		
	$email = $_POST['email'];
	
	//echo $team." ".$fn." ".$fd." ".$fy." ".$sn." ".$sd." ".$sy." ".$tn." ".$td." ".$ty." ".$email;
	
	$fd = $fd."".$fy;
	$sd = $sd."".$sy;
	$td = $td."".$ty;
	$team = strtolower($team);
	$qr = "SELECT * FROM `teams` WHERE `name` = '".$team."'";
	$rr = mysql_query($qr);
	$c = 0;
	while($res = mysql_fetch_array($rr)){
		$c = $c + 1;
	}
	
	if($c == 0){
		$q = "INSERT INTO `teams` (`name`, `fname`, `frol`, `sname`, `srol`, `tname`, `trol`, `email`, `verified`) VALUES('".$team."', '".$fn."','".$fd."', '".$sn."', '".$sd."', '".$tn."', '".$td."', '".$email."', '0')";
		$result = mysql_query($q);
		$_SESSION['res'] = 1;
	}
	else{
		$_SESSION['res'] = 0;
	}
		
	header('location:index.php');
?>