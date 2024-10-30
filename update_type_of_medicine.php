<?php
include("compu_type_of_medicine.php");

//print_r($_POST);
//echo
$Type_of_medicine_Name = $_POST['Type_of_medicine_Name'];

$sql = "UPDATE type_of_medicine SET    Type_of_medicine_Name = '" . $Type_of_medicine_Name . "',
                                WHERE Type_of_medicine_ID = '".$_POST['Type_of_medicine_ID']."' ";

$dbquery = mysqli_query($connect,$sql);

if ($dbquery) {
    echo "Update Complete..";
    echo "<br><a href='show_type_of_medicine.php'>Back</a>";
} else {
    echo "Update Not Complete..";
    echo "<br><a href='show_type_of_medicine.php'>Back</a>";
}

mysqli_close($connect)
?>
