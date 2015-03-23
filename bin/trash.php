<?php
require_once("../connect/connect.php");
Class Trash{
	function addToTrash($id){
		$query = mysql_query("UPDATE file SET status='0'");
	}
	function permanentDeleter($id){
		$query = mysql_query("DELETE from file WHERE fileid = '$id'");
	}
}
?>