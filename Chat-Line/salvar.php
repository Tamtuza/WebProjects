<?php
	$nick = $_GET['nick'];
	$ponteiro = fopen ("chat.txt","r");
	
	while (!feof ($ponteiro)) {
		  $linha = fgets($ponteiro,4096);
	}
	
	$abre = fopen("gravacao.txt", "a");

	if($abre) {
		fwrite($abre,$linha);
	}

	fclose($abre);

?>
<meta http-equiv="refresh" content="0; url=chat.php?nick=<?php echo $nick;?>">