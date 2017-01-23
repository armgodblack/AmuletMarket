<?php
include 'config.php';

$Str_file1 = explode(".",$_FILES['Picture_Shop']['name']);
$dateimage1 = substr(date("Ymdhisa"),0,14);
$newname1 = $dateimage1.".".$Str_file1['1'];

$Str_file2 = explode(".",$_FILES['Img_Logo']['name']);
$dateimage2 = substr(date("Ymdhisa"),0,14);
$newname2 = $dateimage2.".".$Str_file2['1'];

$date = substr(date("Y-m-d h-i-sa"),0,19);

$target_dir1 = "C:\AppServ\www\AmuletMarket\Images\ImagesShop/";
$target_dir2 = "C:\AppServ\www\AmuletMarket\Images\ImagesLogo/";

$target_file1 = $target_dir1 . basename($_FILES["Img_Logo"]["name"]);
$target_file2 = $target_dir2 . basename($_FILES["Picture_Shop"]["name"]);

$uploadOk = 1;
$imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);


$check1 = getimagesize($_FILES["Img_Logo"]["tmp_name"]);
         if($check1 !== false) {
            echo "File is an image - " . $check1["mime"] . ".";
            $uploadOk = 1;
         } 
         else {
            echo "File is not an image.";
            $uploadOk = 0;
         }

$check2 = getimagesize($_FILES["Picture_Shop"]["tmp_name"]);
         if($check2 !== false) {
            echo "File is an image - " . $check2["mime"] . ".";
            $uploadOk = 1;
         } 
         else {
            echo "File is not an image.";
            $uploadOk = 0;
         }

if (file_exists($target_file1)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
            && $imageFileType1 != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
        } 
        else {
            $Str_file1 = explode(".",$_FILES['Picture_Shop']['name']);
            $dateimage1 = substr(date("Ymdhisa"),0,14);
            $newname1 = $dateimage1.".".$Str_file1['1'];
        }
            if (copy($_FILES["Picture_Shop"]["tmp_name"], $target_dir1. basename($newname1))) {

        }
        else {
             echo "Sorry, there was an error uploading your file.";
        }


if (file_exists($target_file2)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
            && $imageFileType2 != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
        } 
        else {
            $Str_file2 = explode(".",$_FILES['Img_Logo']['name']);
            $dateimage2 = substr(date("Ymdhisa"),0,14);
            $newname2 = $dateimage2.".".$Str_file2['1'];
        }
            if (copy($_FILES["Img_Logo"]["tmp_name"], $target_dir2. basename($newname2))) {

        }
        else {
             echo "Sorry, there was an error uploading your file.";
        }

$strSQL = "UPDATE addshop SET Name_Shop = '".trim($_POST['Name_Shop1'])."'
,Name_Owner= '".trim($_POST['Name_Owner'])."'
,MarketAmuletShop = '".trim($_POST['MarketAmuletShop'])."'
,Facebook = '".trim($_POST['Facebook'])."'
,Line = '".trim($_POST['Line1'])."'
,Detail_Shop = '".trim($_POST['Detail_Shop'])."'
,Picture_Shop = '".trim($newname1)."'
,Img_Logo = '".trim($newname2)."'
,pd_date = '".trim($date)."'
WHERE ID_Shop = '".trim($_POST['idA'])."' ";
$objQuery = mysql_query($strSQL);   

if($objQuery){
	echo "<script>alert('Save Completed!');window.location.href='admin_page.php';</script>";
}
else{
	echo mysql_error();
}


mysql_close();     

?>