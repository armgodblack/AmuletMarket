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
</head>
<body>
 <a href="admin_page.php">HOME</a><br>
 <a href="addShop.php"> Add Shop </a><br>
 <a href="addmarket.php"> Add Market </a><br>
 <a href="addamulet.php"> Add Amulet </a><br>
 <a href="top10amulet.php"> Top10Amulet </a><br>


    <form action="saveEditAmulet.php" method="post" enctype="multipart/form-data">
  <form class="form-addamulet">
   <div class="form-addamulet">
    <h2>Edit Amulet</h2>
    ID  <input type="text" value="<?=$row_show['ID_Amulet']?>"  name="idA"  readonly /><br>

    ชื่อหลวงพ่อ / พระเกจิ <input type="text"  value="<?=$row_show['NameLP']?>" name="txtNameLP" id="txtNameLP"  >

    	
    <br>
    <br>
    เนื้อ/วัสดุ <select name="txtTypeAmulet">
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
     </select><br><br> 

    ชื่อรุ่นพระเครื่อง <input type="text" value="<?=$row_show['Generation']?>" name="txtgeneration" id="txtgeneration" ><br> <!-- new -->

    ปีที่สร้าง <input type="text" value="<?=$row_show['YearAmulet']?>" name="txtyear" id="txtyear" placeholder="ปีที่สร้าง" ><br> <!-- new -->

    ออกที่วัด <input type="text" value="<?=$row_show['Temple']?>" name="txttemple" id="txttemple" placeholder="ออกที่วัด" ><br> <!-- new -->
    จังหวัด <input type="text" value="<?=$row_show['Province']?>" name="txtprovince" id="txtprovince" placeholder="จังหวัด" ><br> <!-- new -->

    <!-- <input type="text" name="txtTypeAmulet" value="" id="txtTypeAmulet" placeholder="ประเภทพระเครื่อง" /><br> -->

    <!-- Font Amulet<input type="file" value="" name="FrontPicture" id="FrontPicture"  /><br>

    Back Amulet <input type="file" value="" name="BackPicture" id="BackPicture" /><br> -->


    ชื่อเจ้าของพระ <input type="text" value="<?=$row_show['Name_Owner']?>" name="txtNameOwner" id="txtNameOwner" placeholder="ชื่อเจ้าของพระ" ><br>

    Font Amulet<input type="file"  name="FrontPicture"   /><br>

    Back Amulet <input type="file"  name="BackPicture"  /><br>



    <!-- <button type="submit" name="submit">submit</button> -->

    <input type="submit"  value="ยืนยันการแก้ไข" />
        

         
         



   </div>
  </form>
 </form>
<!-- test -->
 
</body>
</html>

