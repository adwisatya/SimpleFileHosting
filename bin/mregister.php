<?php 
	require_once("main.php");
	$registrator = new Register();
	
	switch ($_GET['id']){
		case 1: 	
				$username = 	$_POST['username'];
				$password =		$_POST['password'];
				$email	= 	$_POST['email'];
				$registrator->addUser($username,$email,$password);
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
				break;
		case 4:
				$registrator->showUser();
				break;	
	}
?>