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
	$fontamuletfile=$_POST['$fontamuletfile'];
	$backamuletfile=$_POST['$backamuletfile'];


}
else if (trim($_POST["txtNameAmulet"])=="") {
	echo "<script>alert('กรุณากรอกชื่อพระเครื่อง');</script>";
}
else if (trim($_POST["txtamuletdetail"])=="") {
	echo "<script>alert('กรุณากรอกรายระเอียดพระเครื่อง');</script>";
}
else if (trim($_POST["txtNameOwner"])) {
	echo "<script>alert('กรุณากรอกชื่อเจ้าของพระเครื่อง');</script>";
}
else{
	$sql= "insert into amulet (Name_Owner, NameAmulet, TypeAmulet, DetailAmulet, FrontPicture, BackPicture)
		values ('$txtNameOwner','$txtNameAmulet','$txtTypeAmulet','$txtamuletdetail','$fontamuletfile','$backamuletfile')";
	$objQuery = mysql_query($sql);
		echo "<script>alert('Register successfully sent');</script>";
}

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
	<form action="addamulet.php" method="post">
		<form class="form-addamulet">
			<div class="form-addamulet">
				<h2>Register Amulet</h2>
				<input type="text" value="" name="txtNameAmulet" id="txtNameAmulet" placeholder="ชื่อพระเครื่อง" autofocus="">

				<input type="text" name="txtTypeAmulet" value="" id="txtTypeAmulet" placeholder="ประเภทพระเครื่อง" /><br>

				Font Amulet<input type="file" value="" name="fontamuletfile" id="fontamulet"  name="imagefile" id="imagefile"/><br>

				Back Amulet <input type="file" value="" name="backamuletfile" id="backamulet" name="imagefile" id="imagefile"/><br>

				<textarea class="txtamuletdetail" row="4" cols="50" placeholder="รายละเอียดพระเครื่อง" name="txtamuletdetail"></textarea><br>

				<input type="text" value="" name="txtNameOwner" id="txtNameOwner" placeholder="ชื่อเจ้าของพระ"	><br>

				<button type="submit" name="submit">submit</button>
				<input type="reset" value="cancel">
			</div>
		</form>
	</form>
</body>
</html>