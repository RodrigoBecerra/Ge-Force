<?php
	$host = "localhost";
	$db = mysqli_connect($host,"root","","horarios");
	if(!$db)  echo "Error en la conexión de BD";
?>