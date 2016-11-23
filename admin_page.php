<!--Rachen-->
<!--Rachen-->
<!--Rachen-->
<!--Rachen-->
<!--Rachen-->


<?php
include 'config.php';//Update by Rachen
$query = "select * from addshop";//Update by Boss
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
    <a href="addShop.php"> Add Shop </a>
    
<?php 
    while($objResult = mysql_fetch_array($objQuery)){
?>
    
<table width="600" border="1"> 
<tr>
    <td><?php  echo $objResult["Name_Shop"];?></td>
    <td><?php  echo $objResult["Facebook"];?></td>
</tr>
   <?php
    }
    ?>
</table> 
<?php
    mysql_close();
?> 
    
    
</body>
</html>
