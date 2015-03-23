<?php
	session_start();
	require_once("main.php");
	$fileHandler = new File();
	
	switch ($_GET['id']){
		case 1: 
			$owner = mysql_fetch_array($fileHandler->checkOwner($_POST['fileid']))['username'];
			if($owner == $_SESSION['username']){
				$fileHandler->addToTrash($_POST['fileid']);
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
?>