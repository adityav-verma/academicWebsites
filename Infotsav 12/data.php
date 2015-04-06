<?php
	$connect=mysql_connect('localhost','user1','') or die('couldnot connect to the server'.mysql_error());
	echo "<b>connection successfull</b>";
	
	mysql_select_db('sample');
	$result = mysql_query("SELECT * FROM data");
	while($row = mysql_fetch_array($result)){
		echo $row['para'];
	}
	mysql_close($connect);
?>