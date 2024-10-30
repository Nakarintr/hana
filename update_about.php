<?php
include("compu_hana.php");

//print_r($_POST);
//echo
$Doctor_Name = $_POST['Doctor_Name'];
$Doctor_Tel = $_POST['Doctor_Tel'];
$Doctor_Position = $_POST['Doctor_Position'];
$Doctor_Time = $_POST['Doctor_Time'];

$sql = "UPDATE doctor SET    Doctor_Name = '" . $Doctor_Name . "',
                                Doctor_Tel = '" . $Doctor_Tel . "', 
                                Doctor_Position = '" . $Doctor_Position . "', 
                                Doctor_Time = '" . $Doctor_Time . "',
                                WHERE Doctor_ID = '".$_POST['Doctor_ID']."' ";

$dbquery = mysqli_query($connect,$sql);

if ($dbquery) {
    echo "Update Complete..";
    echo "<br><a href='show_about.php'>Back</a>";
} else {
    echo "Update Not Complete..";
    echo "<br><a href='show_about.php'>Back</a>";
}

mysqli_close($connect);
?>
