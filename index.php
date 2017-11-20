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
	$clienteN = strtolower($_SERVER['HTTP_USER_AGENT']);
	//navegador conocido?
	//detecta microsoft edge, explorer, opera, firefox, chrome y safari
	$nc=((strpos($user_agent, 'MSIE') !== FALSE) || (strpos($user_agent, 'Edge') !== FALSE) || (strpos($user_agent, 'Trident') !== FALSE) || (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE) || (strpos($user_agent, 'Firefox') !== FALSE) || (strpos($user_agent, 'Chrome') !== FALSE) || (strpos($user_agent, 'Safari') !== FALSE) );
	if((stripos($clienteN,'android') !== false) || $nc) { // && stripos($ua,'mobile') !== false) {
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
