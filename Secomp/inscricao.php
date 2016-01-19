<script language="JavaScript" type="text/javascript" src="scripts/valida_mascaras.js"></script>
<script language="JavaScript" type="text/javascript" src="scripts/valida_inscricao.js"></script>
<div class="painel">
	<div class="center">
		<h2>Inscreva-se</h2>
		<form name="formInscricao" class="inscricao" method="post" action="index.php?file=cadastroInscricao.php" onsubmit="javascript: return validaInscricao()">
			<input type="text" class="inscricao" id="nome" name="nome" placeholder="NOME"><br>
			<input type="text" class="inscricao" id="cpf" name="cpf" placeholder="CPF" maxlength="11" onKeyPress="MascaraInt(formInscricao.cpf);"  onBlur="ValidarCPF(formInscricao.cpf);"><br>
			<input type="text" class="inscricao" id="email" name="email" placeholder="E-MAIL"><br>
			<input type="password" class="inscricao" id="senha" name="senha" placeholder="SENHA"><br>
			<center><input type="submit" class="btnArcade" value=""></center>
		</form>
	</div> <!--.center-->
</div> <!--.painel-->