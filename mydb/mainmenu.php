<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Bio</title>
    <style>
        /* พื้นหลังไล่เฉดสีม่วงถึงดำ พร้อมอนิเมชั่น */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            height: 100vh;
            background: linear-gradient(180deg, rgba(106, 0, 173, 1), rgba(0, 0, 0, 1));
            background-size: 100% 200%;
            animation: fadeBackground 5s linear infinite;
        }

        @keyframes fadeBackground {
            0% {
                background-position: 0% 0%;
            }
            100% {
                background-position: 0% 100%;
            }
        }

        /* การตั้งค่าคอนเทนเนอร์ */
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* สีพื้นหลังของคอนเทนเนอร์เพื่อให้เห็นตารางชัดเจน */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* เงา */
            z-index: 1;
            position: relative;
        }

        /* สไตล์ของ h1 */
        h1 {
            color: #333;
        }

        /* การตั้งค่าตาราง */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff; /* เพิ่มพื้นหลังให้กับตาราง */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f8f8f8;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Student Bio</h1><br>

    <!-- สร้างตารางแสดงข้อมูลนักศึกษา -->
    <table>
        <thead>
            <tr>
                <th>รหัสนักศึกษา</th>
                <th>ชื่อ-นามสกุล</th>
                <th>ที่อยู่</th>
                <th>เบอร์โทร</th>
                <th>ธุรกรรม</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // เปิดการแสดงผลข้อผิดพลาดจาก PHP
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            // ส่วนเชื่อมต่อกับฐานข้อมูล
            require 'conn.php';

            // ตรวจสอบการเชื่อมต่อฐานข้อมูล
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query เพื่อดึงข้อมูลจากตาราง studentbio
            $sql = "SELECT * FROM studentbio";
            $result = $conn->query($sql);

            // ตรวจสอบว่ามีผลลัพธ์หรือไม่
            if ($result === false) {
                die("Error in SQL query: " . $conn->error);
            }

            // แสดงข้อมูลจากฐานข้อมูล
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["sid"]."</td>";
                    echo "<td>".$row["sname"]." ".$row["slastname"]."</td>";
                    echo "<td>".$row["address"]."</td>";
                    echo "<td>".$row["telephone"]."</td>";
                    echo "<td><a href='editbio.php?sid=".$row["sid"]."'><button>Edit</button></a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>0 results</td></tr>";
            }

            // ปิดการเชื่อมต่อฐานข้อมูล
            $conn->close();
            ?>
        </tbody>
    </table>
    
    <br>
    <a href='insertbio.php'><button>Insert Student</button></a>
</div>

</body>
</html>
