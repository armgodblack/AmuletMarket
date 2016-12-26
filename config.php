<?php 

$host='localhost';
$accountname='root';
$pass='1234';
$dbname='AmuletMarket';
$con=mysql_connect($host,$accountname,$pass,$dbname);
if(!$con){echo"Server not found";}
$db=mysql_select_db($dbname);
if(!$db){echo"Database not found";}
mysql_query("SET NAMES UTF8");

?>