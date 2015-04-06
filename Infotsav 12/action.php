<?php
include("dbcon.php");
mysql_select_db("web");

$name=$_POST['cars'];
echo $name;



?>