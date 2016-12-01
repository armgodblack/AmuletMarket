<?php
include 'config.php';

if(isset($_POST['submit'])){
    $sql = "select * from addshop where Name_Shop = '".trim($_POST['Name_Shop1'])."' ";
    $objQuery = mysql_query($sql);
    $objResult = mysql_fetch_array($objQuery);

    
        
if($objResult){
     echo "<script>alert('Sorry Not Save Successfully');</script>";
      
$Name_Shop1=$_POST['Name_Shop1'] ;
$Name_Owner=$_POST['Name_Owner'];
$Name_Amulet=$_POST['Name_Amulet'];
$Phone=$_POST['Phone'];
$Facebook=$_POST['Facebook'];
$Line1=$_POST=$_POST['Line1'];
$Detail_Shop=$_POST['Detail_Shop'];
$Detail_Amulet=$_POST['Detail_Amulet'];
$Type_Amulet=$_POST['Type_Amulet'];
$Picture_Shop=$_POST['Picture_Shop_name'];
}

else if(trim($_POST["Name_Shop1"]) == ""){
    echo "<script>alert('Please input Name Shop.');</script>";
}
else if(trim($_POST["Name_Owner"]) == ""){
    echo "<script>alert('Please input Name Owner.');</script>";
}
else if(trim($_POST["Name_Amulet"]) == ""){
    echo "<script>alert('Please input Name Amulet.');</script>";
}
else if(trim($_POST["Phone"]) == ""){
    echo "<script>alert('Please input Phone.');</script>";
}
else if(trim($_POST["Facebook"]) == ""){
    echo "<script>alert('Please input Facebook.');</script>";
}
else if(trim($_POST["Line"]) == ""){
    echo "<script>alert('Please input Line.');</script>";
}
else if(trim($_POST["Detail_Shop"]) == ""){
    echo "<script>alert('Please input Detail Shop.');</script>";
}
else if(trim($_POST["Detail_Amulet"]) == ""){
    echo "<script>alert('Please input Detail Amulet.');</script>";
}
else if(trim($_POST["Type_Amulet"]) == ""){
    echo "<script>alert('Please input Type Amulet.');</script>";
}
else {
    $sql = "INSERT INTO addShop (`Name_Shop`,`Name_Owner`,`Name_Amulet`,`Phone`,`Facebook`,`Line`,`Detail_Shop`,`Detail_Amulet`,`Type_Amulet`,`Picture_Shop`)
        Values ('$Name_Shop1','$Name_Owner','$Name_Amulet','$Phone','$Facebook','$Line1','$Detail_Shop','$Detail_Amulet','$Type_Amulet','$Picture_Shop_name');";
    $objQuery = mysql_query($sql);
    echo "<script>alert('Save Successfully.');</script>";
}

}




mysql_close();
?>


<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css/style.css">

</head>
<body >

    <form action="saveImage.php" method="post" enctype="multipart/form-data">
	<form class="form-addShop">
		<div class="form-addShop">
                   
                    <input type="text" value="" name="Name_Shop1" id="Name_Shop" placeholder="name_shop" autofocus/><br>
                        <input type="text" value="" name="Name_Owner" id="Name_Owner" placeholder="name_owner"/><br>
                        <input type="text" value="" name="Name_Amulet" id="Name_Amulet" placeholder="name_amulet"/><br>
                        <input type="text" value="" name="Phone" id="Phone" placeholder="phone"/><br>
                        <input type="text" value="" name="Facebook" id="Facebook" placeholder="facebook"/><br>
                        <input type="text" value="" name="Line1" id="Line1" placeholder="line"/><br>
                        <textarea class="textareadetail" maxlength="200" value="" name="Detail_Shop" id="Detail_Shop" placeholder="detail_shop"></textarea><br>
                        <textarea class="textareadetail" maxlength="200" value="" name="Detail_Amulet" id="Detail_Amulet" placeholder="detail_amulet"></textarea><br>
                        <input type="text" value="" name="Type_Amulet" id="Type_Amulet" placeholder="type_amulet"/><br>
                        <input type="file" value="" name="Picture_Shop" id="Picture_Shop" placeeholder="pictureshop"/><br>
                        <button type="submit" name="submit">Add</button>
			</div>			
	</form>
        
        
</body>
</html>
