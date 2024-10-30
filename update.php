<?php
include("compu_hana.php");

//print_r($_POST);
//echo
$treatment_ID = $_POST['treatment_ID'];
$treatment_Name = $_POST['treatment_Name'];
$treatment_Detail = $_POST['treatment_Detail'];
$Doctor_ID = $_POST['Doctor_ID'];
$pet_ID = $_POST['pet_ID'];
$treatment_Duration = $_POST['treatment_Duration'];
$medicine_ID = $_POST['medicine_ID'];

$st_del = $_POST['st_del'];
$sql = "UPDATE treatment SET    
                                treatment_ID = '" . $treatment_ID . "',
                                treatment_Name = '" . $treatment_Name . "', 
                                treatment_Detail = '" . $treatment_Detail . "', 
                                Doctor_ID = '" . $Doctor_ID . "',
                                pet_ID = '" . $pet_ID . "',  
                                treatment_Duration = '" . $treatment_Duration . "' ,
                                medicine_ID = '" . $medicine_ID . "'
                                WHERE treatment_ID = '".$_POST['treatment_ID']."' ";


$dbquery = mysqli_query($connect,$sql);

if ($dbquery) {
    echo "Update Complete..";
    echo "<br><a href='insert_hana.php'>Back</a>";
} else {
    echo "Update Not Complete..";
    echo "<br><a href='insert_hana.php'>Back</a>";
}

mysqli_close($connect);
?>
