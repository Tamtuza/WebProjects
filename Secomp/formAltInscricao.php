<?php
	//Retire o comentário caso queira trabalhar com dados do banco

	/*include("include/conexao.php");
	$codigo = $_SESSION[codigo];
	$sql = "select * from usuario WHERE id_usuario='$codigo'";	
	$resultado = mysql_query($sql);
	$campos = mysql_fetch_array($resultado);*/
	echo"
		<h2>Alterar Dados:</h2>
		<form name='formInscricao' class='inscricao' method='post' action='index.php?file=alteraInscricao.php'>
			<table border='0' align='left'>
				<tr>
					<td>
						<input type='text' class='contato' id='nome' name='nome' placeholder='NOME' value='$campos[nome]'>
					</td>
				</tr>
				<tr>
					<td>
						<input type='text' class='contato' id='cpf' name='cpf' placeholder='CPF' value='$campos[cpf]' disabled='true'>
					</td>
				</tr>
				<tr>
					<td>
						<input type='text' class='contato' id='email' name='email' value='$campos[email]' placeholder='E-MAIL'>
					</td>
				</tr>
				<tr>
					<td>
						<input type='password' class='contato' id='senha' name='senha' placeholder='SENHA'>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<input type='hidden' name='codigo' value='$codigo'>
						<input type='submit' value='Salvar' class='submit'>
					</td>
				</tr>
			</table>
		</form>		
	";
?>