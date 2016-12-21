<?php
include 'config.php';
$strSQL = "SELECT * FROM amulet";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");


?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css"/>  
<head>
	<meta charset="UTF-8">		
	<title>Administrator</title>
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="addShop.php"> Add Shop </a><br>
    <a href="addmarket.php"> Add Market </a><br>
    <a href="addamulet.php"> Add Amulet </a><br>
    <a href="top10amulet.php"> Top10Amulet </a><br>
    




    
</body>
</html>
