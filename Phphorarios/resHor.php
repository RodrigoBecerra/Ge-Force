<?php

$db= mysqli_connect ("localhost","root","","Horarios")
// Recibir opción

$opc = $_GET['opcion'];

// Con la opción recibida se hará la consulta

if($opc == 1){
$consulta = "SELECT ( AQUÍ ESTARÁ LA CONSULTA)
FROM La tabla.
";

$respuesta = mysqli_query($db, $consulta);
// Se muestran los resultados de la consulta
echo " Mensaje de que se ha realizado la consulta "
echo " RESULTADOS DE LA BÚSQUEDA "




?>