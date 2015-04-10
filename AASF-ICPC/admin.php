<?php
	session_start();
	if($_SESSION['admin'] != "admin"){
		header("location:index.php");
	}
	
	include('dbcon.php');
?>
<html>
    <head>
        <title>AASF-ICPC ADMIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href = "css/bootstrap.css" rel = "stylesheet">
        <link href = "css/myStyles.css" rel = "stylesheet">
        
        <script src = "http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src = "js/bootstrap.js"></script>
        <script src = "js/my.js"></script>
		<script>
			function verify(x){
				var url = "verify.php?id="+x;
				$("#test").load(url);
			}
			
			function removeTeam(x){
				//alert("Hell");
				var url = "removeTeam.php?id="+x;
				$("#test").load(url);
			}
			
			$(document).ready(function(){
			
				$("#all").click(function(){
				
					$("#test").load("allTeams.php");
				});
				
			/*//for editing content
				$("#edit").click(function(){
					$("#test").load("editCont.php");
				});*/
			
			});
		</script>
    </head>
	<body>
	<!--Top Navigation bar -->
       <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">AASF-ICPC 2014 ADMIN</a>
                <button class="navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="admin.php">Admin Home</a></li>
                        <li id="all" ><a>All Verified Teams</a></li>
<!--                        <li id="edit" ><a>Edit Site Content!</a></li>-->
                        <li id = "logout"><a href="logout.php">Log Out!</a></li>
                    </ul>
                </div>
            </div>
       </div>
	<!--End of Navigation bar -->
	
	<!-- start of  Container -->
	<div class = "container" id = "test">
		<div class="table-responsive">
			<h3>Team Pending For Verification!</h3>
		<div id="unvt">
			<table class="table table-striped table-hover">
					<tr>
					<td><strong>#</strong></td>
					<td><strong>Team Name</strong></td>
					<td><strong>First Member</strong></td>
					<td><strong>First Details</strong></td>
					<td><strong>Second Member</strong></td>
					<td><strong>Second Details</strong></td>
					<td><strong>Third Member</strong></td>
					<td><strong>Third Details</strong></td>
					<td><strong>Email Id</strong></td>
					<td><strong>Verify!</strong></td>
					<td><strong>Delete!</strong></td>					
					</tr>
			<?php
				$q = "SELECT * FROM `teams` WHERE `verified` = '0'";
				$c = 1;
				$r = mysql_query($q) or die(mysql_error());
				while($res = mysql_fetch_array($r)){
					echo "<tr>";
					echo "<td>".$c."</td>";
					echo "<td>".$res['name']."</td>";
					echo "<td>".$res['fname']."</td>";
					echo "<td>".$res['frol']."</td>";
					echo "<td>".$res['sname']."</td>";
					echo "<td>".$res['srol']."</td>";
					echo "<td>".$res['tname']."</td>";
					echo "<td>".$res['trol']."</td>";
					echo "<td>".$res['email']."</td>";
					echo "<td><button class='btn btn-info' onClick='verify(".$res['id'].")'>Click to Verify!</button></td>";
					echo "<td><button class='btn btn-info' onClick='removeTeam(".$res['id'].")'>Delete the Entry!</button></td>";
					echo "</tr>";
					$c++;
				}
				echo "</table>";
				if($c == 1)
					echo "<h4 class='text-success'>No Pending Teams For Verifications! CLick All teams to view!</h4>";
					
			?>
			</div>
			
		</div>
	</div>
	
	
	
	
	
	
	
	<!-- start of footer -->
       <div class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            
            <center><p class="navbar-text">In Code lies the secret of the Universe!</p></center>
            <center><a id = "fb" target="_blank" class="navbar-btn btn btn-primary pull-right" href="http://www.facebook.com/AASFIIITM" data-content="It's so simple to create a tooltip for my website!">Like us on Facebook</a>
        </div>
       </div>
	<!-- end of footer -->

	
	</body>
</html>
