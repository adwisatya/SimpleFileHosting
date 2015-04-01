<?php
	session_start();
	if(file_exists("../connect/connect.php")){
		include("../connect/connect.php");
	}else{
		include("connect/connect.php");
	}	
	include "file.php";
	include "log.php";
	$fileHandler = new File();
	$logHandler = new Log();

	if(isset($_GET['delete'])){
		if(!$_SESSION['status'=="0"]){
			$fileHandler->addToTrash($_GET['delete']);
			$logHandler->catat($_SESSION['username'],$fileHandler->getName($_GET['delete']),"DLT",$_SESSION['gid']);
		}
		header("Location: ../dashboard.php");
	}
	if(isset($_GET['pdelete'])){
		if(!$_SESSION['status'=="0"]){
			$fileHandler->permanentDelete($_GET['pdelete']);
		}
		header("Location: ../trash.php");
	}
	if(isset($_GET['recover'])){
		if(!$_SESSION['status'=="0"]){
			$fileHandler->recover($_GET['recover']);
		}
		header("Location: ../trash.php");
	}
?>