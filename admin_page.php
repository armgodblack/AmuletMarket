<?php
 include 'config.php';
?>

<html>
<head>
        <title>Administrator</title>
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
    
    
    

<form> 
    <div class="col-md-2"></div>
    <div class="col-md-9 widthcol9">
            <table height="70px">
                <tr>
                    <td>
                        <div>
                        <input class="form-control textsize" name="search" type="text" placeholder="Search"/>
                        </div>
                    </td>
                    
                </tr>
            </table>
        </div>
    <br><br><br><br>
        
<div class="col-md-3"></div>

<!--<div class="col-md-9">-->
    <div class="col-md-4">
        
 <?php
    include 'config.php';

    $sql = "SELECT * FROM addshop INNER JOIN market ON addshop.MarketAmuletShop= market.id_amuletmarket";
    $result = mysql_query($sql);
    $path = "Images/ImagesLogo/";

echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"1\"><tr>";//Add
$intRows = 0; //Add
    
 while($row = mysql_fetch_array($result))
    {
$intRows++; //Add
//echo "<td>"; //Add
?>
<div class="col-md-3"></div>

<div class="col-md-4">
        <table width="0" border="0" cellspacing="0" cellpadding="0">
        <div class="panel panel-info" name="idA" id=" <?php echo $row["ID_Shop"];?>">
<!--            <tr> -->
            
            <div align='right'><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='editShop.php?ID_Shop=<?php echo $row["ID_Shop"];?>';}" style="text-decoration:none">
            <button type="button" class="btn btn-default btn btn-info">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </button>
            </a></div>

            <a href="JavaScript:if(confirm('ยืนยันที่จะดูหน้าร้าน?')==true){window.location='showshop.php?ID_Shop=<?php echo $row["ID_Shop"];?>';}" style="text-decoration:none">
            <div class="" name="idA" id=" <?php echo $row["ID_Shop"];?>">    
<!--<div class="panel panel-info" name="idA" id=" <?php // echo $row["ID_Shop"];?>">-->

                &nbsp&nbsp&nbsp&nbsp <img src="<? echo $path.$row['Img_Logo']; ?>" width="100" height="100" border="3"/>&nbsp&nbsp&nbsp&nbsp

                <font size="4"><?php echo $row["Name_Shop"];?><br>
                &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row["Name_Market"];?><br>

            </div></a>
            
            <a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='deleteShop.php?ID_Shop=<?php echo $row["ID_Shop"];?>';}" style="text-decoration:none">
            <div align='right'><button type="button" class="btn btn-default btn btn-danger">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
            </button></div>
            </a>
        
        </div>
                               
<!--            </tr>  -->
                   
        </table>
<!--</div>-->

</div>

<div class="col-md-1"></div>  
        <?php
//        echo "</td>";
        if(($intRows)%2==0){
            echo "</tr>";
        }
        else{}



    }
    echo "</table>";



        ?>
     
<!--         <td align="center"><a href="JavaScript:if(confirm('ยืนยันที่จะดูหน้าร้าน?')==true){window.location='showshop.php?ID_Shop=<?php // echo $row["ID_Shop"];?>';}">
          <div class="panel panel-info" name="idA" id=" <?php // echo $row["ID_Shop"];?>">
       
         
                <img src="<? echo $path.$row['Img_Logo']; ?>" width="100" height="100" border="3"/>&nbsp&nbsp&nbsp&nbsp
                <font size="4"><strong>
                <td align="center"><?php // echo $row["Name_Shop"];?></td><br>
                <td align=""><?php // echo $row["Name_Market"];?></td>
                </a></td>

           
          </div>-->
       
<?php
//    }
?>

           
<!--         <div class="col-md-1"></div>
          
         <div class="col-md-4">-->

<!--         </div>-->
</div>
</form>
 
 

    <!-- test -->
</body>
</html>
