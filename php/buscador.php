<!Doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php
// Conectarse al motor de Base de Datos
include("../conex.inc");
$busca= $_POST["busca"];

//Hacer la consulta
$consulta2 = "SELECT * FROM asignatura as asig
NATURAL JOIN horario as ho  WHERE asig.Asignatura LIKE ('%$busca%')";
$consulta = "SELECT * FROM asignatura as asig
NATURAL JOIN horario as ho  WHERE asig.Profesor LIKE ('%$busca%')";


$respuesta = mysqli_query($db, $consulta);

if($respuesta){
  //Mostramos la respuesta
	echo "<table class='table table-hover'>";
	echo "<thead><tr><th>Codigo Asignatura</th> <th>Hora</th> <th>Seccion</th> <th>Asignatura</th> <th>Profesor</th> <th>Nivel</th> <th>Dia</th> <th>Repeticion</th></tr></thead><tbody>";
	while($fila = mysqli_fetch_object($respuesta)){
    	echo "<tr><th>$fila->Id_As</th> <th>$fila->Hora</th> <th>$fila->Id_Se</th> <th>$fila->Asignatura</th><th>$fila->Profesor</th> <th>$fila->A</th> <th>$fila->Dia</th> <th>$fila->Repeticion</th></tr>";
    }

	echo "</tbody></table>";
}
else{
	echo "No se encontro el resultado.";
}

$respuesta2 = mysqli_query($db, $consulta2);
if($respuesta2){
  //Mostramos la respuesta
	echo "<table class='table'>";
	echo "<thead><tr><th>Codigo Asignatura</th> <th>Hora</th> <th>Seccion</th> <th>Asignatura</th> <th>Profesor</th> <th>Nivel</th> <th>Dia</th> <th>Repeticion</th></tr></thead><tbody>";
	while($fila = mysqli_fetch_object($respuesta2)){
    	echo "<tr><th>$fila->Id_As</th> <th>$fila->Hora</th> <th>$fila->Id_Se</th> <th>$fila->Asignatura</th><th>$fila->Profesor</th> <th>$fila->A</th> <th>$fila->Dia</th> <th>$fila->Repeticion</th></tr>";
    }

	echo "</tbody></table>";
}
else{
	echo "No se encontro el resultado.";
}
?>
<a href="indexPC.php"><button class="btn btn-default">Volver a la pagina principal</button></a>
</body>
</html>