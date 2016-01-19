<?php
	$nomes = fopen("user.txt", "r");	
	$nick = $_POST["botao"];
	$user = $_POST["user"];
	
	if($nick == ""){
		echo "<script> location.href='index.php'; </script>";
		exit;
	}	
	
	$abre3 = fopen($nick.".txt", "a");
	
	if($abre3) {
		fwrite($abre3, "");
	}
	
	fclose($abre3);

?>
    <head>
        <title>Chat-Line (On Private)</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
 		  <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
<body bgcolor="white">
	<div id="chat">
 	<div>
 		<iframe name="chat2" src="chat_part.php?nick=<?php echo $nick;?>&user=<?php echo $user;?>" width="800" height="400" frameborder="0">
 			Atualize seu navegador.
 		</iframe><br>
 	</div>
 	
 	<div id="msg">
 		<iframe name="ultimo" src="ultima.php" frameborder="0" width="400" height=16 marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no>
 			Favor atualizar seu navegador.
 		</iframe>
 	</div>
	</div>
	
	
	<div id="batepapo">	
	<table border="0" width="800" id="forms">
	<tr>
		<td>
			<!--FORM DE FALA-->
			<br>
			<form name ="form" action="gravar_part.php?nick=<?php echo $nick;?>" method="post" target="chat2">
					
					<input name="nick" type="hidden" value="<?php echo $user ?>">
					<b><?php echo $user;?></b>
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
				  </select> : <input type="text" name="texto"> <input type="submit" value="Falar">
			</form>
			<br><br>
		</td>	
	</tr>		
	</table>		
	</div>
</body>
</html>
