<?php
	session_start();
	include("dbcon.php");
    $idd = $_GET["id"];
	$vald = $_GET["val"];
	//echo "<script>alert('Bahi pata nahji')</script>";
	
    if($idd == "team"){
        $q = "SELECT * FROM `teams` WHERE `name`='".$vald."'";
		$res = mysql_query($q)or die(mysql_error());
		$c=0;
		while($rr = mysql_fetch_row($res)){
			$c = $c+1;
		}
		if($c == 0){
			echo "<div class='alert alert-success'><span class='glyphicon glyphicon-ok'>   Team Name is available!</span></div>";
			$_SESSION['flag'] = 2;
		}
		else{
			$_SESSION['flag'] = 1;
			echo "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove'>   Team Name already Existsl, try another!</span></div>";
			
		}
    }
	
	mysql_close($con);
    
?>
