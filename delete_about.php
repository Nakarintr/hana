<!doctype html>
<html lang="en">
<head>
    <title>Delete Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<script type='text/javascript'>
    swal('Delete', 'ลบเรียบร้อยแล้ว', 'success');
</script>
<meta http-equiv='refresh' content='1;URL=insert_about.php'>
</body>
</html>

<?php
// เปิดการแสดงข้อผิดพลาด
error_reporting(E_ALL);
ini_set('display_errors', 1);

// เชื่อมต่อฐานข้อมูล
include("compu_about.php");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// ตรวจสอบว่ามีการส่งค่า Doctor_ID ผ่าน URL
if (isset($_GET['DoctorID']) && !empty($_GET['DoctorID'])) {
    $DoctorID = $_GET['DoctorID'];
    
    // ตรวจสอบว่า Doctor_ID นี้มีอยู่ในฐานข้อมูลหรือไม่
    $sql_check = "SELECT * FROM doctor WHERE Doctor_ID = '".$DoctorID."'";
    $result = mysqli_query($connect, $sql_check);
    
    if (mysqli_num_rows($result) > 0) {
        // ถ้าเจอ Doctor_ID ให้ลบข้อมูล
        $sql_delete = "DELETE FROM doctor WHERE Doctor_ID = '".$DoctorID."'";
        if (mysqli_query($connect, $sql_delete)) {
            echo "ลบข้อมูลสำเร็จ!";
        } else {
            echo "เกิดข้อผิดพลาดในการลบข้อมูล: " . mysqli_error($connect);
        }
    } else {
        echo "ไม่พบข้อมูล Doctor_ID ในฐานข้อมูล!";
    }
} else {
    echo "ไม่พบค่า DoctorID ที่ต้องการลบ!";
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($connect);
?>