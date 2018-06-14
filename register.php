<?php

function register($first_name, $last_name, $email, $password, $confirm_password) {
	include 'config.php';
	include 'opendb.php';

	$query = "INSERT INTO users (first_name, last_name, email, password, confirm_password)
	VALUES ('$first_name', '$last_name', '$email', '$password', '$confirm_password')";

	mysqli_query($conn, $query) or die (mysqli_error($conn));



}

?>
