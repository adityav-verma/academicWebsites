<html>
<head>
<script>
	function success(){
		alert("Event Removed Successfully!");
		window.location.assign("admin.php");	
	}
	
	function reDirect(){
		window.location.assign('index.php');	
	}
</script>
</head>
<body><?php
session_start();
include('dbcon.php');

if(!isset($_SESSION['admin'])){				//check for the admin session
	echo "<script>reDirect();</script>";	
}
else{
$value = $_POST['event2'];
$q = "DELETE FROM `events` WHERE `id`=$value";
$temp = mysql_query($q) or die(mysql_error());
if($temp>0){
	echo "<script>success();</script>";	
}

}
?>
</body>
</html>