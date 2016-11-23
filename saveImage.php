<?php
include 'config.php';

$sql = "INSERT INTO addShop (`Name_Shop`,`Name_Owner`,`Name_Amulet`,`Phone`,`Facebook`,`Line`,`Detail_Shop`,`Detail_Amulet`,`Type_Amulet`,`Picture_Shop`)
        Values ('$Name_Shop1','$Name_Owner','$Name_Amulet','$Phone','$Facebook','$Line1','$Detail_Shop','$Detail_Amulet','$Type_Amulet','$fileToUpload_name');";


if(mysql_query($sql)){ header("location:addShop.php");

$target_dir = "ImagesEnd/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false){
        echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
    }else {
        echo "File is not an image.";
        $upload = 0;
    }
}

if(file_exists($target_file)){
    echo "Sorry, file alredy exists.";
    $uploadOk = 0;
}

//if($_FILES["fileToUpload"]["size"] > 500000){
//    echo "Sorry, your file is too large.";
//    $upladOk = 0;
//}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if($upladOk == 0){
    echo "Sorry, your file was not uploaded.";
}else{
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
        echo "The file ". basename($_FILES["fileToUpload"]["name"]). "has been upladed.";
    }else{
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>

