<?php 
Class Log{
	function catat($username,$file,$act,$gid){
		$time = date("d-m-Y h:i:s");
		$query = mysql_query("INSERT INTO `log`(`action`,`actor`,`file`,`time`,`gid`) VALUES('$act','$username','$file','$time','$gid');");
	}
	function view($gid){
		$query = mysql_query("SELECT * from `log` WHERE `gid`=$gid;");
		return $query;
	}
}

?>