<?php
	require_once("file.php");
	require_once("group.php");
	require_once("../connect/connect.php");
	require_once("log.php");
	$username = $_POST['username'];
	$gid = $_POST['gid'];
	$file = str_replace(".php",".php.txt",$_FILES['userfile']['name']);
	
	$groupHandler = new Group();
	$logHandler = new Log();
	$groupHandler->getFolder($gid);
	$target = "../files/".$groupHandler->getFolder($gid);
	if(!file_exists($target)){
		mkdir($target,0777);
	}
	$path = $target."/".md5($_FILES['userfile']['name']).".".pathinfo($file, PATHINFO_EXTENSION);
	if(move_uploaded_file($_FILES['userfile']['tmp_name'],$path)){
		$fileHandler = new File();
		$fileHandler->addToDB($file,$path,$username,$gid);
		$logHandler->catat($username,$file,"UPLD",$gid);
		header("location: ../upload.php");
	}
?>