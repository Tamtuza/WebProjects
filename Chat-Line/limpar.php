<?php
	$abre = fopen("chat.txt", "w+");
	fclose($abre);
	header("Location: batepapo.php", true, 307); 
?>