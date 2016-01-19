<?php
	$nick = $_GET['nick'];
	//echo $nick;
?>

<html>
	<head>
		<title>Chat-Line</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Refresh" content="5;URL=chat.php">
		<script language="javascript">
			function ultima() {
				location.href = "#ultima";
			}
		</script>
	</head>
	<body onLoad="javascript:ultima()">
		<?php include("chat.txt"); ?>
		<a name="ultima"> </a>
		
		<?php include("".$nick.".txt"); ?>
		<a name="ultima"> </a>
	</body>
</html>
