<!doctype html>
<html lang="en">
<head>
    <title>Regiter Complete</title>
<body>

	<?php
		include("connect.php");
            $Username = $_POST["Username"];
            $Password = $_POST["Password"];

            $sql = "INSERT INTO login_hana (Username,Password) 
                    VALUES ('".$_POST["Username"]."',
                            '".$_POST["Password"]."')";

            $query = mysqli_query($connect,$sql);

                if($query) {
                    echo "Register Complete";
                    echo "<br>";
                    echo "<a href='form_login.php'>Back</a>";
                } else {
                    echo "Register Not Complete";
                    echo "<br>";
                    echo "<a href='form_login.php'>Back</a>";
                }
        mysqli_close($connect);
	?>

</body>
</html>
