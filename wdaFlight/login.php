<?php
include 'core/init.php';
logged_in_redirect();
if (empty($_POST) == false) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'Please enter username and password!';
	} else if (user_exists($username) === false) {
			$errors[] = 'Invalid username, please register.';
	} else if (user_active($username)=== false){
				
			$errors[] = 'account is not activated';	
			}
			else{
				$login = login($username, $password);
				if ($login === false)
				{
					$errors[] = 'Username or password is incorrect';
					
				}	
				else{
					$_SESSION['user_id'] = $login;
					header('location:index.php');
													
					exit();
				}
				}
				}
				else {
					
					$errors[]= 'no data received!';
					}
				
			
		
	
	

include 'includes/overall/header.php';
if (empty($errors) == false) {
?>
<h2>An error has occured. Please try again.</h2>
<?php

	

echo output_errors($errors);
}
include 'includes/overall/footer.php';

?>