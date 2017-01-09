<?php
include 'config.php';

$Str_file = explode(".",$_FILES['Picture_Shop']['name']);
$dateimage = substr(date("Ymdhisa"),0,14);
$newname = $dateimage.".".$Str_file['1'];

$Str_file = explode(".",$_FILES['Img_Logo']['name']);
$dateimage = substr(date("Ymdhisa"),0,14);
$newname = $dateimage.".".$Str_file['1'];

$date = substr(date("Y-m-d h-i-sa"),0,19);

$target_dir = "C:/AppServ/www/AmuletMarket/Images/top10shop/Logo/";
$target_dir2 = "C:/AppServ/www/AmuletMarket/Images/top10shop/FontShop/";
$target_file = $target_dir . basename($_FILES["Img_Logo"]["name"]);
$target_file2 = $target_dir2 . basename($_FILES["Picture_Shop"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);

 // Check if image file is a actual image or fake image

         $check = getimagesize($_FILES["Img_Logo"]["tmp_name"]);
         if($check !== false) {
             echo "File is an image - " . $check["mime"] . ".";
             $uploadOk = 1;
         } 
         else {
             echo "File is not an image.";
             $uploadOk = 0;
         }


         $check2 = getimagesize($_FILES["Picture_Shop"]["tmp_name"]);
         if($check !== false) {
             echo "File is an image - " . $check["mime"] . ".";
             $uploadOk = 1;
         } 
         else {
             echo "File is not an image.";
             $uploadOk = 0;
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
             $Str_file = explode(".",$_FILES['Img_Logo']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["Img_Logo"]["tmp_name"], $target_dir. basename($newname))) {

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
             $Str_file = explode(".",$_FILES['Picture_Shop']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["Picture_Shop"]["tmp_name"], $target_dir2. basename($newname))) {

         }
         else {
             echo "Sorry, there was an error uploading your file.";
         }




$strSQL = "UPDATE top10shop SET Name_Shop = '".trim($_POST['Name_Shop1'])."'
,Name_Owner= '".trim($_POST['Name_Owner'])."'
,MarketAmuletShop = '".trim($_POST['MarketAmuletShop'])."'
,Facebook = '".trim($_POST['Facebook'])."'
,Line = '".trim($_POST['Line1'])."'
,Detail_Shop = '".trim($_POST['Detail_Shop'])."'
,Picture_Shop = '".trim($newname)."'
,Img_Logo = '".trim($newname)."'
,pd_date = '".trim($date)."'
WHERE ID_Shop = '".trim($_POST['idA'])."' ";
$objQuery = mysql_query($strSQL);

if($objQuery){
	echo "<script>alert('Save Completed!');window.location.href='managetop10shop.php';</script>";
}
else{
	echo mysql_error();
}


mysql_close();







?>