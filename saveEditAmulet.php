<?php
include 'config.php';

$Str_file = explode(".",$_FILES['FrontPicture']['name']);
$dateimage = substr(date("Ymdhisa"),0,14);
$newname = $dateimage.".".$Str_file['1'];

$date = substr(date("Y-m-d h-i-sa"),0,19);

$target_dir = "C:\AppServ\www\AmuletMarket\Images\ImagesAmulet\imgfont/";
$target_dir2 = "C:\AppServ\www\AmuletMarket\Images\ImagesAmulet\imgback/";
$target_file = $target_dir . basename($_FILES["FrontPicture"]["name"]);
$target_file2 = $target_dir2 . basename($_FILES["BackPicture"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);

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




$strSQL = "UPDATE amulet SET NameLP = '".trim($_POST['txtNameLP'])."'
,TypeAmulet= '".trim($_POST['txtTypeAmulet'])."'
,Generation = '".trim($_POST['txtgeneration'])."'
,YearAmulet = '".trim($_POST['txtyear'])."'
,Temple = '".trim($_POST['txttemple'])."'
,Province = '".trim($_POST['txtprovince'])."'
,Name_Owner = '".trim($_POST['txtNameOwner'])."'
,FrontPicture = '".trim($newname)."'
,BackPicture = '".trim($newname)."'
,pd_date = '".trim($date)."'
WHERE ID_Amulet = '".trim($_POST['idA'])."' ";
$objQuery = mysql_query($strSQL);

if($objQuery){
	echo "<script>alert('Save Completed!');window.location.href='top10amulet.php';</script>";
}
else{
	echo mysql_error();
}


mysql_close();







?>