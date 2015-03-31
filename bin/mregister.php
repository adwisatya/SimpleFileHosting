<?php 
	require_once("register.php");
	$registrator = new Register();
	switch ($_GET['cid']){
		case 1: /* add */
				$username = 	$_POST['username'];
				$password =		$_POST['password'];
				$email	= 	$_POST['email'];
				$gid	=	$_POST['gid'];
				$registrator->addUser($username,$password,$email,$gid);
				header("location: ../UserManagement.php?act=add");
				break;
		case 2: /* activate */
				$username = 	$_POST['username'];
				$registrator->activateUser($username);
				break;
		case 3: /* udpate */
				$username = 	$_POST['username'];
				$password =		$_POST['password'];
				$email	= 	$_POST['email'];
				$gid = $_POST['gid'];
				$registrator->updateInfo($username,$password,$email,$gid);
				header("location: ../UserManagement.php?act=edit&u=$username");
				break;
		case 4:
				$registrator->showUser();
				break;	
		case 5:
				$username = $_GET['u'];
				$registrator->delUser($username);
				header("location: ../UserManagement.php");
				break;
	}
?>