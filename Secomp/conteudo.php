
	<?php
	
		if(is_file("$_REQUEST[file]")) //is_file função para verificar se o arquivo existe
			include("$_REQUEST[file]"); //inclui o arquivo existente
		else 	
			include("principal.php"); //chama a página principal onde está o conteudo
			//include("noticia.php")
	?>

