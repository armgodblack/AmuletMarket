<?php


include 'config.php';

$strSQL="SELECT * FROM amulet WHERE ID_Amulet='".$_GET['ID_Amulet']."' ";
$objQuery=mysql_query($strSQL);
$objResult=mysql_fetch_array($objQuery);

if($_REQUEST['ID_Amulet'] != "")
{
$id = $_REQUEST['ID_Amulet'];
$sql_show = "select * from amulet where ID_Amulet = '$id'";
$result_show = mysql_query($sql_show) or die(mysql_error());
$row_show = mysql_fetch_array($result_show);
}

?>




<html>
<head>
 <title>EditAmulet</title>
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
        <div class="col-md-2 col-lg-2 menuhref sidenav">
            <ul class="nav nav-pills nav-stacked menu">
                <li class="menu"><a href="admin_page.php"><img src="supermarket.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;ManageShop</strong></a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Shop</a></li>
                <li class="menu"><a href="addamulettoshop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Amulet To Shop</a></li>
                <li class="menu"><a href="addmarket.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Market</a></li>
            
                <li class="menu"><a href="addShop.php"><img src="statistics.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;ManageTopChart</strong></a></li>
                <li class="menu"><a href="addtop10shop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Top 10 Shop</a></li>
                <li class="menu"><a href="addamulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Top 10 Amulet</a></li>
                <li class="menu"><a href="managetop10shop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage TopShop</a></li>
                <li class="menu"><a href="top10amulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage TopAmulet</a></li>
                
                <li class="menu"><a href="statistic.php"><img src="news-paper.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;Statistic</strong></a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Shop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopShop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopAmulet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            </ul>
        </div>
    </form>
 

<form action="saveEditAmulet.php" method="post" enctype="multipart/form-data">
  <form class="form-addamulet">
      <span style="color:white; "><font size="6">&nbsp;&nbsp;Edit Amulet : </font></span><br><br>
      <div class="col-sm-3"></div>
        <div class="col-md-3 form-addamulet">
                        
     <input class="form-control" type="text" value="<?=$row_show['ID_Amulet']?>"  name="idA"  readonly /><br>

     <input class="form-control" type="text"  value="<?=$row_show['NameLP']?>" name="txtNameLP" id="txtNameLP" placeholder="ชื่อหลวงพ่อ / พระเกจิ" >

    <br>
    <select class="form-control" name="txtTypeAmulet">
        <option value="<?=$row_show['Type_Name_Amulet']?>"><-- เนื้อ/วัสดุ --></option>
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

    <input class="form-control" type="text" value="<?=$row_show['Generation']?>" name="txtgeneration" id="txtgeneration" placeholder="ชื่อรุ่นพระเครื่อง" ><br> <!-- new -->

    <input class="form-control" type="text" value="<?=$row_show['YearAmulet']?>" name="txtyear" id="txtyear" placeholder="ปีที่สร้าง" ><br> <!-- new -->

    <input class="form-control" type="text" value="<?=$row_show['Temple']?>" name="txttemple" id="txttemple" placeholder="ออกที่วัด" ><br> <!-- new -->
    
    <input class="form-control" type="text" value="<?=$row_show['Province']?>" name="txtprovince" id="txtprovince" placeholder="จังหวัด" ><br> <!-- new -->

    <!-- <input type="text" name="txtTypeAmulet" value="" id="txtTypeAmulet" placeholder="ประเภทพระเครื่อง" /><br> -->

    <!-- Font Amulet<input type="file" value="" name="FrontPicture" id="FrontPicture"  /><br>

    Back Amulet <input type="file" value="" name="BackPicture" id="BackPicture" /><br> -->


   <input class="form-control" type="text" value="<?=$row_show['Name_Owner']?>" name="txtNameOwner" id="txtNameOwner" placeholder="ชื่อเจ้าของพระ" ><br>

    Font Amulet<input type="file"  name="FrontPicture"   /><br>

    Back Amulet <input type="file"  name="BackPicture"  /><br>



    <!-- <button type="submit" name="submit">submit</button> -->

    <!--    <input type="submit"  value="ยืนยันการแก้ไข" />-->
    
        <div class="navbar navbar-inverse navbar-fixed-bottom">
                <div class="col-sm-4"></div>
                <div class="buttonsubmit col-sm-4" align="right">
                <button type="submit" name="submit" class="btn btn-danger">Edit</button>&nbsp;&nbsp;&nbsp;
                <a href="top10amulet.php"<button type="reset" class="btn btn-danger">Cancel</button></a>
                </div>
                <div class="col-sm-4"></div>
        </div>    

   </div>
  </form>
 </form>
<!-- test -->
 
</body>
</html>

