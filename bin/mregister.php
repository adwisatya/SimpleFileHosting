<?php 
	require_once("main.php");
	$registrator = new Register();
	
	$username = $_POST['username'];
	$password =$_POST['password'];
	$email = $_POST['email'];
	

	if(isset($_POST['submit'])){
		//$registrator->addUser($username,$email,$password);
		//$registrator->activateUser($username);
		//$registrator->updateInfo($username,$password,$email);
	}
	$registrator->showUser();
?>