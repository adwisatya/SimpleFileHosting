<?php 
	session_start();
	if(file_exists("../connect/connect.php")){
		include("../connect/connect.php");
	}else{
		include("connect/connect.php");
	}	
	include "log.php";
	include "group.php";
	include "file.php";
	
	$fileid = $_GET['fileid'];
	$logHandler = new Log();
	$fileHandler= new File();
	$logHandler->catat($_SESSION['username'],$fileHandler->getName($fileid),"VIEW",$_SESSION['gid']);
	header("location: ".$fileHandler->getPath($fileid));
?>