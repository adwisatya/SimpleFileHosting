<?php
Class Group{
	function getList(){
		$query = mysql_query("SELECT * FROM `group`");
		
		// while($data = mysql_fetch_array($query)){
			// print $data['gid']." ".$data['nama']." ".$data['folder']."<br/>";
		// }
		
		return $query;
	}
	function addToDB($nama, $folder){
		$sql = "INSERT INTO `group` (`gid`, `nama`, `folder`) VALUES (NULL, '$nama', '$folder'); ";
		$query = mysql_query($sql);
	}
	function updateInfo($gid, $nama){
		$query = mysql_query("UPDATE `group` SET `nama` = '$nama' WHERE `gid` = $gid;");
	}
	function permanentDelete($id){
		/*
		$query1 = mysql_query("SELECT g FROM file WHERE fileid='$id'");
		while($tobedeleted = mysql_fetch_array($query1)){
			unlink("../files/".$tobedeleted['path']);
		}
		*/
		$query = mysql_query("DELETE FROM `group` WHERE `gid` = $id");
	}
	/*
	function addToTrash($id){
		$query = mysql_query("UPDATE file SET status='0' WHERE fileid='$id'");
	}
	function recover($id){
		$query = mysql_query("UPDATE file SET status='1' WHERE fileid='$id'");
	}
	*/

	/*function checkOwner($id){
		$query = mysql_query("SELECT username from file WHERE fileid='$id'");
		return $query;
	}*/
}
?>