<?php
include 'config.php';

$strSQL="SELECT * FROM amulettoshop WHERE ID_amulet='".$_GET['ID_amulet']."' ";
$objQuery=mysql_query($strSQL);
$objResult=mysql_fetch_array($objQuery);

if($_REQUEST['ID_amulet'] != "")
{
    $id = $_REQUEST['ID_amulet'];
    $sql_show = "select * from amulettoshop where ID_amulet = '$id'";
    $result_show = mysql_query($sql_show) or die(mysql_error());
    $row_show = mysql_fetch_array($result_show);
}

?>


<html>
<head>
	<title>Edit Amulet in Shop</title>
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
        <div class="col-md-2 col-lg-2  sidenav">
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
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Shop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopShop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopAmulet</a></li>
            </ul>
        </div>
    </form>

<form name="addshop" action="SaveEditAmuletToShop.php" method="post" enctype="multipart/form-data">
<form class="form-addShop">
<div class="form-addShop">
                    <div class="row">
                    <?php
    $strSQL = "SELECT * FROM addshop LEFT JOIN market ON addshop.MarketAmuletShop = market.id_amuletmarket where ID_Shop = '$id';";
    $objQuery = mysql_query($strSQL);
    while($objResuut = mysql_fetch_array($objQuery))
    {
?>
    รหัสร้าน <input  name="NameShop" type="text" value="<?=$objResuut['ID_Shop']?>"  name="idA"   readonly/>
    ร้าน <input style="width:260px"  type="text" value="<?=$objResuut['Name_Market']?>"  name="idA"   readonly/>
    ID Data <input  type="text" value="<?=$row_show['ID_amulet']?>"  name="idA"   readonly/><br>                  
                       
<?php
    }
?>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">

<?php
include 'config.php';
    $sql = "SELECT * FROM addshop LEFT JOIN market ON addshop.MarketAmuletShop = market.id_amuletmarket where ID_Shop = '$id';";
    $db_query=mysql_query($sql);

?>

<h2>Edit Amulet In Shop</h2>
  
 

                          




   <h3>ชิ้นที่1</h3>
    <input type="file" value="<?=$row_show['ImgAmulet1']?>" name="ImgAmulet1" id="ImgAmulet1" /><br>
    <input class="form-control" type="text" value="<?=$row_show['NameAmulet1']?>" name="NameAmulet1" id="NameAmulet1" /><br>
    <input class="form-control" type="text" value="<?=$row_show['GenAmulet1']?>" name="GenAmulet1" id="GenAmulet1" /><br>

   <h3>ชิ้นที่2</h3>
    <input type="file" value="<?=$row_show['ImgAmulet2']?>" name="ImgAmulet2" id="ImgAmulet2" /><br>
    <input class="form-control" type="text" value="<?=$row_show['NameAmulet2']?>" name="NameAmulet2" id="NameAmulet2" /><br>
    <input class="form-control" type="text" value="<?=$row_show['GenAmulet2']?>" name="GenAmulet2" id="GenAmulet2" /><br> 

   <h3>ชิ้นที่3</h3>
    <input type="file" value="<?=$row_show['ImgAmulet3']?>" name="ImgAmulet3" id="ImgAmulet3" /><br>
    <input class="form-control" type="text" value="<?=$row_show['NameAmulet3']?>" name="NameAmulet3" id="NameAmulet3" /><br>
    <input class="form-control" type="text" value="<?=$row_show['GenAmulet3']?>" name="GenAmulet3" id="GenAmulet3" /><br> 

   <h3>ชิ้นที่4</h3>
    <input type="file" value="<?=$row_show['ImgAmulet4']?>" name="ImgAmulet4" id="ImgAmulet4" /><br>
    <input class="form-control" type="text" value="<?=$row_show['NameAmulet4']?>" name="NameAmulet4" id="NameAmulet4" /><br>
    <input class="form-control" type="text" value="<?=$row_show['GenAmulet4']?>" name="GenAmulet4" id="GenAmulet4" /><br>  

   <h3>ชิ้นที่5</h3>
    <input type="file" value="<?=$row_show['ImgAmulet5']?>" name="ImgAmulet5" id="ImgAmulet5" /><br>
    <input class="form-control" type="text" value="<?=$row_show['NameAmulet5']?>" name="NameAmulet5" id="NameAmulet5" /><br>
    <input class="form-control" type="text" value="<?=$row_show['GenAmulet5']?>" name="GenAmulet5" id="GenAmulet5" /><br>   

   <h3>ชิ้นที่6</h3>
    <input type="file" value="<?=$row_show['ImgAmulet6']?>" name="ImgAmulet6" id="ImgAmulet6" /><br>
    <input class="form-control" type="text" value="<?=$row_show['NameAmulet6']?>" name="NameAmulet6" id="NameAmulet6" /><br>
    <input class="form-control" type="text" value="<?=$row_show['GenAmulet6']?>" name="GenAmulet6" id="GenAmulet6" /><br>    

   <h3>ชิ้นที่7</h3>
    <input type="file" value="<?=$row_show['ImgAmulet7']?>" name="ImgAmulet7" id="ImgAmulet7" /><br>
    <input class="form-control" type="text" value="<?=$row_show['NameAmulet7']?>" name="NameAmulet7" id="NameAmulet7" /><br>
    <input class="form-control" type="text" value="<?=$row_show['GenAmulet7']?>" name="GenAmulet7" id="GenAmulet7" /><br>    

   <h3>ชิ้นที่8</h3>
    <input type="file" value="<?=$row_show['ImgAmulet8']?>" name="ImgAmulet8" id="ImgAmulet8" /><br>
    <input class="form-control" type="text" value="<?=$row_show['NameAmulet8']?>" name="NameAmulet8" id="NameAmulet8" /><br>
    <input class="form-control" type="text" value="<?=$row_show['GenAmulet8']?>" name="GenAmulet8" id="GenAmulet8" /><br>  

   <h3>ชิ้นที่9</h3>
    <input type="file" value="<?=$row_show['ImgAmulet9']?>" name="ImgAmulet9" id="ImgAmulet9" /><br>
    <input class="form-control" type="text" value="<?=$row_show['NameAmulet9']?>" name="NameAmulet9" id="NameAmulet9" /><br>
    <input class="form-control" type="text" value="<?=$row_show['GenAmulet9']?>" name="GenAmulet9" id="GenAmulet9" /><br>

   <h3>ชิ้นที่10</h3>
    <input type="file" value="<?=$row_show['ImgAmulet10']?>" name="ImgAmulet10" id="ImgAmulet10" /><br>
    <input class="form-control" type="text" value="<?=$row_show['NameAmulet10']?>" name="NameAmulet10" id="NameAmulet10" /><br>
    <input class="form-control" type="text" value="<?=$row_show['GenAmulet10']?>" name="GenAmulet10" id="GenAmulet10" /><br>     
</br></br></br></br></br>
</div>
    <div class="col-sm-4"></div>
</div>
<div class="navbar navbar-inverse navbar-fixed-bottom">
                <div class="col-sm-4"></div>
                <div class="buttonsubmit col-sm-4" align="right">
                <button type="submit" name="submit" class="btn btn-danger">Edit</button>&nbsp;&nbsp;&nbsp;
                </div>
                <div class="col-sm-4"></div>
            </div>
</form>
</form>

</body>
</html>