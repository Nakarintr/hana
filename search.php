<?php
// ตรวจสอบว่ามีคำค้นหาถูกส่งมาหรือไม่
if (isset($_GET['treatment'])) {
    $query = $_GET['treatment'];

    // ป้องกันการโจมตีด้วย SQL Injection โดยการใช้ prepared statement
    $conn = new mysqli('localhost', 'username', 'password', 'database');

    // ตรวจสอบการเชื่อมต่อ
    if ($conn->connect_error) {
        die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
    }

    // ค้นหาข้อมูลจากฐานข้อมูล
    $stmt = $conn->prepare("SELECT * FROM treatment WHERE treatment_ID LIKE ?");
    $search = "%" . $query . "%";
    $stmt->bind_param("s", $search);
    $stmt->execute();
    $result = $stmt->get_result();

    // แสดงผลลัพธ์การค้นหา
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "รหัสการรักษา: " . $row['Treatment_ID'] . "<br>";
        }
    } else {
        echo "ไม่พบข้อมูลที่ตรงกับคำค้นหา";
    }

    // ปิดการเชื่อมต่อ
    $stmt->close();
    $conn->close();
}