<?php

	$hostname="localhost";
	$user="root";
	$pass="";
	$dbcon="hana";
	
	$connect = mysqli_connect($hostname,$user,$pass,$dbcon) or die ("can not connect to database");

	mysqli_query ($connect,"SET NAMES utf8"); ;


?>