<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Success</title>
    <link rel="stylesheet" href="style.css"> <!-- เชื่อมไฟล์ CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    // เปิดการแสดงผลข้อผิดพลาดจาก PHP
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // เชื่อมต่อฐานข้อมูล
    require 'conn.php';

    // รับข้อมูลจากฟอร์ม
    $sname = $_POST['sname'];
    $slastname = $_POST['slastname'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];

    // ตรวจสอบว่ามีการส่งข้อมูลมาหรือไม่
    if (empty($sname) || empty($slastname) || empty($address) || empty($telephone)) {
        die("Error: Missing required information.");
    }

    // คำสั่ง SQL สำหรับการเพิ่มข้อมูล
    $sql_insert = "INSERT INTO studentbio (sname, slastname, address, telephone) 
                   VALUES ('$sname', '$slastname', '$address', '$telephone')";

    // รันคำสั่ง SQL
    if ($conn->query($sql_insert) === TRUE) {
        echo "<h1>Insert Success</h1>";
        echo "<p>ข้อมูลได้ถูกเพิ่มเรียบร้อยแล้ว</p>";
        header("refresh: 2; url=mainmenu.php"); // ส่งกลับไปยังหน้า mainmenu.php หลังจาก 2 วินาที
    } else {
        echo "<h1>Error</h1>";
        echo "<p>เกิดข้อผิดพลาด: " . $conn->error . "</p>";
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    $conn->close();
    ?>
</div>

</body>
</html>
