<?php
	if(is_file("$_REQUEST[arquivo]")) {
				include("$_REQUEST[arquivo]"); 	
	}else{
		include("principal.php");
	}
?>