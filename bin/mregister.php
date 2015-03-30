<?php 
	require_once("register.php");
	$registrator = new Register();
	
<<<<<<< HEAD
	switch ($_GET['id']){
		case 1: 	
				$username = 	$_POST['username'];
				$password =		$_POST['password'];
				$email	= 	$_POST['email'];
				$registrator->addUser($username,$password,$email);
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

=======
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
>>>>>>> f09c0181b4696f6d8ee81ed590e41fcc24bb3137
				break;
		case 4:
				$registrator->showUser();
				break;	
<<<<<<< HEAD
=======
		case 5:
				$username = $_GET['u'];
				$registrator->delUser($username);
				header("location: ../UserManagement.php");
				break;
>>>>>>> f09c0181b4696f6d8ee81ed590e41fcc24bb3137
	}
?>