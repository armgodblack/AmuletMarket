<?php
include 'config.php';

 if(isset($_POST["submit"])) {

     $sql="select * from amulet where Name_Owner = '".trim($_POST['txtNameOwner'])."' ";
     $objQuery=mysql_query($sql);
     $objResult=mysql_fetch_array($objQuery);

     $Str_file = explode(".",$_FILES['FrontPicture']['name']);
     $dateimage = substr(date("Ymdhisa"),0,14);
     $newname = $dateimage.".".$Str_file['1'];
    
     $date = substr(date("Y-m-d h-i-sa"),0,19);


     if($objResult){
         echo "<script>alert('ชื่อเจ้าของมีอยู่ในระบบแล้ว');</script>";

         $txtNameOwner=$_POST['txtNameOwner'];
         $txtNameLP=$_POST['txtNameLP'];
         $txtTypeAmulet=$_POST['txtTypeAmulet'];
         $txtgeneration=$_POST['txtgeneration'];
         $txtyear=$_POST['$txtyear'];
         $txttemple=$_POST['$txttemple'];
         $txtprovince=$_POST['$txtprovince'];
         $FrontPicture=$_POST['$FrontPicture'];
         $BackPicture=$_POST['$BackPicture'];
    }

     else if (trim($_POST["txtNameLP"])=="") {
      echo "<script>alert('กรุณากรอกชื่อพระเครื่อง');</script>";
     }
     else if (trim($_POST["txtgeneration"])=="") {
      echo "<script>alert('กรุณากรอกรุ่นระเอียดพระเครื่อง');</script>";
     }
     else{

          $sql = "INSERT INTO amulet (`Name_Owner`,`NameLP`,`TypeAmulet`,`Generation`,`YearAmulet`,`Temple`,`Province`,`FrontPicture`,`BackPicture`,`pd_date`)
           Values ('$txtNameOwner','$txtNameLP','$txtTypeAmulet','$txtgeneration','$txtyear','$txttemple','$txtprovince','$newname','$newname','$date');";

     
     
      echo "<script>alert('Register successfully sent');</script>";

  }

    

    

     if(mysql_query($sql)){

              echo "<script>window.location.replace('addamulet.php');</script>";
             

         $target_dir = "C:\AppServ\www\AmuletMarket\Images\ImagesAmulet\imgfont/";
         $target_dir2 = "C:\AppServ\www\AmuletMarket\Images\ImagesAmulet\imgback/";
         $target_file = $target_dir . basename($_FILES["FrontPicture"]["name"]);
         $target_file2 = $target_dir2 . basename($_FILES["BackPicture"]["name"]);
         $uploadOk = 1;
         $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
         $imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);
         // Check if image file is a actual image or fake image

         $check = getimagesize($_FILES["FrontPicture"]["tmp_name"]);
         if($check !== false) {
             echo "File is an image - " . $check["mime"] . ".";
             $uploadOk = 1;
         } 
         else {
             echo "File is not an image.";
             $uploadOk = 0;
         }


         $check2 = getimagesize($_FILES["BackPicture"]["tmp_name"]);
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
             $Str_file = explode(".",$_FILES['FrontPicture']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["FrontPicture"]["tmp_name"], $target_dir. basename($newname))) {

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
             $Str_file = explode(".",$_FILES['BackPicture']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["BackPicture"]["tmp_name"], $target_dir2. basename($newname))) {

         }
         else {
             echo "Sorry, there was an error uploading your file.";
         }

    
 }
 else{
     echo mysql_error();
 }


?>
