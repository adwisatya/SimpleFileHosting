<?php
Class Group{
	function getList(){
		$query = mysql_query("SELECT * FROM `group`");
		return $query;
	}
	function getUserList($gid){
		$query = mysql_query("SELECT username FROM `user` WHERE `gid`=$gid");
		return $query;
	}
	function addToDB($nama, $folder){
		$sql = "INSERT INTO `group` (`gid`, `nama`, `folder`) VALUES (NULL, '$nama', '$folder'); ";
		mkdir("../files/".$folder,0777);
		$query = mysql_query($sql);
	}
	function updateInfo($gid, $leader){
		$query = mysql_query("UPDATE `group` SET `leader` = '$leader' WHERE `gid` = $gid;");
		$query2 = mysql_query("UPDATE `user` SET `status`='1' WHERE `username` = '$leader';");
	}

	function getFolder($id){
		$query1 = mysql_query("SELECT `folder` FROM `group` WHERE `gid`=$id");
		$data = mysql_fetch_array($query1);
		return $data['folder'];
	}
	function permanentDelete($id){
		$query1 = mysql_query("SELECT `folder` FROM `group` WHERE `gid`=$id");
		$data = mysql_fetch_array($query1);
		$dir = "../files/".$data['folder']."/";
		$objects = scandir($dir);
		foreach ($objects as $object) {
			if ($object != "." && $object != "..") {
				if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
			} 
		}
		rmdir("../files/".$data['folder']."/");
		$query = mysql_query("DELETE FROM `group` WHERE `gid` = $id");
		$query = mysql_query("UPDATE `user` SET `gid` = '' WHERE `gid`=$id");
	}
}
?>