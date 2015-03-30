<?php
	require_once("file.php");
<<<<<<< HEAD
	require_once("../connect/connect.php");
	$username = $_POST['username'];
	$file = str_replace(".php",".php.txt",$_FILES['userfile']['name']);
	$target = "../files/";
	$path = $target.md5($_FILES['userfile']['name']).".".pathinfo($file, PATHINFO_EXTENSION);
	if(move_uploaded_file($_FILES['userfile']['tmp_name'],$path)){
		$fileHandler = new File();
		$fileHandler->addToDB($file,md5($_FILES['userfile']['name']).".".pathinfo($file, PATHINFO_EXTENSION),$username);
=======
	require_once("group.php");
	require_once("../connect/connect.php");
	$username = $_POST['username'];
	$gid = $_POST['gid'];
	$file = str_replace(".php",".php.txt",$_FILES['userfile']['name']);
	
	$groupHandler = new Group();
	$groupHandler->getFolder($gid);
	$target = "../files/".$groupHandler->getFolder($gid);
	$path = $target."/".md5($_FILES['userfile']['name']).".".pathinfo($file, PATHINFO_EXTENSION);
	if(move_uploaded_file($_FILES['userfile']['tmp_name'],$path)){
		$fileHandler = new File();
		$fileHandler->addToDB($file,$path,$username,$gid);
>>>>>>> f09c0181b4696f6d8ee81ed590e41fcc24bb3137
		echo "<script>alert('File Uploaded Successfully');</script>";
		header("location: ../upload.php");
	}
?>