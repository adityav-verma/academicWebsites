<?php
include("dbcon.php");
mysql_select_db("web");
?>

<html>
<head>
<title>hello</title>
</head>
<body>

<form action="action.php" method="POST">
<select name="cars">
<option value="volvo">Volvo</option>
<option value="saab">Saab</option>
<option value="fiat">Fiat</option>
<option value="audi">Audi</option>
</select>

<input type="submit">
</form>

</body>
</html>