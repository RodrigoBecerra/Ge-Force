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
$consulta = "SELECT * FROM asignatura as asig
NATURAL JOIN horario as ho  WHERE Profesor LIKE ('%$busca%')";

$respuesta = mysqli_query($db, $consulta);
if(mysqli_num_rows($respuesta)==0) echo "Registro no encontrado";

if($respuesta){
  //Mostramos la respuesta
	echo "<table class='table'>";
	echo "<thead><tr><th>Codigo Asignatura</th> <th>Seccion</th> <th>Asignatura</th> <th>Profesor</th><th>Repeticion</th></tr></thead><tbody>";
	while($fila = mysqli_fetch_object($respuesta)){
    	echo "<tr><th>$fila->Id_As</th> <th>$fila->Id_Se</th> <th>$fila->Asignatura</th> <th>$fila->Profesor</th> <th>$fila->Repeticion</th></tr>";
    }

	echo "</tbody></table>";
}
else{
	echo "No se encontro el resultado.";
}
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</body>
</html>