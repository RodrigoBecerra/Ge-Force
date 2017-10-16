<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>verificar</title>
</head>
<body>
<h1>cargando</h1>
<?php
	$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
	if(stripos($ua,'android') !== false) { // && stripos($ua,'mobile') !== false) {
		header('Location: php/celuMenu.php');
		exit();
	}
	else{
		header('Location: php/indexPC.php');
		exit();
	}
?>
</body>
</html>
