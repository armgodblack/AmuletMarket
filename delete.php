<html>
<head>
<title>DELETE AMULET</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "1234";
	$dbName = "AmuletMarket";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$strCustomerID = $_GET["ID_Amulet"];
	$sql = "DELETE FROM amulet
			WHERE ID_Amulet = '".$strCustomerID."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		 echo "<script>alert('ลบข้อมูลสำเร็จแล้ว');
							window.location.href='top10amulet.php';
				</script>";
	}

	mysqli_close($conn);
?>
</body>
</html>