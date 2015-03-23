<?php
Class File{
	function getList($username){
		$query = mysql_query("SELECT * from file WHERE username='$username'");
		/*
		while($data = mysql_fetch_array($query)){
			print $data['fileid']." ".$data['filename']." ".$data['path']."<br/>";
		}
		*/
		return $query;
	}
	function addToTrash($id){
		$query = mysql_query("UPDATE file SET status='0'");
	}
	function permanentDelete($id){
		$query = mysql_query("DELETE from file WHERE fileid = '$id'");
	}
}
?>