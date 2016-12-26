<?php
include 'config.php';
// $sql = 'SELECT * FROM amulet ORDER BY ID_Amulet ASC';
// $query=mysql_query($sql);


?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css"/>  
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

	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>



</head>
<body>

 	<nav class="navbar navbar-inverse">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="AmuletMarket.png" class="img-circle" width="80" height="80">
        <span style="color:white; text-align:center;"><font size="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Administrator Amulet</font></span>
        
    </nav>



<form>
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked" >          
                <li class="menu"><a href="admin_page.php">HOME</a></li>
                <li class="menu"><a href="addShop.php">Add Shop</a></li>
                <li class="menu"><a href="addamulet.php">Add Amulet</a></li>
                <li class="menu"><a href="addmarket.php">Add Market</a></li>
                <li class="menu"><a href="top10amulet.php">Top10Amulet</a></li>
            </ul>
        </div>
        
        
    </form>

    
<div>
	<div>
		<div class="container col-md-8">
			<div class="content">
			<ul id="sortable">


            <?php
            $sql = "SELECT * FROM amulet LEFT JOIN typeamulet ON amulet.TypeAmulet = typeamulet.Id_Type;";
			$db_query=mysql_query($sql);
            $path = "Images/ImagesAmulet/imgfont/"; 

           while($objResult = mysql_fetch_array($db_query)){
            ?>
            <div >
            <li id="<?php echo $objResult['ID_Amulet']; ?>" >
    			
        		<img src="<? echo $path.$objResult['FrontPicture']; ?>" width="100" height="143" border="3" />
                <div>
                	<h1><?php echo $objResult['NameLP']; ?></h1>
                		<?php echo $objResult['Generation']; ?>  <?php echo $objResult["Temple"];?> จังหวัด <?php echo $objResult["Province"];?> ปี <?php echo $objResult["YearAmulet"];?> 
                		<h2>เจ้าของพระ : <?php echo $objResult['Name_Owner']; ?></h2>
                </div>

                </div>
            </li>
            <?php
            }
            ?>
        </ul>




        	</div><!-- content -->
		</div> <!-- container -->
	</div>

</div>

<!-- test -->

    
</body>
</html>

