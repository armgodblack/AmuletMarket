<html>
<head>
<title>DELETE SHOP</title>
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

	$strCustomerID = $_GET["ID_Shop"];
	$sql = "DELETE FROM top10shop
			WHERE ID_Shop = '".$strCustomerID."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		 echo "<script>alert('ลบข้อมูลสำเร็จแล้ว');
							window.location.href='managetop10shop.php';
				</script>";
	}

	mysqli_close($conn);
?>
</body>
</html>