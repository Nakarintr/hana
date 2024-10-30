<!doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>แก้ไขข้อมูลประเภทยารักษา</title>
    <link rel="icon" href="./icon1/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
  *{font-family: 'Kanit', sans-serif;}
</style>
</head>
<body>
    <?php
        include "compu_type_of_medicine.php";

        $sql = "SELECT * FROM type_of_medicine WHERE Type_of_medicine_ID = '".$_GET['Type_of_medicine_ID']."'";

        $dbquery = mysqli_query($connect,$sql);
        $result = mysqli_fetch_array($dbquery);
        
    ?>
<body style="background-image: linear-gradient(to right top, #6d6d6d, #ef0000);">
    <div class="d-flex justify-content-center align-items-center vh-100">
      <div class="bg-white p-5 rounded-5 shadow">
รหัสประเภทยารักษา : 
         <div class="input-group mt-1">
         <div class="input-group-text bg-Gainsboro"><i class="fa fa-book"></i></div>
       <input class="form-control bg-light" type="text" name="Type_of_medicine_ID " placeholder="กรอก รหัสประเภทยารักษา" required></div>
ชื่อประเภทยารักษา :<font color='red'>*ชื่อ</font>       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
         <input class="form-control bg-light" type="text" name="Type_of_medicine _Name" placeholder="ชื่อประเภทยารักษา" required></div>
        <div class="text-center fs-2 fw-bold">ระบบแก้ไข/ประเภทยารักษา</div>
        <form action="update_type_of_medicine.php" name="form_1" method="POST" enctype="multipart/form-data">  
        
               <input type="hidden" name="Type_of_medicine_ID" value="<?php echo $_GET['Type_of_medicineID']; ?>">
        
       
        <center><input type="submit" name= "update"  value= "แก้ไขข้อมูลประเภทยารักษา" class="btn btn-dark text-white w-100 mt-2" ></center><br>
        หน้าแรก :&nbsp;<a href="insert_type_of_medicine.php">Back</a>
    
    </form>

    
</body>
</html>