<?php 
Class Log{
	function catat($username,$file,$time,$act){
		$time = date("d-m-Y h:i:s");
		$query = mysql_query("INSERT INTO `log`(action,actor,file,time) VALUES($act,$username,$file,$time)");
	}
}

?>