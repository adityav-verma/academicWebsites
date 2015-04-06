<?php
	session_start();
	include('dbcon.php');
	$id = $_GET['key'];
	$qq = "SELECT * from `events` where `id` = '$id'";
	$q = "SELECT * from `winners` WHERE `id` = '$id'";
	$r = mysql_query($q) or die(mysql_error());
	$rr = mysql_query($qq) or die(mysql_error());
	$res2 = mysql_fetch_array($rr);
	while($res = mysql_fetch_array($r)){
		$f = explode(",", $res['first']);
		$s = explode(",", $res['second']);
		$ff = explode(",", $res['firstyear']);
		
		echo "<h1>Result of ".$res2['name'];
		echo "<h2>First:</h2><ul>";
		foreach($f as $a){
			echo "<li>".$a."</li>";	
		}
		echo "</ul><h2>Second:</h2><ul>";
		foreach($s as $a){
			echo "<li>".$a."</li>";	
		}
		echo "</ul><h2>First from First Year:</h2><ul>";
		foreach($ff as $a){
			echo "<li>".$a."</li>";	
		}
		echo "</ul>";
	}
?>