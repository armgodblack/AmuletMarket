<?php


include 'config.php';

$strSQL="SELECT * FROM top10shop WHERE ID_Shop='".$_GET['ID_Shop']."' ";
$objQuery=mysql_query($strSQL);
$objResult=mysql_fetch_array($objQuery);

if($_REQUEST['ID_Shop'] != "")
{
    $id = $_REQUEST['ID_Shop'];
    $sql_show = "select * from top10shop where ID_Shop = '$id'";
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

   <!--Preview Images-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript">
            function Preview(ele) {
            $('#img').attr('src', ele.value);
            if (ele.files && ele.files[0]) 
            {
                var reader = new FileReader();
                reader.onload = function (e) 
                {
                $('#img').attr('src', e.target.result);
                }
                reader.readAsDataURL(ele.files[0]);
            }
        }
        </script>
</head>
<body>
   <br><br><br><br>

    <form>
        <div class="col-md-2 menuhref sidenav">
            <ul class="nav nav-pills nav-stacked menuhref menu">
                <li class="menu"><a href="admin_page.php"><img src="supermarket.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;ManageShop</strong></a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Shop</a></li>
                <li class="menu"><a href="addamulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Amulet Top 10</a></li>
                <li class="menu"><a href="addamulettoshop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Amulet To Shop</a></li>
                <li class="menu"><a href="addmarket.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Market</a></li>
                <li class="menu"><a href="addmarket.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit Shop</a></li>
                <li class="menu"><a href="top10amulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit Amulet</a></li>
            
                <li class="menu"><a href="addShop.php"><img src="statistics.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;ManageTopChart</strong></a></li>
                <li class="menu"><a href="addtop10shop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Top 10 Shop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage TopShop</a></li>
                <li class="menu"><a href="top10amulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage TopAmulet</a></li>
                
                <li class="menu"><a href="addShop.php"><img src="news-paper.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;Statistic</strong></a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Shop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopShop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopAmulet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            </ul>
        </div>
    </form>


    <form name="addshop" action="saveEdittop10shop.php" method="post" enctype="multipart/form-data">
      <form class="form-addShop">
         <div class="form-addShop">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
            <h2>Edit Shop</h2>
            ID  <input type="text" value="<?=$row_show['ID_Shop']?>"  name="idA"  readonly /><br>

            <img id="img" name="img" src="" alt="" style="width: 100px; height: 100px; margin-bottom: 20px" align="left"/><br><br>&nbsp;&nbsp;&nbsp;
            <span style="color:white; text-align:center;"><font size="4">Logo Shop</font></span>
            <input  type="file" value="" name="Img_Logo" id="Img_Logo" OnChange="Preview(this)" placeholder="รูปโลโก้ร้านค้า"/><br>

            ชื่อร้าน<input class="form-control" type="text" value="<?=$row_show['Name_Shop']?>" name="Name_Shop1" id="Name_Shop"  /><br>
            ชื่อเจ้าของพระ<input class="form-control" type="text" value="<?=$row_show['Name_Owner']?>" name="Name_Owner" id="Name_Owner" /><br>

            <select class="form-control" name="MarketAmuletShop" width="50">
                            <option value=""><-- กรุณาเลือกสถานที่ --></option>
                    <?php
                    $strSQL = "SELECT * FROM  market ORDER BY id_amuletmarket ASC";
                    $objQuery = mysql_query($strSQL);
                    while($objResuut = mysql_fetch_array($objQuery))
                    {
                        ?>
                        <option value="<?php echo $objResuut["id_amuletmarket"];?>"><?php echo $objResuut["Name_Market"];?></option>
                        <?php
                    }
                    ?>
            </select><br>

            เบอร์โทรร้าน<input class="form-control" type="text" value="<?=$row_show['Phone']?>" name="Phone" id="Phone" /><br>
            Facebook<input class="form-control" type="text" value="<?=$row_show['Facebook']?>" name="Facebook" id="Facebook" /><br>
            Line<input class="form-control" type="text" value="<?=$row_show['Line']?>" name="Line1" id="Line1" /><br>
            รายละเอียดร้าน<textarea class="form-control" maxlength="200" value="<?=$row_show['Detail_Shop']?>" name="Detail_Shop" id="Detail_Shop" ></textarea><br>
            รูปหน้าร้าน<input type="file" value="" name="Picture_Shop" id="Picture_Shop" /><br>


    <!-- <button type="submit" name="submit">submit</button> -->

    <input type="submit"  value="ยืนยันการแก้ไข" />








</form>
</form>
<!-- test -->

</body>
</html>

