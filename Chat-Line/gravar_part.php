<?php
	$nick = $_GET['nick'];
	$user = $_POST['nick'];
	$acao = $_POST['acao'];
	$cor = $_POST['cor'];
	$hora = date("h:i:s");
	
	if($nick == ""){
		echo "<script> location.href='batepapo.php'; </script>";
		exit;
	}	
	
	$texto = $_POST['texto']; 

	$abre = fopen($nick.".txt", "a");
	
	//grava a conversa
	if($abre) {
		fwrite($abre,"<b><font color={$cor}>{$user}</font color={$cor}> <i>{$acao}, às {$hora}</i>:</b> {$texto} <br>\n");
	}
	
	fclose($abre);
 
	// marca hora da ultima mensagem
	$ultima = fopen("ultima.txt", "w");

	fwrite($ultima, $hora);

	fclose($ultima);

?>

<meta http-equiv="refresh" content="0; url=chat_part.php?nick=<?php echo $nick;?>&user=<?php echo $user;?>">