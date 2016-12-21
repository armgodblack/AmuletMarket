<?php
include 'config.php';
?>


<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css/style.css">

</head>
<body >

    <form action="saveImage.php" method="post" enctype="multipart/form-data">
	<form class="form-addShop">
		<div class="form-addShop">
                   
                    <input type="text" value="" name="Name_Shop1" id="Name_Shop" placeholder="ชื่อร้านค้า" autofocus/><br>
                        <input type="text" value="" name="Name_Owner" id="Name_Owner" placeholder="ชื่อเจ้าของร้านค้า"/><br>
                        
                        <select name="MarketAmuletShop">
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
                        
                        <input type="text" value="" name="Phone" id="Phone" placeholder="เบอร์โทรศัพท์"/><br>
                        <input type="text" value="" name="Facebook" id="Facebook" placeholder="facebook"/><br>
                        <input type="text" value="" name="Line1" id="Line1" placeholder="line"/><br>
                        <textarea class="textareadetail" maxlength="200" value="" name="Detail_Shop" id="Detail_Shop" placeholder="รายละเอียดของร้านค้า"></textarea><br>
                        รูปร้านค้า<input type="file" value="" name="Picture_Shop" id="Picture_Shop" placeeholder="รูปร้านค้า"/><br>
                        รูปโลโก้<input type="file" value="" name="Picture_Amulet" id="Picture_Amulet" placeholder="รูปโลโก้ร้านค้า"/><br>
                        <button type="submit" name="submit">Add</button>
			</div>			
	</form>
        
        
        
        
        
</body>
</html>
