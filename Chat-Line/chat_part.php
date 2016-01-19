<?php
	$nick = $_GET['nick'];
	$user = $_GET['user'];
?>
<html>
	<head>
		<title>Chat-Line (On Private)</title>
		<script language="javascript">
			function ultima() {
				location.href = "#ultima";
			}
		</script>
	</head>
<body onLoad="javascript:ultima()">

	<meta http-equiv="Refresh" content="5;URL=chat_part.php?nick=<?php echo $nick;?>&user=<?php echo $user;?>">
	
	<table border="0" width="790">
		<tr>
		<td>
				<center>
						<font color='blue'>Mensagens enviadas para <b><?php echo $nick;?></b></font>
				</center>
				<?php
					include("".$nick.".txt"); 
				?>
		</td>
		</tr>
	</table>
</body>
</html>
