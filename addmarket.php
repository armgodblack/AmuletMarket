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
		echo "<script>alert('Save successfully');</script>";

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
        
	<link rel="stylesheet" href="css/stylemenu.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 
    <nav class="navbar navbar-inverse navbar-fixed-top">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="admin_page.php"><img src="AmuletMarket.png" class="img-circle" width="80" height="80"></a>
        <span style="color:white; text-align:center;"><font size="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Administrator Amulet</font></span>
    </nav>
 
</head>
<body>
<br><br><br><br>
    <form>
        <div class="col-md-2 col-lg-2 sidenav" style="position: fixed;">
            <ul class="nav nav-pills nav-stacked ">
                <li class="menu"><a href="admin_page.php"><img src="supermarket.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;ManageShop</strong></a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Shop</a></li>
                <li class="menu"><a href="addamulettoshop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Amulet To Shop</a></li>
                <li class="menu"><a href="addmarket.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Market</a></li>
            
                <li class="menu"><a href=""><img src="statistics.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;ManageTopChart</strong></a></li>
                <li class="menu"><a href="addtop10shop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Top 10 Shop</a></li>
                <li class="menu"><a href="addamulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Top 10 Amulet</a></li>
                <li class="menu"><a href="managetop10shop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage TopShop</a></li>
                <li class="menu"><a href="top10amulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage TopAmulet</a></li>
                
                <li class="menu"><a href="statistic.php"><img src="news-paper.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;Statistic</strong></a></li>
                <li class="menu"><a href="reportmarket.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Market</a></li>
                <li class="menu"><a href="reportshop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Shop</a></li>
                <li class="menu"><a href="reporttopshop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopShop</a></li>
                <li class="menu"><a href="reporttopamulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopAmulet</a></li>
            </ul>
        </div>
    </form>

<div class="col-md-2"></div>
	<form action="addmarket.php" method="post" >
		<form class="form-addmarket " >
                    <span style="color:white; "><font size="6">&nbsp;&nbsp;Add Market : </font></span><br><br>
                    <div class="col-md-5"></div>
			<div class="form-addmerket col-md-3" >
                            <input class="form-control" type="text" value="" name="txtNameMarket" id="txtNameMarket" placeholder="ชื่อตลาดพระเครื่อง" autofocus="" /><br>
                            <input class="form-control" type="text" name="txtaddress" id="txtaddress" placeholder="ที่อยู่" /><br>
                            <input class="form-control" type="text" name="txtzone" id="txtzone" placeholder="เขต / อำเภอ" /><br>
                            <input class="form-control" type="text" name="txtcanton" id="txtcanton" placeholder="แขวง / ตำบล" /><br>
                            <input class="form-control" type="text" name="txtzipcode" maxlength="5" id="txtzipcode"   placeholder="รหัสไปรษณีย์" /><br>
                            <input class="form-control" type="text" name="txtprovince"  id="txtprovince" placeholder="จังหวัด" /><br>
                            <input class="form-control" type="text" name="txtoffice" maxlength="10" id="txtoffice" placeholder="เบอร์โทรศัพท์สำนักงาน" /><br>
                            <input class="form-control" type="text" name="txtowner" maxlength="10" id="txtowner" placeholder="เบอร์โทรศัพท์ส่วนตัว" /><br>
                            <input class="form-control" type="text" name="txttime" id="txttime" placeholder="เวลาเปิด-ปิด" /><br>
			

			<form  id="form_get_detailMap" name="form_get_detailMap" method="post" action="" >  
                            <div id="map"  style="width:550px;height:400px"></div><br>
                            <span style="color:white; text-align:center;"><font size="4">Latitude</font></span>
				<input class="form-control" name="lat_value" type="text" id="lat_value" value="0"/><br>
                            <span style="color:white; text-align:center;"><font size="4">Longitude</font></span>
                                <input class="form-control" name="lon_value" type="text" id="lon_value" value="0"/><br><br><br><br><br>
                                
                        </div>
                        <div class="col-sm-4"></div>
                        
                        
                        <!--Footer tag-->
			<div class="navbar navbar-inverse navbar-fixed-bottom">
                        <div class="col-sm-4"></div>
                        <div class="buttonsubmit col-sm-4" align="right">
                        <button type="submit" name="submit" class="btn btn-danger">Add</button>&nbsp;&nbsp;&nbsp;
                        <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                            <div class="col-sm-4"></div>
                        </div>
                                
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



























