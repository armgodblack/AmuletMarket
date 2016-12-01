<?php
include 'config.php';

$sql = "INSERT INTO amulet  (`Name_Owner`,`NameAmulet`,`TypeAmulet`,`DetailAmulet`,`FrontPicture`,`BackPicture`)
        Values ('$txtNameOwner','$txtNameAmulet','$txtTypeAmulet','$txtamuletdetail','$FrontPicture','$BackPicture');";


if(mysql_query($sql)){header("location:addamulet.php");

$target_dir = "ImagesAmulet/";
$target_file = $target_dir . basename($_FILES["FrontPicture"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["FrontPicture"]["tmp_name"]);
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
    if (copy($_FILES["FrontPicture"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["FrontPicture"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
else{echo mysql_error();}
?>

