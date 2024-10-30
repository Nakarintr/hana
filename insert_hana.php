<!doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>แสดงข้อมูลการรักษา</title>
    <link rel="icon" href="./icon1/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- เพิ่ม Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <link rel="icon1" href="./icon1/logo.png">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
@import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
*{font-family: 'Kanit', sans-serif;}
</style>
<style>
  body {
    background-image:url('https://chillpainai.com/src/wewakeup/scoop/images/35461638d42cc302ac6e5ec9e98d03de7e1928b7.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
<section class="text-center">
        <div class="bg-image hover-overlay ripple">
  <a href="#!">
    <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
  </a>

</head>

<script src="https://kit.fontawesome.com/356ff2c90a.js" crossorigin="anonymous"></script>

</head>

<body>

<br>
<center><h1>ข้อมูลการรักษาสัตว์</h1></center>
<center><a href="treatment_hana.php">เพิ่มข้อมูลการรักษาสัตว์</a></center><br>     
<form action="" method="get">
                        <input type="search" name="q" required class="form-control" placeholder="ค้นหาชื่อหนังตามที่ต้องการ"> <br>
                        <button type="submit" class="btn btn-primary">ค้นหาข้อมูล</button>
                    </form>

<div class="table-responsive">
          <table class="table table-borderless table-condensed" width="50%" border="1" >
   
    <thead class="bg-danger text-white">
            <tr class="text-center"  width="50%" >
            <th width="3%" style="vertical-align:middle;">ลำดับ</th>
            <th width="5%" style="vertical-align:middle;">รหัสการรักษา</th>
            <th width="10%" style="vertical-align:middle;">ชื่อข้อมูลการรักษา</th>
            <th width="10%" style="vertical-align:middle;">รายละเอียดการรักษา</th>
            <th width="5%" style="vertical-align:middle;">รหัสหมอ</th>
            <th width="5%" style="vertical-align:middle;">รหัสสัตว์</th>
            <th width="5%" style="vertical-align:middle;">ระยะเวลาการรักษา</th>
            <th width="10%" style="vertical-align:middle;">รหัสยารักษา</th>
            <th width="3%" style="vertical-align:middle;">แก้ไข</th>
            <th width="3%" style="vertical-align:middle;">ลบ</th>
            </tr>
        </thead>
    </div>
            <?php
                include("compu_hana.php");
                $sql = "SELECT * FROM treatment";
                $dbquery = mysqli_query($connect,$sql);

                $list = 0;
                    while ($result = mysqli_fetch_array($dbquery)) {
                $list++;
            ?>
        <tbody>
            <tr>
                <td> <center><?php echo $list; ?></center> </td>
                <td> <center><?php echo $result['treatment_ID']; ?></center> </td>
                <td> <center><?php echo $result['treatment_Name']; ?></center> </td>
                <td> <center><?php echo $result['treatment_Detail']; ?></center> </td>
                <td> <center><?php echo $result['Doctor_ID']; ?></center> </td>
                <td> <center><?php echo $result['pet_ID']; ?></center> </td>
                <td> <center><?php echo $result['treatment_Duration']; ?></center> </td>
                <td> <center><?php echo $result['medicine_ID']; ?></center> </td>

                <td> <center><a href="edit.php?treatmentID=<?php echo $result['treatment_ID']; ?>">แก้ไข<i class='fa fa-edit' style='font-size:24px;color:black'></i></a></center></td>
                <td> <center><a href="delete.php?treatmentID=<?php echo $result['treatment_ID']; ?>">ลบ<i class="fa-solid fa-trash" style="color: #000000;"></i></a> </center></td>    
            
                
            </tr>
        <?php
        }
            mysqli_close($connect);
        ?>
        </tbody>
    </table>
    <center>กลับไปหน้าแรก : <a href="clinic_hana.php">ย้อนกลับ</a></center><br>
   
    <center><a href="JavaScript:if(confirm('Confirm Logout..!!') == true){window.location='clinic_hana.php';}" class="btn btn-danger">ออกจากระบบ</a></center><br>
         
</body>
</html>