<?php

// include('config.php');
// $pdo = connect();


// $list_order = $_POST['list_order'];

// $list = explode(',' , $list_order);
// $i = 1 ;
// foreach($list as $id) {
//     try {
//         $sql  = 'UPDATE items SET item_order = :item_order WHERE id = :id' ;
//         $query = $pdo->prepare($sql);
//         $query->bindParam(':item_order', $i, PDO::PARAM_INT);
//         $query->bindParam(':id', $id, PDO::PARAM_INT);
//         $query->execute();
//     } catch (PDOException $e) {
//         echo 'PDOException : '.  $e->getMessage();
//     }
//     $i++ ;
// }

include('config.php');

$strSQL = "UPDATE rankingamulet SET NameLP = '".trim($_POST['txtNameLP'])."'
,TypeAmulet= '".trim($_POST['txtTypeAmulet'])."'
,Generation = '".trim($_POST['txtgeneration'])."'
,YearAmulet = '".trim($_POST['txtyear'])."'
,Temple = '".trim($_POST['txttemple'])."'
,Province = '".trim($_POST['txtprovince'])."'
,Name_Owner = '".trim($_POST['txtNameOwner'])."'
,FrontPicture = '".trim($newname)."'
,BackPicture = '".trim($newname)."'
,pd_date = '".trim($date)."'
WHERE ID_Ranking = '".trim($_POST['idA'])."' ";
$objQuery = mysql_query($strSQL);


if($objQuery){
    echo "<script>alert('Save Completed!');window.location.href='top10amulet.php';</script>";
}
else{
    echo mysql_error();
}

?>