<?php
include 'config.php';
?>


<html>
<head>
    <meta charset="UTF-8">
    <title>AddAmuletToShop</title>
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/stylemenu.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
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
            
                <li class="menu"><a href="addShop.php"><img src="statistics.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;ManageTopChart</strong></a></li>
                <li class="menu"><a href="addtop10shop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Top 10 Shop</a></li>
                <li class="menu"><a href="addamulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Top 10 Amulet</a></li>
                <li class="menu"><a href="managetop10shop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage TopShop</a></li>
                <li class="menu"><a href="top10amulet.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage TopAmulet</a></li>
                
                <li class="menu"><a href="statistic.php"><img src="news-paper.png" width="30px" height="30px"/><strong>&nbsp;&nbsp;&nbsp;Statistic</strong></a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Shop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopShop</a></li>
                <li class="menu"><a href="addShop.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TopAmulet</a></li>
            </ul>
        </div>
    </form>
    
    
    

    <form name="" action="saveamulettoshop.php" method="post" enctype="multipart/form-data">
    <form class="form-addShop">
        <div class="form-addShop">
                    <span style="color:white; "><font size="6">&nbsp;&nbsp;Add Amulet To Shop : </font></span><br><br>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        
                        <div class="col-sm-3">


                        <select class="form-control" name="NameShop" width="50">
                            <option value=""><-- กรุณาเลือกร้าน --></option>
                    <?php
                    $strSQL = "SELECT * FROM  addshop ORDER BY ID_Shop ASC";
                    $objQuery = mysql_query($strSQL);
                    while($objResuut = mysql_fetch_array($objQuery))
                    {
                        ?>
                        <option value="<?php echo $objResuut["ID_Shop"];?>"><?php echo $objResuut["Name_Shop"];?></option>
                        <?php
                    }
                    ?>
            </select><br>


                         <h3>ชิ้นที่1</h3>
                        <input type="file" value="" name="ImgAmulet1" id="ImgAmulet1" /><br>
                        <input class="form-control" type="text" value="" name="NameAmulet1" id="NameAmulet1" placeholder="ชื่อพระเครื่อง"/><br>
                        <input class="form-control" type="text" value="" name="GenAmulet1" id="GenAmulet1" placeholder="ชื่อรุ่น/ปี"/><br>

                        <h3>ชิ้นที่2</h3>
                        <input type="file" value="" name="ImgAmulet2" id="ImgAmulet2" /><br>
                        <input class="form-control" type="text" value="" name="NameAmulet2" id="NameAmulet2" placeholder="ชื่อพระเครื่อง"/><br>
                        <input class="form-control" type="text" value="" name="GenAmulet2" id="GenAmulet2" placeholder="ชื่อรุ่น/ปี"/><br>

                        <h3>ชิ้นที่3</h3>
                        <input type="file" value="" name="ImgAmulet3" id="ImgAmulet3" /><br>
                        <input class="form-control" type="text" value="" name="NameAmulet3" id="NameAmulet3" placeholder="ชื่อพระเครื่อง"/><br>
                        <input class="form-control" type="text" value="" name="GenAmulet3" id="GenAmulet3" placeholder="ชื่อรุ่น/ปี"/><br>

                        <h3>ชิ้นที่4</h3>
                        <input type="file" value="" name="ImgAmulet4" id="ImgAmulet4" /><br>
                        <input class="form-control" type="text" value="" name="NameAmulet4" id="NameAmulet4" placeholder="ชื่อพระเครื่อง"/><br>
                        <input class="form-control" type="text" value="" name="GenAmulet4" id="GenAmulet4" placeholder="ชื่อรุ่น/ปี"/><br>

                        <h3>ชิ้นที่5</h3>
                        <input type="file" value="" name="ImgAmulet5" id="ImgAmulet5" /><br>
                        <input class="form-control" type="text" value="" name="NameAmulet5" id="NameAmulet5" placeholder="ชื่อพระเครื่อง"/><br>
                        <input class="form-control" type="text" value="" name="GenAmulet5" id="GenAmulet5" placeholder="ชื่อรุ่น/ปี"/><br>

                        <h3>ชิ้นที่6</h3>
                        <input type="file" value="" name="ImgAmulet6" id="ImgAmulet6" /><br>
                        <input class="form-control" type="text" value="" name="NameAmulet6" id="NameAmulet6" placeholder="ชื่อพระเครื่อง"/><br>
                        <input class="form-control" type="text" value="" name="GenAmulet6" id="GenAmulet6" placeholder="ชื่อรุ่น/ปี"/><br>

                        <h3>ชิ้นที่7</h3>
                        <input type="file" value="" name="ImgAmulet7" id="ImgAmulet7" /><br>
                        <input class="form-control" type="text" value="" name="NameAmulet7" id="NameAmulet7" placeholder="ชื่อพระเครื่อง"/><br>
                        <input class="form-control" type="text" value="" name="GenAmulet7" id="GenAmulet7" placeholder="ชื่อรุ่น/ปี"/><br>

                        <h3>ชิ้นที่8</h3>   
                        <input type="file" value="" name="ImgAmulet8" id="ImgAmulet8" /><br>
                        <input class="form-control" type="text" value="" name="NameAmulet8" id="NameAmulet8" placeholder="ชื่อพระเครื่อง"/><br>
                        <input class="form-control" type="text" value="" name="GenAmulet8" id="GenAmulet8" placeholder="ชื่อรุ่น/ปี"/><br>

                        <h3>ชิ้นที่9</h3>
                        <input type="file" value="" name="ImgAmulet9" id="ImgAmulet9" /><br>
                        <input class="form-control" type="text" value="" name="NameAmulet9" id="NameAmulet9" placeholder="ชื่อพระเครื่อง"/><br>
                        <input class="form-control" type="text" value="" name="GenAmulet9" id="GenAmulet9" placeholder="ชื่อรุ่น/ปี"/><br>

                        <h3>ชิ้นที่10</h3>
                        <input type="file" value="" name="ImgAmulet10" id="ImgAmulet10" /><br>
                        <input class="form-control" type="text" value="" name="NameAmulet10" id="NameAmulet9" placeholder="ชื่อพระเครื่อง"/><br>
                        <input class="form-control" type="text" value="" name="GenAmulet10" id="GenAmulet10" placeholder="ชื่อรุ่น/ปี"/><br/>
                       
            </div>
                        <div class="col-sm-4"></div>
                    </div>
        
        
        

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
</body>
</html>
