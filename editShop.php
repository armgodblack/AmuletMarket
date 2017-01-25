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
}

?>

<html>
<head>
   <title>EditShop</title>
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
        <div class="col-md-2 col-lg-2  sidenav" style="position: fixed;">
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

<div class="col-md-2"></div>   
    <form name="addshop" action="saveEditshop.php" method="post" enctype="multipart/form-data">
    	<form class="form-addShop">
    	<span style="color:white; "><font size="6">&nbsp;&nbsp;Edit Shop : </font></span><br><br>
    		<div class="form-addShop">
            	<div class="row">
                	<div class="col-sm-5"></div>
                    	<div class="col-sm-3">
                            
                                    <span style="color:white; text-align:center;"><font size="3">ID</font></span>
                                    <input type="text" value="<?=$row_show['ID_Shop']?>"  name="idA"  readonly /><br><br>
                                    
                                    <img id="img" name="img" src="" alt="" style="width: 100px; height: 100px; margin-bottom: 20px" align="left"/><br><br>&nbsp;&nbsp;&nbsp;
                                    <span style="color:white; text-align:center;"><font size="4">Logo Shop</font></span>
                                    <input  type="file" value="" name="Img_Logo" id="Img_Logo" OnChange="showPreview(this)" placeholder="รูปโลโก้ร้านค้า"/><br>
                                    
                                    <span style="color:white; text-align:center;"><font size="3">ชื่อร้าน</font></span>
                                    <input class="form-control" type="text" value="<?=$row_show['Name_Shop']?>" name="Name_Shop1" id="Name_Shop" /><br>
           					
                                    <span style="color:white; text-align:center;"><font size="3">ชื่อเจ้าของร้าน</font></span>
                                    <input class="form-control" type="text" value="<?=$row_show['Name_Owner']?>" name="Name_Owner" id="Name_Owner" /><br><br>

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
                                    
                                    <span style="color:white; text-align:center;"><font size="3">เบอร์โทรศัพท์</font></span>
                                    <input class="form-control" type="text" value="<?=$row_show['Phone']?>" name="Phone" id="Phone" /><br>
                                    
                                    <span style="color:white; text-align:center;"><font size="3">facebook</font></span>
                                    <input class="form-control" type="text" value="<?=$row_show['Facebook']?>" name="Facebook" id="Facebook" /><br>
                                    
                                    <span style="color:white; text-align:center;"><font size="3">Line</font></span>
                                    <input class="form-control" type="text" value="<?=$row_show['Line']?>" name="Line1" id="Line1" /><br>
							
                                    <span style="color:white; text-align:center;"><font size="3">รายละเอียดของร้านค้า</font></span>
                                    <input class="form-control" maxlength="200" value="<?=$row_show['Detail_Shop']?>" name="Detail_Shop" id="Detail_Shop" >
                                    <br>
                                    <img id="img" name="img" src="" alt="" style="width: 100px; height: 100px; margin-bottom: 20px" align="left"/><br><br>&nbsp;&nbsp;&nbsp;
                                    <span style="color:white; text-align:center;"><font size="4">รูปถ่ายหน้าร้าน</font></span>
                                    <input type="file" value="" name="Picture_Shop" id="Picture_Shop" /><br><br><br><br>
                                    
                                    
                        <div class="navbar navbar-inverse navbar-fixed-bottom">
                            <div class="col-sm-4"></div>
                                <div class="buttonsubmit col-sm-4" align="right">
                                    <button type="submit" name="submit" class="btn btn-danger">Edit</button>&nbsp;&nbsp;&nbsp;
                                    <a href="admin_page.php"<button type="reset" class="btn btn-danger">Cancel</button></a>
                                </div>
                            <div class="col-sm-4"></div>
                        </div>
                    </div>
                </div>    		
            </div>        		
    	</form>	
    </form>

    



    </body>
    </html>