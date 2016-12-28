<?php
include 'config.php';
// $sql = 'SELECT * FROM amulet ORDER BY ID_Amulet ASC';
// $query=mysql_query($sql);


?>


<html>
<link rel="stylesheet" type="text/css" href="style.css"/>  
<head>
    <meta charset="UTF-8">      
    <title>Administrator</title>
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylemenu.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

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
                <li class="menu"><a href="top10amulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage TopAmulet</a></li>
                
                <li class="menu"><a href="addShop.php"><img src="news-paper.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;Statistic</strong></a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Shop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopShop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopAmulet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            </ul>
        </div>
    </form>

    
<div>
    <form action="saveRankingAmulet.php" method="post" enctype="multipart/form-data">
    <div>
        <div class=col-md-1"></div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class=" col-md-8">
            <table id="sort" class="grid container" border="1px">
                <thead>
                    <tr>
                    <th width="150"><th width="200"> <div align="center">รหัส</div></th>
                    <th width="200"> <div align="center">เจ้าของพระ</div></th>
                    <th width="200"> <div align="center">หลวงพ่อ/เกจิ</div></th>
                    <th width="200"> <div align="center">เนื้อ/วัสดุ</div></th>
                    <th width="200"> <div align="center">รุ่น</div></th>
                    <th width="200"> <div align="center">ปี</div></th>
                    <th width="200"> <div align="center">วัด</div></th>
                    <th width="200"> <div align="center">จังหวัด</div></th>
                    <th width="200"> <div align="center">รูป</div></th>
                    <th width="200"> <div align="center">ลบ</div></th>
                    <th width="200"> <div align="center">แก้ไข</div></th></th> 
                    </tr>
                </thead>




                <tbody>
                  
                


                <?php

            include 'config.php';

            $sql = "SELECT * FROM amulet LEFT JOIN typeamulet ON amulet.TypeAmulet = typeamulet.Id_Type;";
            $db_query=mysql_query($sql);
            // $result = mysql_fetch_array($db_query);
            $path = "Images/ImagesAmulet/imgfont/"; 

         
          
            
           


            $index = 1;
            while($objResult = mysql_fetch_array($db_query))
            {
                ?>

                
                     <tr>
                     <td align="center" name="idA"  class="index"><?php echo $index; ?></td>
                    <td ><div align="center"><?php echo $objResult["ID_Amulet"];?></div></td>
                    <td align="center"><?php echo $objResult["Name_Owner"];?></td>
                    <td align="center"><?php echo $objResult["NameLP"];?></td>
                    <td align="center"><?php echo $objResult["Type_Name_Amulet"];?></td>
                    <td align="center"><?php echo $objResult["Generation"];?></td>
                    <td align="center"><?php echo $objResult["YearAmulet"];?></td>
                    <td align="center"><?php echo $objResult["Temple"];?></td>
                    <td align="center"><?php echo $objResult["Province"];?></td>
                    <td align="center"><img src="<? echo $path.$objResult['FrontPicture']; ?>" width="100" height="143" border="3" /></td>
                    <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete.php?ID_Amulet=<?php echo $objResult["ID_Amulet"];?>';}">Delete</a></td>
                    <td align="center"><a href="JavaScript:if(confirm('Confirm Edit?')==true){window.location='editamulet.php?ID_Amulet=<?php echo $objResult["ID_Amulet"];?>';}">Edit</a></td>
                </tr>
                <?php
                $index++;
            }
            ?>
                </tbody>
            </table>
            
            </ul>
        </div> <!-- container -->
        
        <div class=col-md-1"></div>

    </div>
    <!--Footer tag-->
    <div class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
            <div class="buttonsubmit col-sm-4" align="right">
            <button type="submit" name="submit" class="btn btn-danger">ยืนยันการแก้ไข</button>&nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </form>
</div>



    
</body>
</html>




<script type="text/javascript">
    
    var fixHelperModified = function(e, tr) {
    var $originals = tr.children();
    var $helper = tr.clone();
    $helper.children().each(function(index) {
        $(this).width($originals.eq(index).width())
    });
    return $helper;
},
    updateIndex = function(e, ui) {
        $('td.index', ui.item.parent()).each(function (i) {
            $(this).html(i + 1);
        });
    };

$("#sort tbody").sortable({
    helper: fixHelperModified,
    stop: updateIndex
}).disableSelection();
</script>
