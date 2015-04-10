<?php
$con=mysql_connect("localhost","aasf","percy_jackson");
mysql_select_db("aasf", $con);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>
