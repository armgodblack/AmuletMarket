<?php
include 'config.php';

set_time_limit(0);
header('Content-Type: text/html; charset=utf-8');
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="ReportMarket.xls"');#กำหนดชื่อไฟล์
echo '<html xmlns:o="urn:schemas-microsoft-com:office:office"xmlns:x="urn:schemas-microsoft-com:office:excel"xmlns="http://www.w3.org/TR/REC-html40">';

//ทำการดึงข้อมูลจาก Database
//Connect DB
$mysqli = new mysqli('localhost','root','1234','amuletmarket');
if ($mysqli->connect_errno) {
    die( "Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
 
$query = " SELECT * FROM market ";
$res = $mysqli->query($query);

echo "<td><h1>ตารางแสดงตลาดพระเครื่องทั้งหมด</h1> </td>";
echo '<table style="width:100%" x:str border="1">';
echo '  <tr>
            <td>รหัส</td>
            <td>ชื่อตลาดพระ</td>
            <td>ที่อยู่</td>
            <td>เขต/อำเภอ</td>
            <td>แขวง/ตำบล</td>
            <td>ไปรษณีย์</td>
            <td>จังหวัด</td>
            <td>เบอร์โทรร้าน</td>
            <td>เบอร์โทรเจ้าของร้าน</td>
            <td>เวลาทำการ</td>
        </tr>';
while($row = $res->fetch_array()){
     
    echo '<tr>
                <td>'.$row['id_amuletmarket'].'</td>
                <td>'.$row['Name_Market'].'</td>
                <td>'.$row['Address'].'</td>
                <td>'.$row['Zone'].'</td>
                <td>'.$row['Canton'].'</td>
                <td>'.$row['Zipcode'].'</td>
                <td>'.$row['Province'].'</td>
                <td>'.$row['TelOffice'].'</td>
                <td>'.$row['TelOwner'].'</td>
                <td>'.$row['Time'].'</td>
        </tr>';
}
echo '</table>';


?>