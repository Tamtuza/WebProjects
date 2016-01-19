<?php
	session_start();
	//Retire o comentário caso queira trabalhar com dados do banco
	
	/*include('include/conexao.php');
	$cpf = mysql_real_escape_string($_POST[cpf]);
	$senha = mysql_real_escape_string(md5($_POST[senha]));
	$sql = "select * from usuario WHERE cpf='$cpf' and senha='$senha'";
	$resultado = mysql_query($sql)or trigger_error('Erro ao executar consutla. Detalhes = ' . mysql_error());
	
	if (mysql_num_rows($resultado)==1){
		$campos = mysql_fetch_array($resultado);		
		$_SESSION[acesso_secomp] = true;
		$_SESSION[codigo] = $campos[id_usuario];
	*/
		echo '<meta http-equiv="refresh" content="2;URL=menuUsuario.php" />';
		echo '<br><br><br><center><b>Login efetuado com sucesso!</b></center><br>';
	/*	echo "<br><br><br><br><br><br><center><b><h2>Ol&aacute;	$campos[nome]!</h2></b></center>";
	}
	else{
		echo '<br><br><br><br><br><br><center><b><h2>Erro no Login!</h2></b></center><br>';
		echo '<meta http-equiv="refresh" content="2;URL=index.php" />';
    	mysql_close($conexao);
	}*/
?>