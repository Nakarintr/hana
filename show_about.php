<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>เช็ค</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style1.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="shortcut icon" type="icons/student9.png" href="assets/icons/student9.png">
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <style>
    
    body {
      margin-top: 0px;
      background: url("assets/image/bg8.jpg") no-repeat fixed center;
    }
  </style>

</head>

<body>

          

<script type='text/javascript'>
                  swal(' Completed', 'เพิ่มข้อมูลสัตวแพทย์', 'success');
              </script><meta http-equiv="refresh"content="2;url=insert_about.php?DoctorID=">
</body>
</html>
<?php
    include "compu_about.php";
    //print_r($_POST);
    
    $Doctor_ID = $_POST['Doctor_ID'];
    $Doctor_Name = $_POST['Doctor_Name'];
    $Doctor_Tel = $_POST['Doctor_Tel'];
    $Doctor_Position = $_POST['Doctor_Position'];
    $Doctor_Time = $_POST['Doctor_Time'];
    
    
    $sql = "INSERT INTO doctor (Doctor_ID,Doctor_Name,Doctor_Tel	,Doctor_Position,Doctor_Time)
                VALUES ('$Doctor_ID','$Doctor_Name', '$Doctor_Tel', '$Doctor_Position','$Doctor_Time')";

   $dbquery = mysqli_query($connect,$sql);

    if($dbquery) {
        //echo "Complete..";
        //echo "<br><a href='insert_about.php'>Back</a>" ;
    } else {
        //echo "Not complete..";
        //echo "<br><a href='insert_about.php'>Back</a>"; 
    }
    
    mysqli_close($connect);
    
?>