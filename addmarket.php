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
else if (trim($_POST["textareaDetail"])=="") {
	echo "<script>alert('กรุณากรอกรายระเอียดตลาดพระ');</script>";
}

else{
	$sql= "insert into market (Name_Market, Detail_Market, Latitude, Longitude)
		values ('$txtNameMarket','$textareaDetail','$lat_value','$lon_value')";
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
</head>
<body>
	<form action="addmarket.php" method="post" >
		<form class="form-addmarket">
			<div class="form-addmerket">
				<h2>Register AmuletMarket</h2>

				<input type="text" value="" name="txtNameMarket" id="txtNameMarket" placeholder="ชื่อตลาดพระเครื่อง" autofocus="" /><br>
				<textarea class="textareaDetail" rows="4" cols="50" placeholder="รายระเอียดตลาดพระ" name="textareaDetail"></textarea><br>
			</div>

			<form id="form_get_detailMap" name="form_get_detailMap" method="post" action="">  
			<div id="map" style="width:550px;height:400px"></div>
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



























