<?php

function only_for_user($if_true,$if_false){
	if(isset($_SESSION['username'])){
		echo $if_true;
	}else{
		echo $if_false;
	}
}

?>