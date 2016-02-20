<?php
generate_csrf_token();
function generate_csrf_token(){
	$date = date("H:i");
	$jam = date("H");
	$menit = substr($date, strpos($date, ":")+1);
	echo md5($jam.round($menit,-1));
}
?>