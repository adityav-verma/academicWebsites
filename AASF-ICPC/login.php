<?php	session_start();
	if($_SESSION['admin'] == "percy_jackson"){
		header("location:admin.php");
	}
?>
<html>
    <head>
        <title>AASF-ICPC LOGIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href = "css/bootstrap.css" rel = "stylesheet">
        <link href = "css/myStyles.css" rel = "stylesheet">
        
        <script src = "http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src = "js/bootstrap.js"></script>
        <script src = "js/my.js"></script>
    </head>
	
	<body>
		<div class = "container">
			<center><div class="jumbotron" style="max-width:50%">
				<h3>AASF-ICPC Admin Login</h3>
				<form role="form" method="POST" action="loginCheck.php">
					<div class="form-group">
						<label for="user">Username</label>
						<input type="text" id="user" name="user" placeholder="Enter Username" class="form-control">
					</div>
					<div class="form-group">
						<label for="pass">Password</label>
						<input type="password" id="pass" name="pass" placeholder="Enter Password" class="form-control">
					</div>
					<div class="form-group">
						<button class="btn btn-success form-control" type="submit">Log In!</button>
					</div>
				
				</form>
			</div></center>
		</div>
	</body>
</html>