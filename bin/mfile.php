<?php
	session_start();
	require_once("main.php");
	$fileHandler = new File();
	
	if(isset($_GET['id'])){
		switch ($_GET['id']){
			case 1: 
				$owner = mysql_fetch_array($fileHandler->checkOwner($_POST['fileid']))['username'];
				if($owner == $_SESSION['username']){
					$fileHandler->addToTrash($_POST['fileid']);
					header("Location: ../dashboard.php");

				}else{
					print "tidak cocok";
				}
				break;
			case 2:
				$fileHandler->permanentDelete($_POST['path']);
				break;
			default:
				$fileHandler->getList($username,1);
				break;
			
		}
	}
	if(isset($_GET['delete'])){
		$fileHandler->addToTrash($_GET['delete']);
		header("Location: ../dashboard.php");
	}
	if(isset($_GET['pdelete'])){
		$fileHandler->permanentDelete($_GET['pdelete']);
		header("Location: ../trash.php");
	}
	if(isset($_GET['recover'])){
		$fileHandler->recover($_GET['recover']);
		header("Location: ../trash.php");
	}
?>