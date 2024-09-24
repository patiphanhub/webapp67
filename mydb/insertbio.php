<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Student Bio</title>
    <style>
        /* พื้นหลังไล่เฉดสีม่วงถึงดำ พร้อมอนิเมชั่น */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            height: 100vh;
            background: linear-gradient(180deg, rgba(106, 0, 173, 1), rgba(0, 0, 0, 1)); /* เฉดสีม่วงถึงดำ */
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
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* สีพื้นหลังของคอนเทนเนอร์ */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
            position: relative;
        }

        h1 {
            color: #4CAF50;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #333;
        }

        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .back-button {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #555;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #333;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Insert Student Bio</h1>
    
    <!-- ฟอร์มสำหรับใส่ข้อมูลนักศึกษา -->
    <form method="post" action="insertbiosuccess.php">
        <p>
            <label>ชื่อ</label>
            <input type="text" name="sname" id="sname" required>
        </p>

        <p>
            <label>นามสกุล</label>
            <input type="text" name="slastname" id="slastname" required>
        </p>

        <p>
            <label>ที่อยู่</label>
            <input type="text" name="address" id="address" required>
        </p>

        <p>
            <label>เบอร์โทร</label>
            <input type="text" name="telephone" id="telephone" required>
        </p>

        <input type="submit" value="บันทึก">
        <a href="mainmenu.php"><button type="button">Home</button></a>
    </form>
</div>

</body>
</html>
