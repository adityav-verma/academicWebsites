<?php
	include("dbcon.php");
	$id = $_GET['id'];
	$qx = "DELETE FROM `teams` WHERE `id` = '".$id."'";
	$rx = mysql_query($qx);
	
?>
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