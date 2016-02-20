<?php 
	require_once("register.php");
	$registrator = new Register();
	
	switch ($_GET['id']){
		case 1: 	
				$username = 	$_POST['username'];
				$password =		$_POST['password'];
				$email	= 	$_POST['email'];
				$csrf_token = $_POST['csrf_token'];
				$registrator->addUser($username,$password,$email,$csrf_token);
				header("location: ../login.php");
				break;
		case 2: 
				$username = 	$_POST['username'];
				$registrator->activateUser($username);
				break;
		case 3:
				$username = 	$_POST['username'];
				$password =		$_POST['password'];
				$email	= 	$_POST['email'];
				$registrator->updateInfo($username,$password,$email);
				header("location: ../account.php");

				break;
		case 4:
				$registrator->showUser();
				break;	
	}
?>