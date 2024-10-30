<?php
include("compu_medicine.php");

//print_r($_POST);
//echo
$medicine_Name = $_POST['medicine_Name'];
$Type_of_medicine_ID = $_POST['Type_of_medicine_ID'];
$medicine_Price = $_POST['medicine_Price'];
$medicine_TotalNumber = $_POST['medicine_TotalNumber'];

$sql = "UPDATE medicine SET    medicine_Name = '" . $medicine_Name . "',
                                Type_of_medicine_ID = '" . $Type_of_medicine_ID . "', 
                                medicine_Price = '" . $medicine_Price . "', 
                                medicine_TotalNumber = '" . $medicine_TotalNumber . "',
                                WHERE medicine_ID = '".$_POST['medicine_ID']."' ";

$dbquery = mysqli_query($connect,$sql);

if ($dbquery) {
    echo "Update Complete..";
    echo "<br><a href='show_medicine.php'>Back</a>";
} else {
    echo "Update Not Complete..";
    echo "<br><a href='show_medicine.php'>Back</a>";
}

mysqli_close($connect);
?>
