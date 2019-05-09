<?php

$servername ="localhost";
$username ="admin";
$password ="";
$dbname =""; // fill in the database name later

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection Failed: ".mysqli_connect_error());
	}
?>


