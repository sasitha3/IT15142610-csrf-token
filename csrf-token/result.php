<?php
	
	$username =  $_POST['username'];
	$password =  $_POST['password'];

	if($username == 'sasitha' && $password == 'sasitha'){
		require_once 'token.php';
		token::generateToken();
		header("Location:home.php");
	} else {
		header("Location:index.php?fail=1");
	} 

?>

