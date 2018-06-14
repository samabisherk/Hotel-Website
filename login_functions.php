<?php
function check_login($login, $password) {
		

		include 'config.php';
		include 'opendb.php';

		if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM users WHERE email = '$login' AND password= '$password'"))){
			return 1;
		}
		else{
			return 0;
		}

		
}

function get_user_info($email) {
	include 'config.php';
	include 'opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
	
}