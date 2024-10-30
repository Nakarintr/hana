<!doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>insert_pet</title>
    <link rel="icon" href="./icon1/logo.png">

     <!-- เพิ่ม Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
@import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
*{font-family: 'Kanit', sans-serif;}
</style>
<style>
        body {
            background-image: url('https://chillpainai.com/src/wewakeup/scoop/images/35461638d42cc302ac6e5ec9e98d03de7e1928b7.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body style="background-image: linear-gradient(to right top, #6d6d6d, #ef0000);">
<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="bg-white p-5 rounded-5 shadow">
<style>
    body {
        padding-top: 56px; /* ปรับขึ้นตอนใช้ Navbar ด้านบน */
    }

    section {
        padding: 20px;
    }

    footer {
        background-color: #4CAF50;
        color: white;
        text-align: center;
        padding: 3em;
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>
<script src="https://kit.fontawesome.com/356ff2c90a.js" crossorigin="anonymous"></script>
</head>
<body>
 <!-- Navbar ด้านบน -->

            
        <div class="text-center fs-4 fw-bold">ข้อมูลสัตว์</div>
        
        
<form action="show_pet.php" method="post" enctype="multipart/form-data">
  
ชื่อสัตว์  <font color='red'>*สัตว์</font>  :       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
         <input class="form-control bg-light" type="text" name="pet_Name" placeholder="กรอกชื่อสัตว์" required></div>
อายุสัตว์:       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
         <input class="form-control bg-light" type="text" name="pet_Age" placeholder="กรอกอายุสัตว์" required></div>
สายพันธุ์สัตว์ :       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
         <input class="form-control bg-light" type="text" name="pet_Species" placeholder="กรอกสายพันธุ์สัตว์" required></div>
ประเภทสัตว์ :       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
         <input class="form-control bg-light" type="text" name="Type_of_pet_ID" placeholder="กรอกประเภทสัตว์" required></div>
รหัสเจ้าของสัตว์ :       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
         <input class="form-control bg-light" type="text" name="pet_owner_ID" placeholder="กรอกรหัสเจ้าของสัตว์" required></div>
         ตรวจดูข้อมูล : <a href="insert_pet.php"> ดูข้อมูลสัตว์ </a>

        <center><input type="submit" name= "login"  value= "สัตว์" class="btn btn-dark text-white w-100 mt-2" ></center><br>
        <center>กลับไปหน้าเดิม : <a href="clinic_hana.php"> ย้อนกลับ </a></center><br>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>       
    <!-- เพิ่ม Bootstrap JS และ Popper.js สำหรับ Dropdown Menu -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </Form>
   
</body>                   
</HTML>