<?php
	$nick = $_GET['nick'];
?>
<html>
	<head>
		<meta http-equiv="Refresh" content="5;URL=contatos.php?nick=<?php echo $nick;?>">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />	
	</head>
	<body>	
		Usuários on-line
            	<form name="form" action="batepapo_part.php" method="post" target="_blank">
						<input name="user" type="hidden" value="<?php echo $nick;?>">
						<?php
							$nomes = fopen("user.txt", "r");				
							
							if ($nomes) {
								while (!feof($nomes)) {
									$lines = fgets($nomes, 4096);	
										if(($lines!="\n")&&($lines!="")){
													
											echo '<tr>
													<input name="'.$lines.'" type="hidden" value="'.$lines.'">   
													<td width="200"><input name="botao" type="submit" value="'.$lines.'"></td>
												</tr><br>';
										}
									}
								}				
							fclose($nomes);
						?>
					</form>
			
    </table>			
</body>
</html>
