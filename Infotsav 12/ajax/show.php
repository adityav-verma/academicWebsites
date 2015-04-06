<?php
	include('../dbcon.php');
	$eid = $_GET["key"];
	$table = $_GET["table"];
	$qry = "select `$eid` from data where event_id = '$table'";
	$res = mysql_query($qry) or die(mysql_error());
	$row = mysql_fetch_array($res);
	$qry2 = "select name from data where event_id = '$table'";
	$head=mysql_query("$qry2") or die(mysql_error());
	$row1 = mysql_fetch_array($head);
	echo "<p><font face='Algerian' SIZE='+3.9' color='f26522'>".$row1[0]."</font></p><br><br>";

	
		if($table == 'akraman')
	{
	echo "<img src='images/events/akraman.png' height='135' width='150'>";
	}	else if($table == 'analyst')
	{
	echo "<img src='images/events/analyst.png' height='135' width='150'>";
	
	}
	else if($table == 'rev_e')
	{
	echo "<img src='images/events/re.png' height='135' width='150'>";
	}
	else if($table == 'la_i')
	{
	echo "<img src='images/events/la.png' height='135' width='150'>";
	}
		else if($table == 'code_weavers')
	{
	echo "<img src='images/events/codeweavers.png' height='135' width='150'>";
	}
		else if($table == 'witch_h')
	{
	echo "<img src='images/events/witch.png' height='135' width='150'>";
	}
		else if($table == 'web_m')
	{
	echo "<img src='images/events/web.png' height='135' width='150'>";
	}
		else if($table == 'brouhaha')
	{
	echo "<img src='images/events/brouhaha.png' height='135' width='150'>";
	}
		else if($table == 'pinnacle')
	{
	echo "<img src='images/events/pinnacle.png' height='135' width='150'>";
	}
		else if($table == 'tycoon')
	{
	echo "<img src='images/events/tycoon.png' height='135' width='150'>";
	}
		else if($table == 'cstrike')
	{
	echo "<img src='images/events/gamiacs.png' height='135' width='150'>";
	}
		else if($table == 'nfs')
	{
	echo "<img src='images/events/nfs.png' height='135' width='150'>";
	}
		else if($table == 'fifa')
	{
	echo "<img src='images/events/fifa.png' height='135' width='150'>";
	}
		else if($table == 'forex')
	{
	echo "<img src='images/events/forex.png' height='135' width='150'>";
	}
		else if($table == 'stock_s')
	{
	echo "<img src='images/events/stock.png' height='135' width='150'>";
	}
		else if($table == 'job_b')
	{
	echo "<img src='images/events/job.png' height='135' width='150'>";
	}
		else if($table == 'trove_t')
	{
	echo "<img src='images/events/trove.png' height='135' width='150'>";
	}
		else if($table == 'line_s')
	{
	echo "<img src='images/events/LINESQNTS.png' height='135' width='150'>";
	}
			else if($table == 'open_c')
	{
	echo "<img src='images/events/open.png' height='135' width='150'>";
	}
			else if($table == 'robo_w')
	{
	echo "<img src='images/events/w.png' height='135' width='150'>";
	}
			else if($table == 'robo_s')
	{
	echo "<img src='images/events/s.png' height='135' width='150'>";
	}
			else if($table == 'robo_r')
	{
	echo "<img src='images/events/r.png' height='135' width='150'>";
	}
	echo "<p><font face='Algerian' SIZE='+1.7' color='gray'>".$row[0]."</font></p>";
	
	
?>