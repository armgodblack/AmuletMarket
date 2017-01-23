<?php
 include 'config.php';

set_time_limit(0);
header('Content-Type: text/html; charset=utf-8');
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="ReportShop.xls"');#กำหนดชื่อไฟล์
echo '<html xmlns:o="urn:schemas-microsoft-com:office:office"xmlns:x="urn:schemas-microsoft-com:office:excel"xmlns="http://www.w3.org/TR/REC-html40">';
 
//ทำการดึงข้อมูลจาก Database
//Connect DB
$mysqli = new mysqli('localhost','root','1234','amuletmarket');
if ($mysqli->connect_errno) {
    die( "Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
 
$query = " SELECT * FROM addshop INNER JOIN market ON addshop.MarketAmuletShop= market.id_amuletmarket";
$res = $mysqli->query($query);
$path = "Images/ImagesLogo/"; 
echo "<td><h1>รายงานแสดงข้อมูลร้านค้าทั้งหมดในระบบ</h1> </td>";
echo '<table style="width:100%" x:str border="1">';
echo '  <tr>
            <td>รหัส</td>
            <td>ชื่อร้าน</td>
            <td>เจ้าของร้าน</td>
            <td>ชมรม/ตลาดพระเครื่อง</td>
            <td>เบอร์โทร</td>
            <td>Facebook</td>
            <td>Line</td>
            <td>Update ล่าสุด</td>
        </tr>';



while($row = $res->fetch_array()){
     
    echo '<tr>
                <td>'.$row['ID_Shop'].'</td>
                <td>'.$row['Name_Shop'].'</td>
                <td>'.$row['Name_Owner'].'</td>
                <td>'.$row['Name_Market'].'</td>
                <td>'.$row['Phone'].'</td>
                <td>'.$row['Facebook'].'</td>
                <td>'.$row['Line'].'</td>
                <td>'.$row['pd_date'].'</td>
        </tr>';
}
echo '</table>';
?>
