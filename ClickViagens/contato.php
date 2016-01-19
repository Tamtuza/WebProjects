<div id="content">
<div id="contato">
		<h1> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
			Contato </h1>
		
<?php
			$destino		= 	'contato@agenciaclickviagens.com';
			$Nome			=	$_POST["nome"];
			$Email			=	$_POST["email"];
			$Mensagem		=	$_POST["mensagem"];
			$Idade			=	$_POST["idade"];
			$Passagem		=	$_POST["passagem"];
			$Hotel			=	$_POST["hotel"];			
			$Pacotes		=	$_POST["pacotes"];
			
			$assunto = "Mensagem do Site Click Viagens";
			$headers .= "From: contato@agenciaclickviagens.com\r\n";
			
			if ($_POST['enviar']){
				$resposta = mail("$destino", "$assunto", "Nome: $Nome
				Email: $Email 
				Idade: $Idade
				Mensagem: $Mensagem
				Precisarei de: $Passagem, $Hotel, $Pacotes", $headers);
		if ($resposta == 1){ 
			echo "<script> 
				window.location.href = ''; 
			</script>"; 
		}
	}		
?>


	<script type="text/javascript">
		function validaCampo()
		{
			if(document.formContato.nome.value=="")
			{
				alert("O campo Nome é obrigatório!");
				return false;
			}
			else
			if(document.formContato.email.value=="")
			{
				alert("O campo E-mail é obrigatório!");
				return false;
			}
			else
			if(document.formContato.idade.value=="")
			{
				alert("O campo Idade é obrigatório!");
				return false;
			}
			else
			if(document.formContato.mensagem.value=="")
			{
				alert("O campo Mensagem é obrigatório!");
				return false;
			}
			alert("Contato Enviado com Sucesso!");
			return true;
		}
		
		function novaPagina()
		{
			if(validaCampo() == true)
			{
				location.href="index.php?arquivo=contato.php";
			}
			return false;
		}
	</script>
		
		
		<div id="conteudo_contato">
			<div class="grid_4 last-col">
				<h6>Informações para Contato</h6>
				<br> <b>Tel.:</b> (31) 3832-4628
				<br> <b>E-mail:</b> contato@agenciaclickviagens.com
				<br>
				<br> Rua Francisco Arcanjo de Souza Melo.
				<br> Número 90, Sala 206. Bairro Centro.
				<br> Santa Bárbara, MG. 35960-000.
			</div> 			
		</div>		
		<div id="formulario_contato">
			<form id="formContato" name="formContato" method="post" action="" onsubmit="return validaCampo(); return false;">    
				<table border="0" cellpadding="0" cellspacing="0">
					<tr><td align="left"><h6><b>Nome:</h6></td><td align="left"><input type="text" class="contato" id="nome" name="nome"></td></tr>
					<tr><td align="left"><h6>E-Mail:</h6></td><td align="left"><input type="text" class="contato" id="email" name="email" ></td></tr>
					<tr><td align="left"><h6>Idade:</h6></td><td align="left"><input type="text" class="contato" name="idade" id="idade" ></td></tr>
					<tr><td align="left"><h6>Precisarei de:</h6></td><td align="left"><br>
						<h6><input type="checkbox" id="passagem" name="passagem" value="passagem"> &nbsp Passagem &nbsp&nbsp
						<input type="checkbox" id="hotel" name="hotel" value="hotel"> &nbsp Hotel &nbsp&nbsp
						<input type="checkbox" id="pacotes" name="pacotes" value="pacotes"> &nbsp Pacotes			
						</h6><br>
					</td></tr>
					<tr><td align="left"><h6>Mensagem:</h6></td><td align="left"><textarea name="mensagem" id="mensagem"></textarea></td></tr>
				</table>
				<br>				
				<input type="submit" value="Enviar" class="submit" >	
				<input type="hidden" name="enviar" id="enviar" value="contato@agenciaclickviagens.com">  			 
            
				<input type="reset" class="submit" value="Limpar" name="reset"/>
			</form>	
		</div>
		<!--<div id="redes_sociais">
			<a href="#"><img src="images/twitter.png" alt=""></a>
			<a href="#"><img src="images/facebook.png" alt=""></a>
			<a href="#"><img src="images/youtube.png" alt=""></a>
			<a href="#"><img src="images/rss.png" alt=""></a>	
		</div>-->
	</div>
</div>
</div>