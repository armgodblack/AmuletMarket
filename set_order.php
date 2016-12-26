<?php

include('config.php');

	$sql = "SELECT * FROM amulet LEFT JOIN typeamulet ON amulet.TypeAmulet = typeamulet.Id_Type;";
	$db_query=mysql_query($sql);
    $path = "Images/ImagesAmulet/imgfont/";

$ID_Amulet = $_POST['ID_Amulet'];

$list = explode(',' , $ID_Amulet);
$i = 1 ;
while($objResult = mysql_fetch_array($db_query)){
	try {
	    $sql  = 'UPDATE amulet SET ID_Amulet = :ID_Amulet WHERE NameLP = :NameLP' ;
		$query = $pdo->prepare($sql);
		$query->bindParam(':ID_Amulet', $i, PDO::PARAM_INT);
		$query->bindParam(':NameLP', $NameLP, PDO::PARAM_INT);
		$query->execute();
	} catch (PDOException $e) {
		echo 'PDOException : '.  $e->getMessage();
	}
	$i++ ;
}
?>