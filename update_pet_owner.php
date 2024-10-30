<?php
include("compu_pet_owner.php");

//print_r($_POST);
//echo
$pet_owner_Name = $_POST['pet_owner_Name'];
$pet_owner_Tel = $_POST['pet_owner_Tel'];
$pet_owner_Address = $_POST['pet_owner_Address'];

$sql = "UPDATE pet_owner SET    pet_owner_Name = '" . $pet_owner_Name . "',
                                pet_owner_Tel = '" . $pet_owner_Tel . "', 
                                pet_owner_Address = '" . $pet_owner_Address . "',
                                WHERE pet_owner_ID = '".$_POST['pet_owner_ID']."' ";

$dbquery = mysqli_query($connect,$sql);

if ($dbquery) {
    echo "Update Complete..";
    echo "<br><a href='show_pet_owner.php'>Back</a>";
} else {
    echo "Update Not Complete..";
    echo "<br><a href='show_pet_owner.php'>Back</a>";
}

mysqli_close($connect);
?>
