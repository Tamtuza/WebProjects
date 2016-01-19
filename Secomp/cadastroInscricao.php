<?php
		include("include/conexao.php");
        
		$nome = $_POST[nome];
		$email = $_POST[email];
		$cpf = $_POST[cpf];
		$senha = md5($_POST[senha]);

		$sql1 = "select * from usuario where cpf = $cpf";
		$resultado1 = mysql_query($sql1);
		$campos = mysql_fetch_array($resultado1);
		if($campos[cpf] == $cpf){
			echo "<br><br><br><br><br><br><center><b><h2>CPF já cadastrado!</h2></b><center><br>";
			echo "<meta http-equiv='refresh' content='1; URL=index.php#inscricao' />";
		}else{
			$sql = "insert into usuario(nome,email,cpf,senha) 
				values('$nome','$email','$cpf','$senha')";		
			$resultado = mysql_query($sql);
			
			if ($resultado == 1){
				echo "<br><br><br><br><br><br><center><b><h2>Inscrição efetuada com sucesso!<h2></b><center><br>";
				echo "<meta http-equiv='refresh' content='1; URL=index.php' />";
			}else{ 
				echo "<br><br><br><br><br><br><center><b><h2>Erro na inscrição!</h2></b><center><br>";
				echo "<meta http-equiv='refresh' content='1; URL=index.php#inscricao' />";
			}
		}
		mysql_close($conexao);
?>