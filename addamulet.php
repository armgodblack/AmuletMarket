<?ob_start();?>
<?php
include 'config.php';


if (isset($_POST['submit'])) {

	$sql="select * from amulet where Name_Owner = '".trim($_POST['txtNameOwner'])."' ";
	$objQuery=mysql_query($sql);
	$objResult=mysql_fetch_array($objQuery);

	if ($objResult) {
		echo "<script>alert('ชื่อเจ้าของมีอยู่ในระบบแล้ว');</script>";

		$txtNameOwner=$_POST['txtNameOwner'];
		$txtNameAmulet=$_POST['txtNameAmulet'];
		$txtTypeAmulet=$_POST['txtTypeAmulet'];
		$txtamuletdetail=$_POST['txtamuletdetail'];
		$FrontPicture=$_POST['$FrontPicture'];
		$BackPicture=$_POST['$BackPicture'];
		$pd_date=$_POST['$pd_date'];


	}
	else if (trim($_POST["txtNameAmulet"])=="") {
		echo "<script>alert('กรุณากรอกชื่อพระเครื่อง');</script>";
	}
	else if (trim($_POST["txtamuletdetail"])=="") {
		echo "<script>alert('กรุณากรอกรายระเอียดพระเครื่อง');</script>";
	}
	else{

		$sql = "INSERT INTO amulet (`Name_Owner`,`NameAmulet`,`TypeAmulet`,`DetailAmulet`,`FrontPicture`,`pd_date`)
   		 Values ('$txtNameOwner','$txtNameAmulet','$txtTypeAmulet','$txtamuletdetail','$newname','$date');";

		$objQuery = mysql_query($sql);
		echo "<script>alert('Register successfully sent');</script>";


		
    	


	} //end else


}





mysql_close();


?>

<html>
<head>
	<title>AddAmulet</title>
	<meta charset="utf-8">
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">	
</head>
<body>
    <form action="saveImageAmulet.php" method="post" enctype="multipart/form-data">
		<form class="form-addamulet">
			<div class="form-addamulet">
				<h2>Register Amulet</h2>
				<input type="text" value="" name="txtNameAmulet" id="txtNameAmulet" placeholder="ชื่อพระเครื่อง" autofocus="">

				<input type="text" name="txtTypeAmulet" value="" id="txtTypeAmulet" placeholder="ประเภทพระเครื่อง" /><br>

				Font Amulet<input type="file" value="" name="FrontPicture" id="FrontPicture"  /><br>

				Back Amulet <input type="file" value="" name="BackPicture" id="BackPicture" /><br>

				<textarea class="txtamuletdetail" row="4" cols="50" placeholder="รายละเอียดพระเครื่อง" name="txtamuletdetail"></textarea><br>

				<input type="text" value="" name="txtNameOwner" id="txtNameOwner" placeholder="ชื่อเจ้าของพระ"	><br>

				<button type="submit" name="submit">submit</button>
				<input type="reset" value="cancel">
			</div>
		</form>
	</form>
</body>
</html>