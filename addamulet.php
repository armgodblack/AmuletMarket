<?php
include 'config.php';


?>



<html>
<head>
 <title>AddAmulet</title>
 <!-- <meta charset="utf-8"> -->
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
 <link rel="stylesheet" type="text/css" href="css/style.css">
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
        <div class="col-md-2 menuhref sidenav">
            <ul class="nav nav-pills nav-stacked menuhref menu">
                <li class="menu"><a href="admin_page.php"><img src="supermarket.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;ManageShop</strong></a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Shop</a></li>
                <li class="menu"><a href="addamulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Amulet</a></li>
                <li class="menu"><a href="addmarket.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Market</a></li>
                <li class="menu"><a href="addmarket.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit Shop</a></li>
                <li class="menu"><a href="top10amulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit Amulet</a></li>
            
                <li class="menu"><a href="addShop.php"><img src="statistics.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;ManageTopChart</strong></a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage TopShop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage TopAmulet</a></li>
                
                <li class="menu"><a href="addShop.php"><img src="news-paper.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;Statistic</strong></a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Shop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopShop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopAmulet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            </ul>
        </div>
    </form>


 <form action="saveImageAmulet.php" method="post" enctype="multipart/form-data">
  <form class="form-addamulet">
   <div class="col-sm-3"></div>
   <div class="col-md-3 form-addamulet">
       <input class="form-control" type="text" value="" name="txtNameLP" id="txtNameLP" placeholder="ชื่อหลวงพ่อ / พระเกจิ" autofocus=""><br>

    <select class="form-control" name="txtTypeAmulet">
    <option value=""><-- เนื้อ/วัสดุ --></option>
    <?php
    $strSQL = "SELECT * FROM  typeamulet ORDER BY Id_Type ASC";
    $objQuery = mysql_query($strSQL);
    while($objResuut = mysql_fetch_array($objQuery))
    {
      ?>
      <option value="<?php echo $objResuut["Id_Type"];?>"><?php echo $objResuut["Type_Name_Amulet"];?></option>
      <?php
    }
    ?>
  </select><br>

        <input class="form-control" type="text" value="" name="txtgeneration" id="txtgeneration" placeholder="ชื่อรุ่นพระเครื่อง" autofocus=""><br> <!-- new -->
        <input class="form-control" value="" name="txtyear" id="txtyear" placeholder="ปีที่สร้าง" autofocus=""><br> <!-- new -->
        <input class="form-control" value="" name="txttemple" id="txttemple" placeholder="ออกที่วัด" autofocus=""><br> <!-- new -->
        <input class="form-control" value="" name="txtprovince" id="txtprovince" placeholder="จังหวัด" autofocus=""><br> <!-- new -->

  <!-- <input type="text" name="txtTypeAmulet" value="" id="txtTypeAmulet" placeholder="ประเภทพระเครื่อง" /><br> -->

    <!-- Font Amulet<input type="file" value="" name="FrontPicture" id="FrontPicture"  /><br>

    Back Amulet <input type="file" value="" name="BackPicture" id="BackPicture" /><br> -->


        <input class="form-control" type="text" value="" name="txtNameOwner" id="txtNameOwner" placeholder="ชื่อเจ้าของพระ" ><br>
        <span style="color:white; text-align:center;"><font size="4">Font Amulet</font></span>
        <input type="file"  name="FrontPicture"/><br>
        <span style="color:white; text-align:center;"><font size="4">Back Amulet</font></span>
        <input type="file"  name="BackPicture"/><br>

    
  </div>
   <div class="col-sm-4"></div>
   
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
<!-- test -->

</body>
</html>