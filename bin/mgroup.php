<?php 
	require_once("../connect/connect.php");
	require_once("group.php");
	$groupHandler = new Group();
	if(isset($_GET['id'])){
		switch ($_GET['id']){
			case 1:
				$nama = $_POST['nama'];
				$groupHandler->addToDB($nama,trim($nama));
				break;
		}
	}
?>