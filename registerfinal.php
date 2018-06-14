<?php


 include 'register.php';





	$first_name = $_POST ['first_name'];
	$last_name = $_POST ['last_name'];
	$email= $_POST ['email'];
	$password = $_POST ['password'];
	$confirm_password = $_POST ['confirm_password'];
	
	register($first_name, $last_name, $email, $password, $confirm_password);	

?>
