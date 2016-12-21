<?php
include 'config.php';
$strSQL = "SELECT * FROM amulet";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");


?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css"/>  
<head>
	<meta charset="UTF-8">		
	<title>Administrator</title>
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<a href="admin_page.php">HOME</a><br>
    <a href="addShop.php"> Add Shop </a><br>
    <a href="addmarket.php"> Add Market </a><br>
    <a href="addamulet.php"> Add Amulet </a><br>
    <a href="top10amulet.php"> Top10Amulet </a><br>
    
<div>
	<div>
		<center><h2><b>แสดงจำนวนพระเครื่องที่จัดอันดับยอดนิยม</b></h2></center>
		<table align="center" width="1000" border="2">
			<tr>
				<th width="200"> <div align="center">รหัส</div></th>
				<th width="200"> <div align="center">เจ้าของพระ</div></th>
				<th width="200"> <div align="center">หลวงพ่อ/เกจิ</div></th>
				<th width="200"> <div align="center">เนื้อ/วัสดุ</div></th>
				<th width="200"> <div align="center">รุ่น</div></th>
				<th width="200"> <div align="center">ปี</div></th>
				<th width="200"> <div align="center">วัด</div></th>
				<th width="200"> <div align="center">จังหวัด</div></th>
				<th width="200"> <div align="center">รูป</div></th>
			</tr>

			<?php

			include 'config.php';

			$sql = "SELECT * FROM amulet ";
			$db_query=mysql_query($sql);
			$result = mysql_fetch_array($db_query);
			$path = "Images/ImagesAmulet/imgfont/"; 

			

			while($objResult = mysql_fetch_array($objQuery))
			{
				?>
				<tr>
					<td><div align="center"><?php echo $objResult["ID_Amulet"];?></div></td>
					<td align="center"><?php echo $objResult["Name_Owner"];?></td>
					<td align="center"><?php echo $objResult["NameLP"];?></td>
					<td align="center"><?php echo $objResult["TypeAmulet"];?></td>
					<td align="center"><?php echo $objResult["Generation"];?></td>
					<td align="center"><?php echo $objResult["YearAmulet"];?></td>
					<td align="center"><?php echo $objResult["Temple"];?></td>
					<td align="center"><?php echo $objResult["Province"];?></td>
					<td align="center"><img src="<? echo $path.$objResult['FrontPicture']; ?>" width="100" height="143" border="3" /></td>
				</tr>
				<?php
			}
			?>

			<?
			


			?>

		</table>

	</div>

</div>



    
</body>
</html>
