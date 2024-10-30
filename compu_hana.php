<?php
    $hostname = "localhost";
    $user = "root";
    $pass = "";
    $dbcol = "hana";

    $connect = mysqli_connect($hostname,$user,$pass,$dbcol) or die ("not connect to database");

    mysqli_query($connect, "SET NAMES utf8");

    ?>