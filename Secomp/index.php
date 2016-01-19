<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
		session_start();
		header("Content-Type: text/html; charset=UTF-8",true);
		ini_set("display_erros", "OFF");
	?>
	<head>
		<title>Secomp</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<meta name="keywords" content="IV Secomp - Secomp - Semana da Computação - Simpósio - Tecnologia - Ciência da Computação - IF Sudeste MG - Rio Pomba - Minas Gerais" />
		<meta name="viewport" content="width=device-width, inicial-scale=1">
		<link rel="icon" href="images/play.ico">
		<link rel="shortcut icon" href="images/play.ico"/>
		<link href="css/main.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.parallax-1.1.3.js"></script>
		<script type="text/javascript" src="scripts/jquery.localscroll-1.2.7-min.js"></script>
		<script type="text/javascript" src="scripts/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript" src="scripts/waypoints.min.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('#nav').localScroll(800);
				
				//.parallax(xPosition, speedFactor, outerHeight) options:
				//xPosition - Horizontal position of the element
				//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
				//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
				$('#principal').parallax("50%", 0.5);
				$('#evento').parallax("50%", 0.1);
				$('.globo').parallax("50%", 0.5);	
				$('#programacao').parallax("50%", 0.3);
				$('#equipe').parallax("50%", 0.3);
				$('#patrociniospan').parallax("50%", 0.1);
				$('#patrocinios').parallax("50%", 0.1);			
				$('#contatospan').parallax("50%", 0.1);
				$('#contato').parallax("50%", 0.1);
				$('#inscricao').parallax("50%", 0.3);
				
				$('.section div').waypoint(function(direction) {
					var sec = $(this).parents('.section').attr('id');
					$('#nav a').removeClass('selected')
					$('.optionMenu_'+sec).addClass('selected');
				}, { offset: 100 });
			})
		</script>
	</head>
	<body>
		<div id="nav">
			<div class="bar">
				<div class="content">
					<a href="#principal" class="optionMenu_principal selected">Home</a>
					<a href="#evento" class="optionMenu_evento">Evento</a>
					<a href="#programacao" class="optionMenu_programacao">Convidados</a>
					<a href="#equipe" class="optionMenu_equipe">Equipe</a>
					<a href="#patrocinios" class="optionMenu_patrocinios">Patrocínios</a>
					<a href="#contato" class="optionMenu_contato">Contato</a>
					<a href="#inscricao" class="optionMenu_inscricao">Inscreva-se</a>	
					<?php if($_SESSION[acesso_secomp]){
						echo '<a href="menuUsuario.php" class="optionMenu_acesso">Acesso Restrito</a>';
					}else{
						echo'
							<div class="sidebar">
								<li> Logar
									<span>
										<br><br>
										<form class="formlogin" method="post" action="index.php">
											<input type="text" class="formlogin" id="cpf" name="cpf" placeholder="CPF"><br>
											<input type="password" class="formlogin" id="senha" name="senha" placeholder="SENHA"><br>
											<br>
											<input type="submit" value="Logar" class="submit">
											<input type="hidden" name="file" value="acesso.php">
										</form>
									</span>
								</li>
							</div>
						';
					}
					?>
				</div> <!--.content-->				
			</div> <!--.bar-->
		</div> <!--#nav-->
		<div id="homespan">
			<div id="principal" class="section">
				<?php include 'conteudo.php'; ?>			
			</div> <!--#principal-->
		</div>
		
		<div id="evento" class="section">
			<?php include 'evento.php'; ?>  
		</div> <!--#evento-->
		
		<div id="programacaospan">
			<div id="programacao" class="section">
				<?php include 'programacao.php'; ?> 
			</div> <!--#programacao-->
		</div>
		
		<div id="equipespan">
			<div id="equipe" class="section">
				<?php include 'equipe.php'; ?> 
			</div> <!--#equipe-->
		</div>
		
		<div id="patrociniospan">
			<div id="patrocinios" class="section">
				<?php include 'patrocinios.php'; ?> 
			</div> <!--#patrocinio-->
		</div>
		
		<div id="contatospan">
			<div id="contato" class="section">
				<?php include 'contato.php'; ?> 	
			</div> <!--#contato-->
		</div>
		
		<div id="inscricao" class="section">
			<?php include 'inscricao.php'; ?>		
		</div> <!--#inscricao-->
		<footer class="copyright">
			Secomp 2014 &copy Todos os direitos reservados.
			<a class="emcomp" href="http://www.emcomp.com.br" target="_blank">Emcomp</a>
		</footer>
	</body>
</html>