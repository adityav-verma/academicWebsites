<script>
	function reDirect(){
		window.location.assign('index.php');	
	}

</script>
<?php
	session_start();
	include('dbcon.php');
	
if(!isset($_SESSION['admin'])){				//check for the admin session
	echo "<script>reDirect();</script>";	
}

else{	
	$id = $_POST['conDone'];
	$f = $_POST['first'];
	$s = $_POST['second'];
	$fy = $_POST['firstyear'];
	$q = "INSERT INTO `winners` (`id`, `first`, `second`, `firstyear`) VALUES('$id', '$f', '$s', '$fy')";
	$temp = mysql_query($q) or die(mysql_error());
	if($temp){
		echo "<script>alert('Result Added!!');window.location.assign('admin.php');</script>"	;
	}
}
?>