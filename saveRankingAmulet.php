<?php

// including the config file
include('config.php');


// get the list of items id separated by cama (,)
$ID_Amulet = $_POST['ID_Amulet'];
// convert the string list to an array
$list = explode(',' , $ID_Amulet);
echo $ID_Amulet;
// $i = 1 ;
// foreach($list as $id) {
//     try {
//         $sql  = 'UPDATE items SET item_order = :item_order WHERE id = :id' ;
//         $query = mysql_query($sql);
//         $query->bindParam(':item_order', $i, PDO::PARAM_INT);
//         $query->bindParam(':id', $id, PDO::PARAM_INT);
//         $query->execute();
//     } catch (PDOException $e) {
//         echo 'PDOException : '.  $e->getMessage();
//     }
//     $i++ ;
// }
?>