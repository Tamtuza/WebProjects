<?php	
	if(is_file("$_REQUEST[arquivo]")) //is_file fun��o para verificar se o arquivo existe	
		include("$_REQUEST[arquivo]"); //inclui o arquivo existente
	else 	
		include("principal.php"); //chama a p�gina principal onde est� o conteudo
?>