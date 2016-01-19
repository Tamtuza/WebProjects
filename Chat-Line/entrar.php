<?php
	$nick = $_POST['nick'];
	$cor = $_POST['cor'];
	if($nick == ""){
		echo "<script> location.href='index.php'; </script>";
		exit;
	}
	$abre = fopen("chat.txt", "a");
	if($abre) {
		fwrite($abre,"<b><font color={$cor}>{$nick}</font color={$cor}><i> entrou no chat.</i></b><br>");
	}
	fclose($abre);
	
	//Grava os usuarios que entram no chat.
	$abre2 = fopen("user.txt", "a");
	if($abre2) {
		fwrite($abre2, "\n".$nick." ");
	}
	fclose($abre2);
	
	header("Location: batepapo.php",TRUE,307); 
?>