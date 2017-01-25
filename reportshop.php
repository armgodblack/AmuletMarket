<?php
include 'config.php';

?>


<html>
<head>
	<title>Report Shop</title>
	<meta charset="UTF-8">
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css/style.css">
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
                
                <li class="menu"><a href=""><img src="news-paper.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;Statistic</strong></a></li>
                <li class="menu"><a href="reportmarket.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Market</a></li>
                <li class="menu"><a href="reportshop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Shop</a></li>
                <li class="menu"><a href="reporttopshop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopShop</a></li>
                <li class="menu"><a href="reporttopamulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopAmulet</a></li>
            </ul>
        </div>
    </form>

	<!-- ********************************************************************************************* -->
<div class="col-md-2"></div>	
	<span style="color:white; text-align: center; "><font size="6">&nbsp;&nbsp;ตารางแสดงรายชื่อร้านค้าทั้งหมด</font></span><br><br>
	<table id="sort" class="grid container" border="1px">
            <div class="col-md-2"></div>
		<thead>
			<tr>
				<th width="150"><th width="200"> <div align="center">รหัส</div></th>
				<th width="200"> <div align="center">ชื่อร้าน</div></th>
				<th width="300"> <div align="center">ชื่อเจ้าของร้าน</div></th>
				<th width="700"> <div align="center">ตลาดพระ</div></th>
				<th width="200"> <div align="center">เบอร์ร้าน</div></th>
				<th width="100"> <div align="center">เฟสบุ๊ก</div></th>
				<th width="200"> <div align="center">ไลน์</div></th>

				<th width="400"> <div align="center">Update ล่าสุด</div></th>  
			</tr>
		</thead>

		<tbody>

			<?php
			include 'config.php';

			$sql = "SELECT * FROM addshop INNER JOIN market ON addshop.MarketAmuletShop= market.id_amuletmarket";
			$db_query=mysql_query($sql);
			$index = 1;
			while($objResult = mysql_fetch_array($db_query))
			{
				?>


				<tr>                    
					<td align="center"   class="index"><?php echo $index; ?></td>
					<td ><div align="center" name="idA"><?php echo $objResult["ID_Shop"];?></div></td>
					<td align="center"><?php echo $objResult["Name_Shop"];?></td>
					<td align="center" ><?php echo $objResult["Name_Owner"];?></td>
					<td align="center"><?php echo $objResult["Name_Market"];?></td>
					<td align="center"><?php echo $objResult["Phone"];?></td>
					<td align="center"><?php echo $objResult["Facebook"];?></td>
					<td align="center"><?php echo $objResult["Line"];?></td>

					<td align="center"><?php echo $objResult["pd_date"];?></td>



				</tr>
				<?php
				$index++;
			}
			?>

		</tbody>    

	</table>
        
<div class="col-md-2"></div>
	<span  style="color:#FFFF00; text-align:center;"><font size="4">Export to Excel file Click <a href="pdfReport.php">here</a> to Download</font></span>

</body>
</html>