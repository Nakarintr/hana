<!DO<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinarian Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/356ff2c90a.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url('https://chillpainai.com/src/wewakeup/scoop/images/35461638d42cc302ac6e5ec9e98d03de7e1928b7.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
<section class="text-center">
    <div class="bg-image hover-overlay ripple">
        <h1><span style="color: hsl(218, 81%, 75%)">คลีนิกฮานะ</span></h1>
        <h2><p style="color: hsl(218, 81%, 85%)">สำหรับสัตวแพทย์</p></h2>
    </div>
    <div class="card mx-auto my-5" style="max-width: 500px;">
        <div class="card-body px-4 py-5">
            <form action="register_complete.php" method="POST">
                <!-- Form Fields -->
                <div class="form-group">
                    <label>รหัสสัตวแพทย์:</label>
                    <div class="input-group">
                        <div class="input-group-text bg-Gainsboro"><i class="fa fa-book"></i></div>
                        <input type="text" class="form-control bg-light" name="Doctor_ID" placeholder="กรอก รหัสสัตวแพทย์" required></div>
ชื่อสัตวแพทย์ :<font color='red'>*ชื่อ-นามสกุล</font>       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
         <input class="form-control bg-light" type="text" name="Doctor_Name" placeholder="ชื่อสัตวแพทย์" required></div>
เบอร์โทรสัตวแพทย์  :       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
         <input class="form-control bg-light" type="text" name="Doctor_Tel" placeholder="เบอร์โทรสัตวแพทย์" required></div>
ตำแหน่งสัตวแพทย์:       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
         <input class="form-control bg-light" type="text" name="Doctor_Position" placeholder="ตำแหน่งสัตวแพทย์" required></div>
เวลาทำการ :       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
         <input class="form-control bg-light" type="text" name="Doctor_Time" placeholder="กรอกเวลาทำการ" required></div>
username  :       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
         <input class="form-control bg-light" type="text" name="Username" placeholder="Username" required></div>
password  :       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
         <input class="form-control bg-light" type="Password" name="Password" placeholder="Password" required></div>

         <button type="submit" name="login" class="btn btn-dark text-white w-100 mt-2">ลงทะเบียน</button>
                <p class="mt-3">กลับไปหน้าเดิม : <a href="form_login.php">ย้อนกลับ</a></p>
            </form>
        </div>
    </div>
</section>

<!-- Bootstrap & JS libraries -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>