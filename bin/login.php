<?php
	session_start();
	require_once("../connect/connect.php");
	Class Login{
		function cekLogin($username, $password){
<<<<<<< HEAD
			$query = mysql_query("SELECT password from user WHERE username='$username'");
=======
			$query = mysql_query("SELECT password,gid from user WHERE username='$username'");
>>>>>>> f09c0181b4696f6d8ee81ed590e41fcc24bb3137
			$data = mysql_fetch_array($query);
			print $data['password'];
			print md5($password);
			if(md5($password) == $data['password']){
				$_SESSION['username'] = $username;
<<<<<<< HEAD
				header("location: ../dashboard.php");
=======
				$_SESSION['gid'] = $data['gid'];
				if($data['gid']=="1"){
					header("location: ../admin.php");
				}else{
					header("location: ../dashboard.php");
				}
>>>>>>> f09c0181b4696f6d8ee81ed590e41fcc24bb3137
			}else{
				header("location: ../login.php");
			}
		}
	}
?>