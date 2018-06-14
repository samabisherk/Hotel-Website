<?php
include 'login_functions.php';


if ($_REQUEST['job']=="login"){

	$login=$_POST['email'];
	$password=$_POST['password'];

	if (check_login($login, $password)==1){
		
		
		$_SESSION['user_name']=$login;

		$user_info=get_user_info($login);
		$_SESSION['login']=1;
		
		$_SESSION['id']=$user_info['id'];
		$_SESSION['email']=$user_info['email'];
	
		header('location: about.html');
		
		
		
		
	}

	else {
        
      
		
         
			header('location: signIn.html');
		
	
	}

}


else{
                  
					header('location: signIn.html');
                    
}