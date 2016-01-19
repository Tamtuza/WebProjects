<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'secomp';
	
	$conexao = mysql_connect($servidor, $usuario, $senha);
	mysql_select_db($banco, $conexao);
	
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
?>
