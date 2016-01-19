<?php
	$nick = $_GET['nick'];
	$sobrescrever = "";
	$abre = fopen("".$nick.".txt", "w+");
	
	if($abre) {
		fwrite($abre,$sobrescrever);
	}
	
	fclose($abre);
?>

<meta http-equiv="refresh" content="0; url=chat.php?nick=<?php echo $nick;?>">
