<?php
 include 'config.php';
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
 <a href="addmarket.php"> Add Market </a><br>
 <a href="addamulet.php"> Add Amulet </a><br>
 <a href="top10amulet.php"> Top10Amulet </a><br>
    
 <?php
$sql = "SELECT * FROM addshop INNER JOIN market ON addshop.MarketAmuletShop= market.id_amuletmarket";
$result = mysql_query($sql);
$path = "Images/ImagesLogo/";
 

     while($row = mysql_fetch_array($result)) {
         echo "ID: " . $row["ID_Shop"]. " " . $row["Name_Shop"]. " " .$row["Name_Market"]. " " . $row["Img_Logo"]."<br>";
          ?>
        <table width="500" border="1" align="center" cellpadding="0" cellspacing="0" class="font">         
        <tr>  
            <td align="center">
                    <?php 
                    echo "". $row["ID_Shop"]."&nbsp&nbsp&nbsp&nbsp";
                    echo "". $row["Name_Shop"]."";?>
                    <img src="<? echo $path.$row['Img_Logo']; ?>" width="150" height="150" border="3" />
            </td>
        </tr>  
      <?php
      }
      ?>
 
 
 
 
 
    <!-- test -->
</body>
</html>
