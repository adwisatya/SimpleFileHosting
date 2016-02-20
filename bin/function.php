<?php

function only_for_user($if_true,$if_false){
	if(isset($_SESSION['username'])){
		echo $if_true;
	}else{
		echo $if_false;
	}
}
function generate_csrf_token(){
	$date = date("H:i");
	$jam = date("H");
	$menit = substr($date, strpos($date, ":")+1);
	return md5($jam.round($menit,-1));
}

?>