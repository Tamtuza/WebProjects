<head>
	<script language="JavaScript" type="text/javascript" src="scripts/valida_mascaras.js"></script>
</head>
<div class="painel">
		<?php 
		$destino = 'organizacaosecomp@gmail.com'; 
		$nome = $_POST["nome"]; 
		$email = $_POST["email"]; 
		$mensagem= $_POST["mensagem"]; 
	
		$assunto = "Contato do Site da Secomp";
		$headers .= "From: organizacaosecomp@gmail.com\r\n";
		
		if ($_POST['enviar']){
			$resposta = mail("$destino", "$assunto", "Nome: $nome 
			Assunto: $assunto 
			Email: $email 
		
			Mensagem: $mensagem", $headers);
			if ($resposta == 1){ 
				echo '<br><br><br><br><br><br><center><b><h2>Contato enviado com sucesso!<h2></b><center><br>';
				echo '<meta http-equiv="refresh" content="1; URL=index.php#contato" />';
			}else{
				echo '<meta http-equiv="refresh" content="0; URL=index.php#contato" />';
			}
		}
		echo "
			<h1>Contato</h1>
			<p class='contato'>
				Telefone: (31) 3571-5774 <br>
				E-mail: organizacaosecomp@gmail.com
			</p>
			<form class='contato' name='formContato' method='post' action=''>
				<h2>Fale Conosco:</h2>
				<input type='text' class='contato' id='nome' name='nome' placeholder='NOME'><br>
				<input type='text' class='contato' id='email' name='email' placeholder='E-MAIL' onblur='validacaoEmail(formContato.email)'><br>
				<textarea class='contato' id='mensagem' name='mensagem' placeholder='MENSAGEM'></textarea><br>
				<input type='submit' value='Enviar' class='submit_contato'>
				<input type='hidden' name='enviar' value='organizacaosecomp@gmail.com'>
			</form>
		";
	?>	
	<div class="maps">
		<iframe width="100%" height="250px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"		
			src="https://www.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=IF+Sudeste+MG+-+C%C3%A2mpus+Rio+Pomba&amp;aq=&amp;sll=-14.239424,-53.186502&amp;sspn=73.234618,135.263672&amp;ie=UTF8&amp;hq=IF+Sudeste+MG+-+C%C3%A2mpus+Rio+Pomba&amp;hnear=&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=12464850225259138705&amp;ll=-21.251417,-43.159022&amp;output=embed">
		</iframe>
	</div>
</div> <!--.painel-->