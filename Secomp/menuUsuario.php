<?php 
	session_start();
	
	//Retire o comentário caso queira trabalhar com dados do banco
	header("Content-Type: text/html; charset=UTF-8",true);
	ini_set("display_erros", "OFF");

	/*if($_SESSION[acesso_secomp]){ */
	echo '	
		<head>
			<link href="css/menuUsuario.css" rel="stylesheet" type="text/css">
			<link href="css/main.css" rel="stylesheet" type="text/css" />
			<link rel="icon" href="images/play.ico">
			<link rel="shortcut icon" href="images/play.ico"/>
		</head>
		<body style="overflow-y: hidden;overflow-x: hidden;">		
			<div id="nav">
				<div class="bar">
					<div class="content">
						<a href="index.php#principal" class="optionMenu_principal">Home</a>
						<a href="index.php#evento" class="optionMenu_evento">Evento</a>
						<a href="index.php#programacao" class="optionMenu_programacao">Programação</a>
						<a href="index.php#equipe" class="optionMenu_equipe">Equipe</a>
						<a href="index.php#patrocinios" class="optionMenu_patrocinios">Patrocínios</a>
						<a href="index.php#contato" class="optionMenu_contato">Contato</a>
						<a href="index.php#inscricao" class="optionMenu_inscricao">Inscreva-se</a>	
						<a href="menuUsuario.php" class="optionMenu selected">Acesso Restrito</a>
					</div> <!--.content-->				
				</div> <!--.bar-->
			</div>
	<div id="homespan">
		<div id="principal">
			<div id="panel">
			<br><br><br><br><br>
				<ul class="menu">
					<li>
						<img src="images/menu/alteraDados.png">
						<span class="title">Alterar Dados</span> 
						<div class="content">	
							';include("formAltInscricao.php");echo'
						</div>
					</li>
					<li>
						<img src="images/menu/programacao.png">
						<span class="title">Programação</span> 
						<div class="content">
							<h1>Em breve!</h1>
						</div>
					</li>
					<li>
						<img src="images/menu/inscricao.png">
						<span class="title">Fazer Inscrição</span> 
						<div class="content">
							<h1>Em breve!</h1>
						</div>
					</li>
					<li>
						<img src="images/menu/submeter.png">
						<span class="title">Submeter Resumo</span> 
						<div class="content">
							<h1>Em breve!</h1>
						</div>
					</li>
					<li>
						<img src="images/menu/certificado.png">
						<span class="title">Retirar Certificado</span> 
						<div class="content">
							<h1>Os certificados estarão disponíveis à partir do dia 08/12/2014.</h1>
						</div>
					</li>
					<li>
						<a href="index.php?file=sair.php">
							<img src="images/menu/sair.png">
							<span class="title">Logoff</span> 
						</a>
					</li>
				</ul>				
				<div class="center">
					<div class="hometetris"></div>
				</div>
			</div>
			<script src="scripts/jquery.js"></script>
			<script src="scripts/menuUsuario.js"></script>
		</div>
	</div>
</body>

	';
	/*}else{
		echo '<meta http-equiv="refresh" content="0;URL=index.php" />';
	//}*/
?>