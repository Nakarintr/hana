<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transparent Header Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            color: #333;
        }

        .header {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            z-index: 1000;
        }

        .header .logo {
            font-size: 1.5em;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        .nav {
            display: flex;
            gap: 20px;
        }

        .nav a {
            color: #333;
            text-decoration: none;
            font-size: 1em;
            padding: 8px 16px;
            transition: background-color 0.3s, color 0.3s;
        }

        .nav a:hover {
            background-color: #333;
            color: white;
            border-radius: 4px;
        }

        .content {
            padding-top: 80px; /* to ensure content is not hidden under the header */
            text-align: center;
            margin-top: 50px;
        }
    </style>
    <script src="https://kit.fontawesome.com/356ff2c90a.js" crossorigin="anonymous"></script>
        <section class="text-center">
        <div class="bg-image hover-overlay ripple">
        <style>
        body {
            background-image: url('https://chillpainai.com/src/wewakeup/scoop/images/35461638d42cc302ac6e5ec9e98d03de7e1928b7.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
<a href="#!">
    <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
  </a>
</div>
</head>
<body>

    <div class="header">
        <a href="student.php" class="logo">คลินิกฮานะ</a>
        <div class="nav">
            <a href="form_login.php">หน้าแรก</a>
            <a href="insert_about.php">ข้อมูลสัตวแพทย์</a>
            <a href="pet_hana.php">ข้อมูลสัตว์</a>
            <a href="pet_owner_hana.php">ข้อมูลเจ้าของสัตว์เลี้ยง</a>
            <a href="medicine_hana.php">ข้อมูลยารักษา</a>
            <a href="type_of_medicine_hana.php">ข้อมูลประเภทยารักษา</a>
            <a href="type_of_pet_hana.php">ข้อมูลประเภทสัตว์</a>
            <a href="treatment_hana.php">ข้อมูลการรักษาสัตว์</a>
            <a href="phofire.php">profile ผู้จัดทำ</a>
            <a href="JavaScript:if(confirm('Confirm Logout..!!') == true){window.location='form_login.php';}" class="btn btn-danger">ออกจากระบบ</a>
    
        </div>
    </div>

