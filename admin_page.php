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
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     
</head>
<body>
     <nav class="navbar navbar-inverse">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="admin_page.php"><img src="AmuletMarket.png" class="img-circle" width="80" height="80"></a>
        <span style="color:white; text-align:center;"><font size="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Administrator Amulet</font></span>
        
    </nav>
    
    
 <form>
        <div class="col-md-2" >
            <ul class="nav nav-pills nav-stacked">          
                <li class="menu"><a href="admin_page.php">ManageShop</a></li>
                <li class="menu"><a href="addShop.php">Add Shop</a></li>
                <li class="menu"><a href="addamulet.php">Add Amulet</a></li>
                <li class="menu"><a href="addmarket.php">Add Market</a></li>
            </ul>
        </div> 
</form>
    
 <?php
$sql = "SELECT * FROM addshop INNER JOIN market ON addshop.MarketAmuletShop= market.id_amuletmarket";
$result = mysql_query($sql);
$path = "Images/ImagesLogo/";
 

     while($row = mysql_fetch_array($result)) {
//         echo "ID: " . $row["ID_Shop"]. " " . $row["Name_Shop"]. " " .$row["Name_Market"]. " " . $row["Img_Logo"]."<br>";
          ?>

    <div class="col-md-10">
        <table width="500" border="1" cellpadding="0" cellspacing="0" class="font">         
        <tr>  
            <td align="center">
                <img src="<? echo $path.$row['Img_Logo']; ?>" width="150" height="150" border="3" />
                    <?php 
                    echo "". $row["ID_Shop"]."&nbsp&nbsp&nbsp&nbsp";
                    echo "". $row["Name_Shop"]."";?>
                    
            </td><br><br>
        </table>
    </div>
        
      <?php
      }
      ?>
 
 
 
 
 
    <!-- test -->
</body>
</html>
