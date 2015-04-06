<html>
<head>
<style>
.button
{
background-color:#050505;
border-bottom:solid;
border-left: solid;
border-right:solid;
border-top: solid;
color:#f26522;
width:200px;
height:45px;

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
<div id="main">
<div id="left" style="float:left;width:70%;">
<?php
	include('../dbcon.php');
	$eid = $_GET["key"];
	$qry = "select * from data where event_id = '$eid'";
	$res = mysql_query($qry) or die(mysql_error());
	$row = mysql_fetch_array($res);
	$qry2 = "select name from data where event_id = '$eid'";
	$head=mysql_query("$qry2") or die(mysql_error());
	$row1 = mysql_fetch_array($head);
	
	echo "<p><font face='Algerian' SIZE='+3.9' color='f26522'>".$row1['0']."</font></p><br><br>";
	
	if($eid == 'akraman')
	{
	echo "<img src='images/events/akraman.png' height='135' width='150'>";
	}	else if($eid == 'analyst')
	{
	echo "<img src='images/events/analyst.png' height='135' width='150'>";
	
	}
	else if($eid == 'rev_e')
	{
	echo "<img src='images/events/re.png' height='135' width='150'>";
	}
	else if($eid == 'la_i')
	{
	echo "<img src='images/events/la.png' height='135' width='150'>";
	}
		else if($eid == 'code_weavers')
	{
	echo "<img src='images/events/codeweavers.png' height='135' width='150'>";
	}
		else if($eid == 'witch_h')
	{
	echo "<img src='images/events/witch.png' height='135' width='150'>";
	}
		else if($eid == 'web_m')
	{
	echo "<img src='images/events/web.png' height='135' width='150'>";
	}
		else if($eid == 'brouhaha')
	{
	echo "<img src='images/events/brouhaha.png' height='135' width='150'>";
	}
		else if($eid == 'pinnacle')
	{
	echo "<img src='images/events/pinnacle.png' height='135' width='150'>";
	}
		else if($eid == 'tycoon')
	{
	echo "<img src='images/events/tycoon.png' height='135' width='150'>";
	}
		else if($eid == 'cstrike')
	{
	echo "<img src='images/events/gamiacs.png' height='135' width='150'>";
	}
		else if($eid == 'nfs')
	{
	echo "<img src='images/events/nfs.png' height='135' width='150'>";
	}
		else if($eid == 'fifa')
	{
	echo "<img src='images/events/fifa.png' height='135' width='150'>";
	}
		else if($eid == 'forex')
	{
	echo "<img src='images/events/forex.png' height='135' width='150'>";
	}
		else if($eid == 'stock_s')
	{
	echo "<img src='images/events/stock.png' height='135' width='150'>";
	}
		else if($eid == 'job_b')
	{
	echo "<img src='images/events/job.png' height='135' width='150'>";
	}
		else if($eid == 'trove_t')
	{
	echo "<img src='images/events/trove.png' height='135' width='150'>";
	}
		else if($eid == 'line_s')
	{
	echo "<img src='images/events/LINESQNTS.png' height='135' width='150'>";
	}
			else if($eid == 'open_c')
	{
	echo "<img src='images/events/open.png' height='135' width='150'>";
	}
			else if($eid == 'robo_w')
	{
	echo "<img src='images/events/w.png' height='135' width='150'>";
	}
			else if($eid == 'robo_s')
	{
	echo "<img src='images/events/s.png' height='135' width='150'>";
	}
			else if($eid == 'robo_r')
	{
	echo "<img src='images/events/r.png' height='135' width='150'>";
	}
	
	
	echo "<p><font face='Algerian' SIZE='+1.7' color='gray'>".$row['desc']."</font></p>";
	
	
?>
</div>
<a href = "javascript:void(0)" onClick = "document.getElementById('result').style.display='none';document.getElementById('fade').style.display='none'"><img src="close.png" align='right'></a><br>
<div id="right" style="float:right;width:20%;">
</br></br></br></br></br>
<input type="submit" onClick= "show('desc','<?php echo $eid; ?>');" value="D E S R I P T I O N" class="button"></br></br></br>
<input type="submit" onClick= "show('rules','<?php echo $eid; ?>');" value="R U L E S" class="button"><br/><br/></br>
<input type="submit" onClick= "show('timeline','<?php echo $eid; ?>');" value="T I M E L I N E" class="button"></br></br></br>

</div>
</div>
</html>