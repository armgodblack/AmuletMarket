<?php
 include 'config.php';


$strSQL="SELECT * FROM addshop WHERE ID_Shop='".$_GET['ID_Shop']."' ";
$objQuery=mysql_query($strSQL);
$objResult=mysql_fetch_array($objQuery);

if($_REQUEST['ID_Shop'] != "")
{
    $id = $_REQUEST['ID_Shop'];
    $sql_show = "select * from addshop where ID_Shop = '$id'";
    $result_show = mysql_query($sql_show) or die(mysql_error());
    $row_show = mysql_fetch_array($result_show);


    $path = "Images/ImagesLogo/";
    $path2 = "Images/ImagesShop/";
    $pathAmulet1 = "Images/ImagesAmulet/amuletshop/amulet1/";
    $pathAmulet2 = "Images/ImagesAmulet/amuletshop/amulet2/";
    $pathAmulet3 = "Images/ImagesAmulet/amuletshop/amulet3/";
    $pathAmulet4 = "Images/ImagesAmulet/amuletshop/amulet4/";
    $pathAmulet5 = "Images/ImagesAmulet/amuletshop/amulet5/";
    $pathAmulet6 = "Images/ImagesAmulet/amuletshop/amulet6/";
    $pathAmulet7 = "Images/ImagesAmulet/amuletshop/amulet7/";
    $pathAmulet8 = "Images/ImagesAmulet/amuletshop/amulet8/";
    $pathAmulet9 = "Images/ImagesAmulet/amuletshop/amulet9/";
    $pathAmulet10 = "Images/ImagesAmulet/amuletshop/amulet10/";
}
?>

<html>
<head>
	<title>ShowShop</title>
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
        <div class="col-md-2 col-lg-2 menuhref sidenav">
            <ul class="nav nav-pills nav-stacked menu">
                <li class="menu"><a href="admin_page.php"><img src="supermarket.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;ManageShop</strong></a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Shop</a></li>
                <li class="menu"><a href="addamulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Amulet</a></li>
                <li class="menu"><a href="addmarket.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Market</a></li>
                <li class="menu"><a href="addmarket.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit Shop</a></li>
                <li class="menu"><a href="top10amulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit Amulet</a></li>
            
                <li class="menu"><a href="addShop.php"><img src="statistics.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;ManageTopChart</strong></a></li>
                <li class="menu"><a href="addtop10shop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Top 10 Shop</a></li>
                <li class="menu"><a href="managetop10shop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage TopShop</a></li>
                <li class="menu"><a href="top10amulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage TopAmulet</a></li>
                
                <li class="menu"><a href="addShop.php"><img src="news-paper.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;Statistic</strong></a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Shop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopShop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopAmulet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            </ul>
        </div>
    </form>

    <?php
    include 'config.php';
    $sql = "SELECT * FROM addshop LEFT JOIN market ON addshop.MarketAmuletShop = market.id_amuletmarket where ID_Shop = '$id';";
    $db_query=mysql_query($sql);

    while($objResult = mysql_fetch_array($db_query))
            {
    ?>
    <div class="col-md-9 col-lg-9 widthcol9 text-center">
    <br/>
        <img class="img-circle" src="<? echo $path.$row_show['Img_Logo']; ?>" width="150" height="150"  border-radius="50px"/>&nbsp&nbsp&nbsp&nbsp 
             <div >   
                <?php echo $row_show["Name_Shop"];?><br/>
                <?php echo $objResult["Name_Market"];?><br/>
                Phone : <?php echo $row_show["Phone"];?> Line : <?php echo $row_show["Line"]; ?> Facebook : <?php echo $row_show["Facebook"]; ?>
            </div> 
    </div>       
            
        
        <?php
     }
        ?>
    <br><br><br><br>

    <div class="text-center">
         <img  class="rounded"  src="<? echo $path2.$row_show['Picture_Shop']; ?>" width="771" height="250" style="margin-top: 30px;" />&nbsp&nbsp&nbsp&nbsp 
    </div>

    <div class="text-center">
        <br/><br/>
        <td ><?php echo $row_show["Detail_Shop"];?></td>
        <br/><br/>
    </div>


    <div class="col-md-9 col-lg-9 widthcol9 text-center" >
    <br/>
        <td> TOP 10 AMULET TO SHOP </td>
    <br/>
    </div>

<table id="" class="grid container" border="1px">
    <thead>
        <tr>
        
        <th width="200"> <div align="center">รูป</div></th>
        <th width="300"> <div align="center">ชื่อพระเครื่อง</div></th>
        <th width="300"> <div align="center">รุ่น</div></th>
        </tr>
    </thead>

<tbody>
<?php

include 'config.php';
$sql_Shop = "SELECT * FROM amulettoshop LEFT JOIN addshop ON amulettoshop.NameShop = addshop.ID_Shop where NameShop = '$id';";
$db_query=mysql_query($sql_Shop);






   $index = 1;
while($objResult2 = mysql_fetch_array($db_query))
{
?>
    <tr>
        <td align="center"> <img src="<? echo $pathAmulet1.$objResult2['ImgAmulet1']; ?>" width="150" height="170" border="3" /> </td>
        <td ><div align="center" name="idA"><?php echo $objResult2["NameAmulet1"];?></div></td>
        <td ><div align="center" name="idA"><?php echo $objResult2["GenAmulet1"];?></div></td>
    </tr>

    <tr>
        <td align="center"> <img src="<? echo $pathAmulet2.$objResult2['ImgAmulet2']; ?>" width="150" height="170" border="3" /> </td>
        <td ><div align="center" name="idA"><?php echo $objResult2["NameAmulet2"];?></div></td>
        <td ><div align="center" name="idA"><?php echo $objResult2["GenAmulet2"];?></div></td>
    </tr>

    <tr>
        <td align="center"> <img src="<? echo $pathAmulet3.$objResult2['ImgAmulet3']; ?>" width="150" height="170" border="3" /> </td>
        <td ><div align="center" name="idA"><?php echo $objResult2["NameAmulet3"];?></div></td>
        <td ><div align="center" name="idA"><?php echo $objResult2["GenAmulet3"];?></div></td>
    </tr>

    <tr>
        <td align="center"> <img src="<? echo $pathAmulet4.$objResult2['ImgAmulet4']; ?>" width="150" height="170" border="3" /> </td>
        <td ><div align="center" name="idA"><?php echo $objResult2["NameAmulet4"];?></div></td>
        <td ><div align="center" name="idA"><?php echo $objResult2["GenAmulet4"];?></div></td>
    </tr>

    <tr>
        <td align="center"> <img src="<? echo $pathAmulet5.$objResult2['ImgAmulet5']; ?>" width="150" height="170" border="3" /> </td>
        <td ><div align="center" name="idA"><?php echo $objResult2["NameAmulet5"];?></div></td>
        <td ><div align="center" name="idA"><?php echo $objResult2["GenAmulet5"];?></div></td>
    </tr>

    <tr>
        <td align="center"> <img src="<? echo $pathAmulet6.$objResult2['ImgAmulet6']; ?>" width="150" height="170" border="3" /> </td>
        <td ><div align="center" name="idA"><?php echo $objResult2["NameAmulet6"];?></div></td>
        <td ><div align="center" name="idA"><?php echo $objResult2["GenAmulet6"];?></div></td>
    </tr>

    <tr>
        <td align="center"> <img src="<? echo $pathAmulet7.$objResult2['ImgAmulet7']; ?>" width="150" height="170" border="3" /> </td>
        <td ><div align="center" name="idA"><?php echo $objResult2["NameAmulet7"];?></div></td>
        <td ><div align="center" name="idA"><?php echo $objResult2["GenAmulet7"];?></div></td>
    </tr>

    <tr>
        <td align="center"> <img src="<? echo $pathAmulet8.$objResult2['ImgAmulet8']; ?>" width="150" height="170" border="3" /> </td>
        <td ><div align="center" name="idA"><?php echo $objResult2["NameAmulet8"];?></div></td>
        <td ><div align="center" name="idA"><?php echo $objResult2["GenAmulet8"];?></div></td>
    </tr>

    <tr>
        <td align="center"> <img src="<? echo $pathAmulet9.$objResult2['ImgAmulet9']; ?>" width="150" height="170" border="3" /> </td>
        <td ><div align="center" name="idA"><?php echo $objResult2["NameAmulet9"];?></div></td>
        <td ><div align="center" name="idA"><?php echo $objResult2["GenAmulet9"];?></div></td>
    </tr>

    <tr>
        <td align="center"> <img src="<? echo $pathAmulet10.$objResult2['ImgAmulet10']; ?>" width="150" height="170" border="3" /> </td>
        <td ><div align="center" name="idA"><?php echo $objResult2["NameAmulet10"];?></div></td>
        <td ><div align="center" name="idA"><?php echo $objResult2["GenAmulet10"];?></div></td>
    </tr>
    
        <?php
     $index++;
            }
        ?>

</tbody>



</table>






<?php
  	include 'config.php';
    $sql = "SELECT * FROM addshop LEFT JOIN market ON top10shop.MarketAmuletShop = market.id_amuletmarket;";
   	$db_query=mysql_query($sql);
         // $result = mysql_fetch_array($db_query);
    $path = "Images/top10shop/Logo/"; 
           
?>




</body>
</html>