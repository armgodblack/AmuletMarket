<?php
 include 'config.php';

set_time_limit(0);
header('Content-Type: text/html; charset=utf-8');
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="ReportTopAmulet.xls"');#กำหนดชื่อไฟล์
echo '<html xmlns:o="urn:schemas-microsoft-com:office:office"xmlns:x="urn:schemas-microsoft-com:office:excel"xmlns="http://www.w3.org/TR/REC-html40">';
 
//ทำการดึงข้อมูลจาก Database
//Connect DB
$mysqli = new mysqli('localhost','root','1234','amuletmarket');
if ($mysqli->connect_errno) {
    die( "Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
 
$query = " SELECT * FROM amulet INNER JOIN typeamulet ON amulet.TypeAmulet= typeamulet.Id_Type";
$res = $mysqli->query($query);
$path = "Images/ImagesLogo/"; 
echo "<td><h1>ตารางแสดงรายการพระเครื่องยอดนิยม</h1> </td>";
echo '<table style="width:100%" x:str border="1">';
echo '  <tr>
            <td>รหัส</td>
            <td>เจ้าของพระ</td>
            <td>หลวงพ่อ/เกจิ</td>
            <td>เนื้อ/วัสดุ</td>
            <td>รุ่น</td>
            <td>ปี</td>
            <td>วัด</td>
            <td>จังหวัด</td>
            <td>Update ล่าสุด</td>
        </tr>';



while($row = $res->fetch_array()){
     
    echo '<tr>
                <td>'.$row['ID_Amulet'].'</td>
                <td>'.$row['Name_Owner'].'</td>
                <td>'.$row['NameLP'].'</td>
                <td>'.$row['Type_Name_Amulet'].'</td>
                <td>'.$row['Generation'].'</td>
                <td>'.$row['YearAmulet'].'</td>
                <td>'.$row['Temple'].'</td>
                <td>'.$row['Province'].'</td>
                <td>'.$row['pd_date'].'</td>
        </tr>';
}
echo '</table>';
?>
