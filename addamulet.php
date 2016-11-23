<?php
include 'config.php';



	$txtNameOwner=$_POST['txtNameOwner'];
	$txtNameAmulet=$_POST['txtNameAmulet'];
	$txtTypeAmulet=$_POST['txtTypeAmulet'];
	$txtamuletdetail=$_POST['txtamuletdetail'];
	$fontamulet=$_POST['fontamulet'];
	$backamulet=$_POST['backamulet'];



	$sql = "INSERT INTO amulet (`Name_Owner	`,`NameAmulet`,`TypeAmulet`,`DetailAmule`,`FrontPicture`,`BackPicture`)
        Values ('$txtNameOwner','$txtNameAmulet','$txtTypeAmulet','$txtamuletdetail',$fontamulet','$backamulet');";
    $objQuery = mysql_query($sql);
    echo "<script>alert('Save Successfully.');</script>";






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

				Font Amulet<input type="file" value="" name="fontamulet" id="fontamulet"  name="imagefile" id="imagefile"/><br>

				Back Amulet <input type="file" value="" name="backamulet" id="backamulet" name="imagefile" id="imagefile"/><br>

				<textarea class="txtamuletdetail" row="4" cols="50" placeholder="รายละเอียดพระเครื่อง" name="txtamuletdetail"></textarea><br>

				<input type="text" value="" name="txtNameOwner" id="txtNameOwner" placeholder="ชื่อเจ้าของพระ"	><br>

				<button type="submit" name="submit">submit</button>
				<input type="reset" value="cancel">
			</div>
		</form>
	</form>
</body>
</html>