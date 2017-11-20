<!Doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
// Conectarse al motor de Base de Datos
include("../conex.inc");
$busca= $_POST["busca"];

//Hacer la consulta
$consulta = "Select * FROM asignatura WHERE Profesor LIKE ('%$busca%')";

$respuesta = mysqli_query($db, $consulta);
if(mysqli_num_rows($respuesta)==0) echo "Registro no encontrado";

if($respuesta)
  //Mostramos la respuesta
	while($fila = mysqli_fetch_object($respuesta))
    	echo "$fila->Id_As $fila->Id_Se $fila->Asignatura $fila->Profesor $fila->Repeticion<br>";
else
  echo "Error!!!!";
?>
</body>
</html>