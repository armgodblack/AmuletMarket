<?php
header("Content-type:application/json; charset=UTF-8");        
header("Cache-Control: no-store, no-cache, must-revalidate");       
header("Cache-Control: post-check=0, pre-check=0", false);  
// ส่วนติดต่อกับฐานข้อมูลtest
mysql_connect("localhost","root","1234") or die("Cannot connect the Server");     
mysql_select_db("amuletmarket") or die("Cannot select database");     
mysql_query("set character set utf8");   
?>

<?php
$sql=mysql_query("SELECT * FROM addshop WHERE 1 ORDER BY ID_Shop" ); 

$json = array();
if(mysql_num_rows($sql)){
	while($row=mysql_fetch_assoc($sql)){
		$json['Data'][]=$row;
	}
}


echo json_encode($json); 
mysql_close(); 





?>