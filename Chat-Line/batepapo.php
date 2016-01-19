<?php
	$nick = $_POST['nick'];
	$cor = $_POST['cor'];
	if($nick == ""){
		echo "<script> location.href='index.php'; </script>";
		exit;
	}
?>

<html>
	<head>
		<title>Chat-Line</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id="container">
			<div id="chat">
					<iframe name="chat" src="chat.php?nick=<?php echo $nick;?>">
						Atualize seu navegador.
				</iframe>
				</div>         				
				<div id="msg">
					<iframe name="ultimo" src="ultima.php" scrolling="no">
						Favor atualizar seu navegador.
				</iframe>
				</div>
		</div>
		<div id="contatos">
					<iframe name="contatos" src="contatos.php?nick=<?php echo $nick;?>">
						Atualize seu navegador.
				</iframe>
		</div>
		<!--FORM DE FALA-->
		<hr color="white">
		<div id="comandos">
		<form action="gravar.php" method="post" target="chat">
			<font color="<?php echo $cor ?>"><b><?php echo $nick ?></b></font color="<?php echo $cor ?>">
			<input name="nick" type="hidden" value="<?php echo $nick ?>">
			<input name="cor" type="hidden" value="<?php echo $cor ?>">
			<select name="acao">
				<option value="fala" selected>fala</option>
				<option value="grita">grita</option>
				<option value="beija">beija</option>
				<option value="canta">canta</option>
				<option value="pergunta">pergunta</option>
				<option value="concorda">concorda</option>
				<option value="discorda">discorda</option>
				<option value="desculpa-se">desculpa-se</option>
				<option value="surpreende-se">surpreende-se</option>
				<option value="sorri">sorri</option>
				<option value="diverte-se">diverte-se</option>
				<option value="briga">briga</option>
				<option value="dá o fora">dá o fora</option>
			</select>
			:
			<input type="text" name="texto" value=""> <input type="submit" value="Falar">
		</form>
		<!-- Botão Sair -->
		<form action="sair.php" method="post">
			<input name="nick" type="hidden" value="<?php echo $nick ?>">
			<input name="cor" type="hidden" value="<?php echo $cor ?>">
			<input type="submit" value="Sair">
		</form>
		<!-- Botão Limpar -->
		<form action="limpar.php" method="post">
			<input name="nick" type="hidden" value="<?php echo $nick ?>">
			<input name="cor" type="hidden" value="<?php echo $cor ?>">
			<input type="submit" value="Limpar Chat">
		</form>
		<!-- Botão Gravar -->
		<form action="gravarcv.php" method="post">
			<input name="nick" type="hidden" value="<?php echo $nick ?>">
			<input name="cor" type="hidden" value="<?php echo $cor ?>">
			<input type="submit" value="Gravar Conversa">
		</form>
		</div>
		</font>
	</body>
</html>
