<?php
include 'config.php';

	$Str_file1 = explode(".",$_FILES['ImgAmulet1']['name']);
    $dateimage1 = substr(date("Ymdhisa"),0,14);
    $newname1 = $dateimage1.".".$Str_file1['1'];

    $Str_file2 = explode(".",$_FILES['ImgAmulet2']['name']);
    $dateimage2 = substr(date("Ymdhisa"),0,14);
    $newname2 = $dateimage2.".".$Str_file2['1'];

    $Str_file3 = explode(".",$_FILES['ImgAmulet3']['name']);
    $dateimage3 = substr(date("Ymdhisa"),0,14);
    $newname3 = $dateimage3.".".$Str_file3['1'];

    $Str_file4 = explode(".",$_FILES['ImgAmulet4']['name']);
    $dateimage4 = substr(date("Ymdhisa"),0,14);
    $newname4 = $dateimage4.".".$Str_file4['1'];

    $Str_file5 = explode(".",$_FILES['ImgAmulet5']['name']);
    $dateimage5 = substr(date("Ymdhisa"),0,14);
    $newname5 = $dateimage5.".".$Str_file5['1'];

    $Str_file6 = explode(".",$_FILES['ImgAmulet6']['name']);
    $dateimage6 = substr(date("Ymdhisa"),0,14);
    $newname6 = $dateimage6.".".$Str_file6['1'];

    $Str_file7 = explode(".",$_FILES['ImgAmulet7']['name']);
    $dateimage7 = substr(date("Ymdhisa"),0,14);
    $newname7 = $dateimage7.".".$Str_file7['1'];

    $Str_file8 = explode(".",$_FILES['ImgAmulet8']['name']);
    $dateimage8 = substr(date("Ymdhisa"),0,14);
    $newname8 = $dateimage8.".".$Str_file8['1'];

    $Str_file9 = explode(".",$_FILES['ImgAmulet9']['name']);
    $dateimage9 = substr(date("Ymdhisa"),0,14);
    $newname9 = $dateimage9.".".$Str_file9['1'];

    $Str_file10 = explode(".",$_FILES['ImgAmulet10']['name']);
    $dateimage10 = substr(date("Ymdhisa"),0,14);
    $newname10 = $dateimage10.".".$Str_file10['1'];

    $date = substr(date("Y-m-d h-i-sa"),0,19);

    $target_dir1 = "C:\AppServ\www\AmuletMarket\Images\ImagesAmulet\amuletshop\amulet1/";
    $target_dir2 = "C:\AppServ\www\AmuletMarket\Images\ImagesAmulet\amuletshop\amulet2/";
    $target_dir3 = "C:\AppServ\www\AmuletMarket\Images\ImagesAmulet\amuletshop\amulet3/";
    $target_dir4 = "C:\AppServ\www\AmuletMarket\Images\ImagesAmulet\amuletshop\amulet4/";
    $target_dir5 = "C:\AppServ\www\AmuletMarket\Images\ImagesAmulet\amuletshop\amulet5/";
    $target_dir6 = "C:\AppServ\www\AmuletMarket\Images\ImagesAmulet\amuletshop\amulet6/";
    $target_dir7 = "C:\AppServ\www\AmuletMarket\Images\ImagesAmulet\amuletshop\amulet7/";
    $target_dir8 = "C:\AppServ\www\AmuletMarket\Images\ImagesAmulet\amuletshop\amulet8/";
    $target_dir9 = "C:\AppServ\www\AmuletMarket\Images\ImagesAmulet\amuletshop\amulet9/";
    $target_dir10 = "C:\AppServ\www\AmuletMarket\Images\ImagesAmulet\amuletshop\amulet10/"; 
    
    $target_file1 = $target_dir1 . basename($_FILES["ImgAmulet1"]["name"]);
    $target_file2 = $target_dir2 . basename($_FILES["ImgAmulet2"]["name"]);
    $target_file3 = $target_dir3 . basename($_FILES["ImgAmulet3"]["name"]);
    $target_file4 = $target_dir4 . basename($_FILES["ImgAmulet4"]["name"]);
    $target_file5 = $target_dir5 . basename($_FILES["ImgAmulet5"]["name"]);
    $target_file6 = $target_dir6 . basename($_FILES["ImgAmulet6"]["name"]);
    $target_file7 = $target_dir7 . basename($_FILES["ImgAmulet7"]["name"]);
    $target_file8 = $target_dir8 . basename($_FILES["ImgAmulet8"]["name"]);
    $target_file9 = $target_dir9 . basename($_FILES["ImgAmulet9"]["name"]);
    $target_file10 = $target_dir10 . basename($_FILES["ImgAmulet10"]["name"]);       

    $uploadOk = 1;

    $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
    $imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
    $imageFileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);
    $imageFileType4 = pathinfo($target_file4,PATHINFO_EXTENSION);
    $imageFileType5 = pathinfo($target_file5,PATHINFO_EXTENSION);
    $imageFileType6 = pathinfo($target_file6,PATHINFO_EXTENSION);
    $imageFileType7 = pathinfo($target_file7,PATHINFO_EXTENSION);
    $imageFileType8 = pathinfo($target_file8,PATHINFO_EXTENSION);
    $imageFileType9 = pathinfo($target_file9,PATHINFO_EXTENSION);
    $imageFileType10 = pathinfo($target_file10,PATHINFO_EXTENSION);

    $check1 = getimagesize($_FILES["ImgAmulet1"]["tmp_name"]);
         if($check1 !== false) {
             echo "File is an image - " . $check1["mime"] . ".";
             $uploadOk = 1;
         } 
         else {
             echo "File is not an image.";
             $uploadOk = 0;
         }

    $check2 = getimagesize($_FILES["ImgAmulet2"]["tmp_name"]);
         if($check2 !== false) {
             echo "File is an image - " . $check2["mime"] . ".";
             $uploadOk = 1;
         } 
         else {
             echo "File is not an image.";
             $uploadOk = 0;
         }     

    $check3 = getimagesize($_FILES["ImgAmulet3"]["tmp_name"]);
         if($check3 !== false) {
             echo "File is an image - " . $check3["mime"] . ".";
             $uploadOk = 1;
         } 
         else {
             echo "File is not an image.";
             $uploadOk = 0;
         }       

    $check4 = getimagesize($_FILES["ImgAmulet4"]["tmp_name"]);
         if($check4 !== false) {
             echo "File is an image - " . $check4["mime"] . ".";
             $uploadOk = 1;
         } 
         else {
             echo "File is not an image.";
             $uploadOk = 0;
         }

    $check5 = getimagesize($_FILES["ImgAmulet5"]["tmp_name"]);
         if($check5 !== false) {
             echo "File is an image - " . $check5["mime"] . ".";
             $uploadOk = 1;
         } 
         else {
             echo "File is not an image.";
             $uploadOk = 0;
         }

    $check6 = getimagesize($_FILES["ImgAmulet6"]["tmp_name"]);
         if($check6 !== false) {
             echo "File is an image - " . $check6["mime"] . ".";
             $uploadOk = 1;
         } 
         else {
             echo "File is not an image.";
             $uploadOk = 0;
         }

    $check7 = getimagesize($_FILES["ImgAmulet7"]["tmp_name"]);
         if($check7 !== false) {
             echo "File is an image - " . $check7["mime"] . ".";
             $uploadOk = 1;
         } 
         else {
             echo "File is not an image.";
             $uploadOk = 0;
         }  

    $check8 = getimagesize($_FILES["ImgAmulet8"]["tmp_name"]);
         if($check8 !== false) {
             echo "File is an image - " . $check8["mime"] . ".";
             $uploadOk = 1;
         } 
         else {
             echo "File is not an image.";
             $uploadOk = 0;
         }

    $check9 = getimagesize($_FILES["ImgAmulet9"]["tmp_name"]);
         if($check9 !== false) {
             echo "File is an image - " . $check9["mime"] . ".";
             $uploadOk = 1;
         } 
         else {
             echo "File is not an image.";
             $uploadOk = 0;
         }

    $check10 = getimagesize($_FILES["ImgAmulet10"]["tmp_name"]);
         if($check10 !== false) {
             echo "File is an image - " . $check10["mime"] . ".";
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
             $Str_file = explode(".",$_FILES['ImgAmulet1']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["ImgAmulet1"]["tmp_name"], $target_dir1. basename($newname))) {

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
             $Str_file = explode(".",$_FILES['ImgAmulet2']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["ImgAmulet2"]["tmp_name"], $target_dir2. basename($newname))) {

         }
         else {
             echo "Sorry, there was an error uploading your file.";
         }     


    if (file_exists($target_file3)) {
             echo "Sorry, file already exists.";
             $uploadOk = 0;
         }
         if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
             && $imageFileType3 != "gif" ) {
             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
             $uploadOk = 0;
         }
         if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
         } 
         else {
             $Str_file = explode(".",$_FILES['ImgAmulet3']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["ImgAmulet3"]["tmp_name"], $target_dir3. basename($newname))) {

         }
         else {
             echo "Sorry, there was an error uploading your file.";
         } 


    if (file_exists($target_file4)) {
             echo "Sorry, file already exists.";
             $uploadOk = 0;
         }
         if($imageFileType4 != "jpg" && $imageFileType4 != "png" && $imageFileType4 != "jpeg"
             && $imageFileType4 != "gif" ) {
             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
             $uploadOk = 0;
         }
         if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
         } 
         else {
             $Str_file = explode(".",$_FILES['ImgAmulet4']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["ImgAmulet4"]["tmp_name"], $target_dir4. basename($newname))) {

         }
         else {
             echo "Sorry, there was an error uploading your file.";
         }

    if (file_exists($target_file5)) {
             echo "Sorry, file already exists.";
             $uploadOk = 0;
         }
         if($imageFileType5 != "jpg" && $imageFileType5 != "png" && $imageFileType5 != "jpeg"
             && $imageFileType5 != "gif" ) {
             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
             $uploadOk = 0;
         }
         if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
         } 
         else {
             $Str_file = explode(".",$_FILES['ImgAmulet5']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["ImgAmulet5"]["tmp_name"], $target_dir5. basename($newname))) {

         }
         else {
             echo "Sorry, there was an error uploading your file.";
         } 


    if (file_exists($target_file6)) {
             echo "Sorry, file already exists.";
             $uploadOk = 0;
         }
         if($imageFileType6 != "jpg" && $imageFileType6 != "png" && $imageFileType6 != "jpeg"
             && $imageFileType6 != "gif" ) {
             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
             $uploadOk = 0;
         }
         if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
         } 
         else {
             $Str_file = explode(".",$_FILES['ImgAmulet6']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["ImgAmulet6"]["tmp_name"], $target_dir6. basename($newname))) {

         }
         else {
             echo "Sorry, there was an error uploading your file.";
         }

    if (file_exists($target_file7)) {
             echo "Sorry, file already exists.";
             $uploadOk = 0;
         }
         if($imageFileType7 != "jpg" && $imageFileType7 != "png" && $imageFileType7 != "jpeg"
             && $imageFileType7 != "gif" ) {
             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
             $uploadOk = 0;
         }
         if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
         } 
         else {
             $Str_file = explode(".",$_FILES['ImgAmulet7']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["ImgAmulet7"]["tmp_name"], $target_dir7. basename($newname))) {

         }
         else {
             echo "Sorry, there was an error uploading your file.";
         }

    if (file_exists($target_file8)) {
             echo "Sorry, file already exists.";
             $uploadOk = 0;
         }
         if($imageFileType8 != "jpg" && $imageFileType8 != "png" && $imageFileType8 != "jpeg"
             && $imageFileType8 != "gif" ) {
             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
             $uploadOk = 0;
         }
         if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
         } 
         else {
             $Str_file = explode(".",$_FILES['ImgAmulet8']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["ImgAmulet8"]["tmp_name"], $target_dir8. basename($newname))) {

         }
         else {
             echo "Sorry, there was an error uploading your file.";
         } 


    if (file_exists($target_file9)) {
             echo "Sorry, file already exists.";
             $uploadOk = 0;
         }
         if($imageFileType9 != "jpg" && $imageFileType9 != "png" && $imageFileType9 != "jpeg"
             && $imageFileType9 != "gif" ) {
             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
             $uploadOk = 0;
         }
         if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
         } 
         else {
             $Str_file = explode(".",$_FILES['ImgAmulet9']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["ImgAmulet9"]["tmp_name"], $target_dir9. basename($newname))) {

         }
         else {
             echo "Sorry, there was an error uploading your file.";
         }

    if (file_exists($target_file10)) {
             echo "Sorry, file already exists.";
             $uploadOk = 0;
         }
         if($imageFileType10 != "jpg" && $imageFileType10 != "png" && $imageFileType10 != "jpeg"
             && $imageFileType10 != "gif" ) {
             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
             $uploadOk = 0;
         }
         if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
         } 
         else {
             $Str_file = explode(".",$_FILES['ImgAmulet10']['name']);
             $dateimage = substr(date("Ymdhisa"),0,14);
             $newname = $dateimage.".".$Str_file['1'];
         }
             if (copy($_FILES["ImgAmulet10"]["tmp_name"], $target_dir10. basename($newname))) {

         }
         else {
             echo "Sorry, there was an error uploading your file.";
         }

$strSQL = "UPDATE amulettoshop SET NameShop = '".trim($_POST['NameShop'])."'
,ImgAmulet1= '".trim($newname)."'
,NameAmulet1 = '".trim($_POST['NameAmulet1'])."'
,GenAmulet1 = '".trim($_POST['GenAmulet1'])."'
,ImgAmulet2 = '".trim($newname)."'
,NameAmulet2 = '".trim($_POST['NameAmulet2'])."'
,GenAmulet2 = '".trim($_POST['GenAmulet2'])."'
,ImgAmulet3 = '".trim($newname)."'
,NameAmulet3 = '".trim($_POST['NameAmulet3'])."'
,GenAmulet3 = '".trim($_POST['GenAmulet3'])."'
,ImgAmulet4 = '".trim($newname)."'
,NameAmulet4 = '".trim($_POST['NameAmulet4'])."'
,GenAmulet4 = '".trim($_POST['GenAmulet4'])."'
,ImgAmulet5 = '".trim($newname)."'
,NameAmulet5 = '".trim($_POST['NameAmulet5'])."'
,GenAmulet5 = '".trim($_POST['GenAmulet5'])."'
,ImgAmulet6 = '".trim($newname)."'
,NameAmulet6 = '".trim($_POST['NameAmulet6'])."'
,GenAmulet6 = '".trim($_POST['GenAmulet6'])."'
,ImgAmulet7 = '".trim($newname)."'
,NameAmulet7 = '".trim($_POST['NameAmulet7'])."'
,GenAmulet7 = '".trim($_POST['GenAmulet7'])."'
,ImgAmulet8 = '".trim($newname)."'
,NameAmulet8 = '".trim($_POST['NameAmulet8'])."'
,GenAmulet8 = '".trim($_POST['GenAmulet8'])."'
,ImgAmulet9 = '".trim($newname)."'
,NameAmulet9 = '".trim($_POST['NameAmulet9'])."'
,GenAmulet9 = '".trim($_POST['GenAmulet9'])."'
,ImgAmulet10 = '".trim($newname)."'
,NameAmulet10 = '".trim($_POST['NameAmulet10'])."'
,GenAmulet10 = '".trim($_POST['GenAmulet10'])."'
,pd_date = '".trim($date)."'
WHERE ID_amulet = '".trim($_POST['idA'])."' ";
$objQuery = mysql_query($strSQL);

if($objQuery){
    echo "<script>alert('Save Completed!');window.location.href='admin_page.php';</script>";
}
else{
    echo mysql_error();
}


mysql_close();
                      

?>