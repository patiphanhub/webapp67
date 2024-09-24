<?php
// สร้างการเชื่อมต่อฐานข้อมูล
$conn = new mysqli('localhost', 'root', '', 'student');

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>