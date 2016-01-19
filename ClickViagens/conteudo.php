<?php	
	if(is_file("$_REQUEST[arquivo]")) //is_file funчуo para verificar se o arquivo existe	
		include("$_REQUEST[arquivo]"); //inclui o arquivo existente
	else 	
		include("principal.php"); //chama a pсgina principal onde estс o conteudo
?>