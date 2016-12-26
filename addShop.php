<?php
include 'config.php';
?>


<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
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
        <img src="AmuletMarket.png" class="img-circle" width="80" height="80">
        <span style="color:white; text-align:center;"><font size="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Administrator Amulet</font></span>
        
    </nav>

    
    
    <form>
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked" >
                <li class="menu"><a href="admin_page.php">ManageShop</a></li>
                <li class="menu"><a href="addShop.php">Add Shop</a></li>
                <li class="menu"><a href="addamulet.php">Add Amulet</a></li>
                <li class="menu"><a href="addmarket.php">Add Market</a></li>
            </ul>
        </div>
        
        
    </form>
    
    
    

    <form action="saveImage.php" method="post" enctype="multipart/form-data" align="center">
	<form class="form-addShop">
		<div class="form-addShop">
                    <div class="row">
                        <div class="col-md-2">
                        <input class="form-control" type="text" value="" name="Name_Shop1" id="Name_Shop" placeholder="ชื่อร้านค้า" autofocus/><br>
                        <input class="form-control" type="text" value="" name="Name_Owner" id="Name_Owner" placeholder="ชื่อเจ้าของร้านค้า"/><br>
                        
                    
                        
                        <select class="form-control" name="MarketAmuletShop" width="50">
                            <option value=""><-- กรุณาเลือกสถานที่ --></option>
					<?php
					$strSQL = "SELECT * FROM  market ORDER BY id_amuletmarket ASC";
					$objQuery = mysql_query($strSQL);
					while($objResuut = mysql_fetch_array($objQuery))
					{
						?>
						<option value="<?php echo $objResuut["id_amuletmarket"];?>"><?php echo $objResuut["Name_Market"];?></option>
						<?php
					}
					?>
			</select><br>
                    
                        <input class="form-control" type="text" value="" name="Phone" id="Phone" placeholder="เบอร์โทรศัพท์"/><br>
                        <input class="form-control" type="text" value="" name="Facebook" id="Facebook" placeholder="facebook"/><br>
                        <input class="form-control" type="text" value="" name="Line1" id="Line1" placeholder="line"/><br>
                        <textarea class="form-control" maxlength="200" value="" name="Detail_Shop" id="Detail_Shop" placeholder="รายละเอียดของร้านค้า"></textarea><br>
                        <input type="file" value="" name="Picture_Shop" id="Picture_Shop" placeeholder="รูปร้านค้า"/><br>
                        <input type="file" value="" name="Picture_Amulet" id="Picture_Amulet" placeholder="รูปโลโก้ร้านค้า"/><br>
                        <button type="button" class="btn btn-danger">Add</button>
                        <button type="reset" class="btn btn-danger">Back</button>
			</div>
                    </div>
	</form>
        
        
        
        
        
</body>
</html>
