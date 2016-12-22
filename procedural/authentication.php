<?php
if (isset($_POST['login']) && !empty($_POST['email']) && 
	!empty($_POST['password'])) {

	if($_POST['email'] == 'username@gmail.com' && $_POST['password'] == 'password' ) {
		header('Location:result.php?success=1');
	} else {
		header('Location:login.php?error=1');
	}
}