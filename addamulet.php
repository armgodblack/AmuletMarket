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

 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!-- Optional theme -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 <!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 

</head>
<body>
 <nav class="navbar navbar-inverse">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="AmuletMarket.png" class="img-circle" width="80" height="80">
        <span style="color:white; text-align:center;"><font size="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Administrator Amulet</font></span>
        
    </nav>
<!-- <form>
  <div class="col-md-2">
  <ul class="nav nav-pills nav-stacked" >
    <a href="admin_page.php">HOME</a><br>
    <a href="addShop.php"> Add Shop </a><br>
    <a href="addmarket.php"> Add Market </a><br>
    <a href="addamulet.php"> Add Amulet </a><br>
    <a href="top10amulet.php"> Top10Amulet </a><br>
    </ul>
  </div>
</form> -->

<form>
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked" >          
                <li class="menu"><a href="admin_page.php">HOME</a></li>
                <li class="menu"><a href="addShop.php">Add Shop</a></li>
                <li class="menu"><a href="addamulet.php">Add Amulet</a></li>
                <li class="menu"><a href="addmarket.php">Add Market</a></li>
                <li class="menu"><a href="top10amulet.php">Top10Amulet</a></li>
            </ul>
        </div>
        
        
    </form>


 <form action="saveImageAmulet.php" method="post" enctype="multipart/form-data">
  <form class="form-addamulet">
   <div class="col-md-2" form-addamulet">
    <h2>Register Amulet</h2>
    ชื่อหลวงพ่อ / พระเกจิ <input type="text" value="" name="txtNameLP" id="txtNameLP" placeholder="ชื่อหลวงพ่อ / พระเกจิ" autofocus="">

    <br>
    <br>
    เนื้อ/วัสดุ <select name="txtTypeAmulet">
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
  </select><br><br> 

  ชื่อรุ่นพระเครื่อง <input type="text" value="" name="txtgeneration" id="txtgeneration" placeholder="ชื่อรุ่นพระเครื่อง" autofocus=""><br> <!-- new -->
  ปีที่สร้าง <input type="text" value="" name="txtyear" id="txtyear" placeholder="ปีที่สร้าง" autofocus=""><br> <!-- new -->
  ออกที่วัด <input type="text" value="" name="txttemple" id="txttemple" placeholder="ออกที่วัด" autofocus=""><br> <!-- new -->
  จังหวัด <input type="text" value="" name="txtprovince" id="txtprovince" placeholder="จังหวัด" autofocus=""><br> <!-- new -->

  <!-- <input type="text" name="txtTypeAmulet" value="" id="txtTypeAmulet" placeholder="ประเภทพระเครื่อง" /><br> -->

    <!-- Font Amulet<input type="file" value="" name="FrontPicture" id="FrontPicture"  /><br>

    Back Amulet <input type="file" value="" name="BackPicture" id="BackPicture" /><br> -->


    ชื่อเจ้าของพระ <input type="text" value="" name="txtNameOwner" id="txtNameOwner" placeholder="ชื่อเจ้าของพระ" ><br>

    Font Amulet<input type="file"  name="FrontPicture"   /><br>

    Back Amulet <input type="file"  name="BackPicture"  /><br>

    <button type="submit" name="submit">submit</button>
    <input type="reset" value="cancel">
  </div>
</form>
</form>
<!-- test -->

</body>
</html>