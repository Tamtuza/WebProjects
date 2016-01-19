<?php
	$hora= date("h:i:s");
	$hora1= date("h-i-s");
	$abre = fopen("chat.txt", "a");
	if($abre) {
		fwrite($abre,"<b><font color='red'> Conversa Gravada as ".$hora."</b></font><br>");
	}
	fclose($abre);
	copy('chat.txt','ConversaGravada'.$hora1.'.txt');
	header("Location: batepapo.php",TRUE,307); 
?>