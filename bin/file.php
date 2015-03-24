<?php
Class File{
	function getList($username,$status){
		$query = mysql_query("SELECT * from file WHERE username='$username' AND status='$status'");
		/*
		while($data = mysql_fetch_array($query)){
			print $data['fileid']." ".$data['filename']." ".$data['path']."<br/>";
		}
		*/
		return $query;
	}
	function addToTrash($id){
		$query = mysql_query("UPDATE file SET status='0' WHERE fileid='$id'");
	}
	function recover($id){
		$query = mysql_query("UPDATE file SET status='1' WHERE fileid='$id'");
	}
	function permanentDelete($id){
		$query = mysql_query("DELETE from file WHERE fileid = '$id'");
	}
	function checkOwner($id){
		$query = mysql_query("SELECT username from file WHERE fileid='$id'");
		return $query;
	}
}
?>