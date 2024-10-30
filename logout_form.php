<!doctype html>
<html lang="en">
<head>
    <title>Logout Form</title>
</head>
<body>

    <?php
        session_start();
        unset($_SESSION['log_id']);
        unset($_SESSION['username']);
        unset($_SESSION['Password']);
        session_destroy();

        echo "ออกจากระบบ";
        echo "<br>";
        echo "<a href='form_login.php'>Go</a>";
    ?>

</body>
</html>