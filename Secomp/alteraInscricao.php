<?php
		include("include/conexao.php");
        
		$codigo = $_POST[codigo];
		$nome = $_POST[nome];
		$email = $_POST[email];
		$senha = md5($_POST[senha]);
      	
		$sql = "update usuario set nome = '$nome', email = '$email', senha = '$senha' WHERE id_usuario = '$codigo'";		
		$resultado = mysql_query($sql);
	
		if ($resultado == 1){
			echo '<br><br><br><br><br><br><center><b><h2>Alteração efetuada com sucesso!<h2></b><center><br>';
			echo '<meta http-equiv="refresh" content="1; URL=menuUsuario.php" />';
		}else{ 
			echo '<br><br><br><br><br><br><center><b><h2>Erro na alteração!</h2></b><center><br>';
			echo '<meta http-equiv="refresh" content="1; URL=menuUsuario.php" />';
		}
	
		mysql_close($conexao);
?>