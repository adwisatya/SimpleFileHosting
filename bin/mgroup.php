<?php 
	require_once("../connect/connect.php");
	require_once("group.php");
	$groupHandler = new Group();
	if(isset($_GET['cid'])){
		switch ($_GET['cid']){
			case 1:
				$nama = $_POST['nama'];
				$groupHandler->addToDB($nama,trim($nama));
				header("location: ../admin.php");
				break;
			case 2:
				$id = $_GET['id'];
				$groupHandler->permanentDelete($id);
				/* tambahkan itnegrity constrain */
				header("location: ../admin.php");
				break;
			case 3:
				$gid = $_POST['gid'];
				$nama = $_POST['leader'];
				$groupHandler->updateInfo($gid,$nama);
				header("location: ../admin.php");
				break;
			case 4:
				print_r(mysql_fetch_array($groupHandler->getList()));
				break;
		}
	}
?>