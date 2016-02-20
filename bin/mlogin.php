<?php 
	require_once("main.php");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$csrf_token	= $_POST['csrf_token'];
	$loginer = new Login();

	$loginer->cekLogin($username,$password,$csrf_token);

?>