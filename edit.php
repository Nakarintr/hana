<!doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>แก้ไขข้อมูลรักษาสัตว์</title>
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
        include "compu_hana.php";

        $sql = "SELECT * FROM treatment WHERE treatment_ID = '".$_GET['treatmentID']."'";

        $dbquery = mysqli_query($connect,$sql);
        $result = mysqli_fetch_array($dbquery);
        
    ?>
<body style="background-image: linear-gradient(to right top, #6d6d6d, #ef0000);">
    <div class="d-flex justify-content-center align-items-center vh-100">
      <div class="bg-white p-5 rounded-5 shadow">
      
        <div class="text-center fs-2 fw-bold">ระบบแก้ไข/การรักษา</div>
        <form action="update.php" name="form_1" method="POST" enctype="multipart/form-data">  
รหัสการรักษา : 
         <div class="input-group mt-1">
         <div class="input-group-text bg-Gainsboro"><i class="fa fa-book"></i></div>
       <input type="text" name="treatment_ID" class="form-control bg-light" value=" <?php echo $result["treatment_ID"];?>"required><br></div>
ชื่อข้อมูลการรักษา :       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
          <input type="text" name="treatment_Name" class="form-control bg-light" value=" <?php echo $result["treatment_Name"];?>"required><br></div>
รายละเอียดการรักษา <font color='red'>*รายละเอียดการรักษา</font>  :       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
          <input type="text" name="treatment_Detail" class="form-control bg-light" value=" <?php echo $result["treatment_Detail"];?>"required><br></div>
รหัสหมอ :       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
          <input type="text" name="Doctor_ID" class="form-control bg-light" value=" <?php echo $result["Doctor_ID"];?>"required><br></div>
รหัสสัตว์ :       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
          <input type="text" name="pet_ID" class="form-control bg-light" value=" <?php echo $result["pet_ID"];?>"required><br></div>
ระยะเวลาการรักษา :       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
          <input type="text" name="treatment_Duration" class="form-control bg-light" value=" <?php echo $result["treatment_Duration"];?>"required><br></div>
รหัสยารักษา :       
       <div class="input-group mt-1">
          <div class="input-group-text bg-Gainsboro"><i class="fa fa-file-text"></i></div>
          <input type="text" name="medicine_ID" class="form-control bg-light" value=" <?php echo $result["medicine_ID"];?>"required><br></div>
          <input type="hidden" name="treatment_ID" value="<?php echo $_GET['treatmentID']; ?>">
        
       
        <center><input type="submit" name= "update"  value= "แก้ไขข้อมูลการรักษา" class="btn btn-dark text-white w-100 mt-2" ></center><br>
        หน้าแรก :&nbsp;<a href="insert_hana.php">Back</a>
    
    </form>

    
</body>
</html>