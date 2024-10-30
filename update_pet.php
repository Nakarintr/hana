<?php
include("compu_pet.php");

//print_r($_POST);
//echo
$pet_Name = $_POST['pet_Name'];
$pet_Age = $_POST['pet_Age'];
$pet_Species = $_POST['pet_Species'];
$Type_of_pet_ID = $_POST['Type_of_pet_ID'];
$pet_owner_ID = $_POST['pet_owner_ID'];

$sql = "UPDATE pet SET    pet_Name = '" . $pet_Name . "',
                                pet_Age = '" . $pet_Age . "', 
                                pet_Species = '" . $pet_Species . "',
                                Type_of_pet_ID = '" . $Type_of_pet_ID . "', 
                                pet_owner_ID = '" . $pet_owner_ID . "',
                                WHERE pet_ID = '".$_POST['pet_ID']."' ";

$dbquery = mysqli_query($connect,$sql);

if ($dbquery) {
    echo "Update Complete..";
    echo "<br><a href='show_pet.php'>Back</a>";
} else {
    echo "Update Not Complete..";
    echo "<br><a href='show_pet.php'>Back</a>";
}

mysqli_close($connect);
?>
