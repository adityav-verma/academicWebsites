<?php
session_start();
include('dbcon.php');
$id = $_GET['key'];
	
$q = "SELECT * FROM `events` WHERE `id` = '$id'";
$temp = mysql_query($q) or die(mysql_error());
while($res = mysql_fetch_array($temp)){
	
	$sD = date("F j, Y, g:i a", strtotime($res['sDate']));
	$eD = date("F j, Y, g:i a", strtotime($res['eDate']));
	
	echo "<h1>".$res['name']."</h1>";
	echo $res['data'];
	
	if($res['type'] == "hiq" || $res['type'] == 'ws'){
		$org = explode(',', $res['organisers']);
	
		echo "<h3>Organisers</h3><p>";
		foreach($org as $a){
			echo $a."<br>";	
		}
		echo "</p>";
	}
	else if($res['type'] == "le" || $res['type'] == "me" || $res['type'] == "ct"){
		$org = explode(',', $res['organisers']);
		$judges = explode(',', $res['judges']);
		echo "<h3>Judges</h3><p>";
		foreach($judges as $a){
			echo $a."<br>";	
		}
		echo "</p>";	
		echo "<h3>Organisers</h3><p>";
		foreach($org as $a){
			echo $a."<br>";	
		}
		echo "</p>";	
	}
	else if($res['type'] == "pc"){
		$set = explode(',', $res['psetter']);
		$test = explode(',', $res['ptester']);
		echo "<h3>Problem Setter</h3><p>";
		foreach($set as $a){
			echo $a."<br>";	
		}
		echo "</p>";	
		echo "<h3>Problem Tester</h3><p>";
		foreach($test as $a){
			echo $a."<br>";	
		}
		echo "</p>";
	}
	

	echo "<h3>Start of Event</h2><p>".$sD."</p>";
	echo "<h3>End of Event</h2><p>".$eD."</p>";
	echo "<h3>Venue</h3><p>".$res['venue']."</p>";
}
?>
