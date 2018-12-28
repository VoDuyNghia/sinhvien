<?php
	session_start();
	
	if(session_destroy()){
		echo 1;
	}else {
		echo 0;
	}

	
	// header('Location: http://voduynghia.vne:8081/');
?>