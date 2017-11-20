<?php
	$host = "localhost";
	$db = mysqli_connect($host,"root","","horario");
	if(!$db)  echo "Error en la conexión de BD";
?>