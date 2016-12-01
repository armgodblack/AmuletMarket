<?php
include 'config.php';


$sql = "INSERT INTO addshop (`Name_Shop`,`Name_Owner`,`Name_Amulet`,`Phone`,`Facebook`,`Line`,`Detail_Shop`,`Detail_Amulet`,`Type_Amulet`,`Picture_Shop`)
        Values ('$Name_Shop1','$Name_Owner','$Name_Amulet','$Phone','$Facebook','$Line1','$Detail_Shop','$Detail_Amulet','$Type_Amulet','$Picture_Shop_name');";


if(mysql_query($sql)){header("location:addShop.php");

$target_dir = "C:\AppServ\www\AmuletMarket\Images\Imageshop/";
$target_file = $target_dir . basename($_FILES["Picture_Shop"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["Picture_Shop"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
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
} else {
    if (copy($_FILES["Picture_Shop"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Picture_Shop"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
else{echo mysql_error();}
?>

