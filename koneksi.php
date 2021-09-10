<?php
	$dbhost = "localhost";
	$username = "root";
	$password ="";
	$dbname = "webpro";

	$db = mysqli_connect($dbhost, $username, $password, $dbname) or die ("Database Tidak Ditemukan!");
?>