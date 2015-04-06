<html>
<head>
<script>
	function success(){
		alert("Event Updated Successfully!");
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
else{				//else update
$value = $_POST['event1'];
$q = "UPDATE `events` SET `status`='1' WHERE `id`='$value'";
$temp = mysql_query($q) or die(mysql_error());
if($temp>0){
	echo "<script>success();</script>";	
}
}
?>
</body>
</html>