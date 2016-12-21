<?php
include 'config.php';

if(isset($_POST["submit"])) {
    
    $sql = "select * from addshop where Name_Shop = '".trim($_POST['Name_Shop1'])."' ";
    $objQuery = mysql_query($sql);
    $objResult = mysql_fetch_array($objQuery);

    $Str_file = explode(".",$_FILES['Picture_Shop']['name']);
    $dateimage = substr(date("Ymdhisa"),0,14);
    $newname = $dateimage.".".$Str_file['1'];
    
    $date = substr(date("Y-m-d h-i-sa"),0,19);


if($objResult){
     echo "<script>alert('Sorry Not Save Successfully');</script>"; 
$Name_Shop1=$_POST['Name_Shop1'] ;
$Name_Owner=$_POST['Name_Owner'];
$MarketAmuletShop=$_POST['MarketAmuletShop'];
$Phone=$_POST['Phone'];
$Facebook=$_POST['Facebook'];
$Line1=$_POST=$_POST['Line1'];
$Detail_Shop=$_POST['Detail_Shop'];
$Picture_Shop=$_POST['Picture_Shop'];
$Img_Logo=$_POST['Img_Logo'];
}
else if(trim($_POST["Name_Shop1"]) == ""){
    echo "<script>alert('กรุณากรอกชื่อร้านพระเครื่อง.');</script>";
}else if(trim($_POST["Name_Owner"]) == ""){
    echo "<script>alert('กรุณากรอกชื่อเจ้าของร้าน.');</script>";
}else if(trim($_POST["MarketAmuletShop"]) == ""){
    echo "<script>alert('กรุณาเลือกตลาดพระเครื่อง.');</script>";
}else if(trim($_POST["Phone"]) == ""){
    echo "<script>alert('กรุณากรอกเบอร์โทรศัทพ์.');</script>";
}else if(trim($_POST["Facebook"]) == ""){
    echo "<script>alert('กรุณากรอกไอดี Facebook.');</script>";
}else if(trim($_POST["Line1"]) == ""){
    echo "<script>alert('กรุณากรอกไอดี Line.');</script>";
}else if(trim($_POST["Detail_Shop"]) == ""){
    echo "<script>alert('กรุณากรอกรายละเอียดร้านพระเครื่อง.');</script>";
}else{
    $sql = "INSERT INTO addshop (`Name_Shop`,`Name_Owner`,`MarketAmuletShop`,`Phone`,`Facebook`,`Line`,`Detail_Shop`,`Picture_Shop`,`Img_Logo`,`pd_date`)
        Values ('$Name_Shop1','$Name_Owner','$MarketAmuletShop','$Phone','$Facebook','$Line1','$Detail_Shop','$newname','$newname','$date');";  
echo "<script>alert('Save successfully.');</script>";
    
}
    
    if(mysql_query($sql)){

              echo "<script>window.location.replace('addShop.php');</script>";
             

         $target_dir = "C:\AppServ\www\AmuletMarket\Images\ImagesShop/";
         $target_dir2 = "C:\AppServ\www\AmuletMarket\Images\ImagesLogo/";
         $target_file = $target_dir . basename($_FILES["Picture_Shop"]["name"]);
         $target_file2 = $target_dir2 . basename($_FILES["Img_Logo"]["name"]);
         $uploadOk = 1;
         $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
         $imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);
         // Check if image file is a actual image or fake image

         $check = getimagesize($_FILES["Picture_Shop"]["tmp_name"]);
         if($check !== false) {
             echo "File is an image - " . $check["mime"] . ".";
             $uploadOk = 1;
         } 
         else {
             echo "File is not an image.";
             $uploadOk = 0;
         }


         $check2 = getimagesize($_FILES["Img_Logo"]["tmp_name"]);
         if($check !== false) {
             echo "File is an image - " . $check["mime"] . ".";
             $uploadOk = 1;
         } 
         else {
             echo "File is not an image.";
             $uploadOk = 0;
         }




 }  



         if (file_exists($target_file)) {
             echo "Sorry, file already exists.";
             $uploadOk = 0;
         }
         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
             && $imageFileType != "gif" ) {
             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
             $uploadOk = 0;
         }
         if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
         } 
         else {
             $Str_file = explode(".",$_FILES['Picture_Shop']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["Picture_Shop"]["tmp_name"], $target_dir. basename($newname))) {

         }
         else {
             echo "Sorry, there was an error uploading your file.";
         }


          if (file_exists($target_file2)) {
             echo "Sorry, file already exists.";
             $uploadOk = 0;
         }
         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
             && $imageFileType != "gif" ) {
             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
             $uploadOk = 0;
         }
         if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
         } 
         else {
             $Str_file = explode(".",$_FILES['Img_Logo']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["Img_Logo"]["tmp_name"], $target_dir2. basename($newname))) {

         }
         else {
             echo "Sorry, there was an error uploading your file.";
         }

   
 }
 
else{
    echo mysql_error();
}

?>

