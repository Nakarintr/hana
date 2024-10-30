<!doctype html>
<html lang="en">
<head>
    <title>Check Login</title>
</head>
<body>

	<?php
		//error_reporting(0);
		session_start();

			include("connect.php");
				$Username = $_POST['Username'];
				$Password = $_POST['Password'];

			if($Username == '') {
				echo "Username ไม่ถูกต้อง";
				echo "<br>";
				echo "<a href='form_login.php'>Back</a>";
			} else if ($Password == '') {
				echo "Password ไม่ถูกต้อง";
				echo "<br>";
				echo "<a href='form_login.php'>Back</a>";
			} 
			else {

				$sql = mysqli_query($connect,"SELECT * FROM login_hana WHERE Username = '$Username' AND Password = '$Password'");
				
				$num = mysqli_num_rows($sql);

					if($num <= 0) {

						echo "Username หรือ Password ไม่ถูกต้อง";
						echo "<br>";
						echo "<a href='form_login.php'>Back</a>";

					} else {
						while ($user = mysqli_fetch_array($sql)) {

							if ($user['status'] == "doctor")
							{
								$_SESSION['log_id'] = $user['log_id'];
								$_SESSION['Username'] = $user['Username']; 
								$_SESSION['Password'] = $user['Password'];

								header('Location: clinic_hana.php');
							}
							else 
							{
								echo "<br>";
								header('Location: form_login.php');

							}
						}
					}

				}

	?>

</body>
</html>