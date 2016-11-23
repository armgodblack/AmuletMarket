<?php
include 'config.php';
$query = "select * from addshop";
$objQuery = mysql_query($query) or die ("Error Query[".$query."]");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">		
	<title>Administrator</title>
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="addShop.php"> Add Shop </a><br>
    <a href="addmarket.php"> Add Market </a>
    <a href="addamulet.php"> Add Amulet </a>
    
    
</body>
</html>
