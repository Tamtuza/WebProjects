<?php
	$nick = $_POST['nick'];
	$cor = $_POST['cor'];
	if($nick == ""){
		echo "<script> location.href='index.php'; </script>";
		exit;
	}
	$abre = fopen("chat.txt", "a");
	if($abre) {
		fwrite($abre,"<b><font color={$cor}>{$nick}</font color={$cor}><i> saiu do chat.</i></b><br>");
	}
	fclose($abre);
	
	//Retira do status de online os usuários que saem do chat.
	//Não tá funfando. =/
	$abre2 = fopen("user.txt", "a");
	if($abre2) {
		$filedata = str_replace($nick, " aca", $abre2);
	}
	fclose($abre2);
	
	header("Location: index.php",TRUE,307); 
?>