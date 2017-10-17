<?php
	$host = "localhost";
	$db = mysqli_connect($host,"root","","Horarios");
	if(!$db)  echo "Error en la conexión de BD";
?>