<?php
	session_start();
	require_once("../connect/connect.php");
	include("function.php");
	Class Login{
		function cekLogin($username, $password,$csrf_token){
			if($csrf_token == generate_csrf_token()){
				$query = mysql_query("SELECT password from user WHERE username='$username'");
				$data = mysql_fetch_array($query);
				if(md5($password) == $data['password']){
					$_SESSION['username'] = $username;
					header("location: ../dashboard.php");
				}else{
					header("location: ../login.php");
				}
			}else{
				header("location: ../login.php");
			}
		}
	}
?>