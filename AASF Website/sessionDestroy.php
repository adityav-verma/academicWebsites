<!doctype html>
<html>
<head>
<script>
	function reDirect(){
		window.location.assign("index.php");	
	}

</script>
</head>

<body>
<?php
	session_start();
	unset($_SESSION['user']);
	unset($_SESSION['admin']);
	session_destroy();
	echo "<script>reDirect();</script>";
?>
</body>
</html>