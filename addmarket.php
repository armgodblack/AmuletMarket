<?php
include 'config.php';



if (isset($_POST['submit'])) {

	$sql="select * from market where Name_Market = '".trim($_POST['txtNameMarket'])."' ";
	$objQuery=mysql_query($sql);
	$objResult=mysql_fetch_array($objQuery);

if ($objResult) {
	echo "<script>alert('ชื่อตลาดพระเครื่องมีอยู่ในระบบแล้ว');</script>";

	$txtNameMarket=$_POST['txtNameMarket'];
	$textareaDetail=$_POST['textareaDetail'];
	$lat_value=$_POST['lat_value'];
	$lon_value=$_POST['lon_value'];

}
else if (trim($_POST["txtNameMarket"])=="") {
	echo "<script>alert('กรุณากรอกชื่อตลาดพระ');</script>";
}
else if (trim($_POST["txtaddress"])=="") {
	echo "<script>alert('กรุณากรอกรายระเอียดตลาดพระ');</script>";
}

else{
	$sql= "insert into market (Name_Market, Address, Zone, Canton, Zipcode, Province, TelOffice, TelOwner, Time, Latitude, Longitude)
		values ('$txtNameMarket','$txtaddress','$txtzone','$txtcanton','$txtzipcode','$txtprovince','$txtoffice','$txtowner','$txttime','$lat_value','$lon_value')";
	$objQuery = mysql_query($sql);
		echo "<script>alert('Register successfully sent');</script>";

}



}
mysql_close();



?>

<html>
<head>
	<title>AddMarket</title>
	<meta charset="UTF-8">
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css/style.css">  
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">	
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
	<form action="addmarket.php" method="post" >
		<form class="form-addmarket " >
			<div class="form-addmerket " >
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

				ชื่อตลาดพระเครื่อง  <input type="text" value="" name="txtNameMarket" id="txtNameMarket" placeholder="ตลาดพระXXXX" autofocus="" /><br>
				

				ที่อยู่  <input type="text" name="txtaddress" id="txtaddress" placeholder="537 ซอยxx ถนนxx" /><br>
				เขต / อำเภอ <input type="text" name="txtzone" id="txtzone" placeholder=" อำเภอ สามพราน" /><br>
				แขวง / ตำบล <input type="text" name="txtcanton" id="txtcanton" placeholder=" ตำบล ออมใหญ่" /><br>
				รหัสไปรษณีย์ <input type="text" name="txtzipcode" maxlength="5" id="txtzipcode"   placeholder=" 10120" /><br>
				จังหวัด <input type="text" name="txtprovince"  id="txtprovince" placeholder=" นครปฐม" /><br>
				เบอร์โทรศัพท์สำนักงาน <input type="text" name="txtoffice" maxlength="10" id="txtoffice" placeholder=" 022222222" /><br>
				เบอร์โทรศัพท์ส่วนตัว <input type="text" name="txtowner" maxlength="10" id="txtowner" placeholder=" 0888888888" /><br>
				เวลาเปิด-ปิด<input type="text" name="txttime" id="txttime" placeholder="10.00น.-22.30น." /><br>
				







			</div>

			<form  id="form_get_detailMap" name="form_get_detailMap" method="post" action="" >  
			<div id="map"  style="width:550px;height:400px"></div>
			Latitude  
				<input name="lat_value" type="text" id="lat_value" value="0" />  <br />
			Longitude  
				<input name="lon_value" type="text" id="lon_value" value="0" />  <br /> <br />
			<button type="submit" name="submit" >Submit</button>
			<input type="reset" value="cancel" >  
		</form>  
		</form>
	</form>		

	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript">
		var GGM;
		function initMap() {
			GGM = new Object(google.maps);
			var mapCanvas = document.getElementById("map");
			var myLatLng = {lat: 13.7164178, lng: 100.4513478};

			var map = new GGM.Map(document.getElementById('map'), {
				zoom: 15,
				center: myLatLng
			});
			
			//Create Marker
			var marker = new GGM.Marker({
				position: myLatLng,
				map: map,
				draggable:true,
				title:"Click drage and drop location on map"

			});  

			GGM.event.addListener(marker, 'dragend', function() {
				var my_Point = marker.getPosition();
				map.panTo(my_Point);      
				$("#lat_value").val(my_Point.lat());
				$("#lon_value").val(my_Point.lng());
			});     
		}
	</script>
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvu2YZtXDU7KJVCRobEjuPHe3NB1zr6_Q&callback=initMap">
</script>


</body> 
</html>



























