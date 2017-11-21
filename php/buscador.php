<!Doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <style>
 	body{
 		background-color: rgba(25,25,25,0.1);
 	}
 </style>
</head>
<body>
<?php
// Conectarse al motor de Base de Datos
include("../conex.inc");
$busca=$_GET["busca"];

//Hacer la consulta

$consulta = "SELECT * FROM asignatura as asig
NATURAL JOIN horario as ho  WHERE asig.Profesor LIKE ('%$busca%')";

$consulta2 = "SELECT * FROM asignatura as asig
NATURAL JOIN horario as ho  WHERE asig.Asignatura LIKE ('%$busca%')";

$consulta3 = "SELECT * FROM asignatura as asig
NATURAL JOIN horario as ho  WHERE asig.Id_As LIKE ('%$busca%')";

$consulta4 = "SELECT * FROM asignatura as asig
NATURAL JOIN horario as ho  WHERE ho.Dia LIKE ('%$busca%')";

$consulta5 = "SELECT * FROM asignatura as asig
NATURAL JOIN horario as ho  WHERE ho.A LIKE ('%$busca%')";

$consulta6 = "SELECT * FROM asignatura as asig
NATURAL JOIN horario as ho  WHERE asig.Repeticion LIKE ('%$busca%')";

$respuesta = mysqli_query($db, $consulta);
$res1=mysqli_fetch_object($respuesta);
if(isset($res1->Hora)){
  //Mostramos la respuesta
	echo "<table class='table table-hover tabusca'>";
	echo "<thead><tr><th>Codigo Asignatura</th> <th>Hora</th>  <th>Sala</th> <th>Seccion</th> <th>Asignatura</th> <th>Profesor</th> <th>Nivel</th> <th>Dia</th> </tr></thead><tbody>";
	while($fila = mysqli_fetch_object($respuesta)){
    	echo "<tr><th>$fila->Id_As</th> <th>$fila->Hora</th> <th>$fila->Sala</th>  <th>$fila->Id_Se</th> <th>$fila->Asignatura</th><th>$fila->Profesor</th> <th>$fila->A</th> <th>$fila->Dia</th> </tr>";
    }

	echo "</tbody></table>";
}

$respuesta2 = mysqli_query($db, $consulta2);
$res2=mysqli_fetch_object($respuesta2);
if(isset($res2->Hora)){
  //Mostramos la respuesta
	echo "<table class='table'>";
	echo "<thead><tr><th>Codigo Asignatura</th> <th>Hora</th> <th>Sala</th> <th>Seccion</th> <th>Asignatura</th> <th>Profesor</th> <th>Nivel</th> <th>Dia</th> </tr></thead><tbody>";
	while($fila = mysqli_fetch_object($respuesta2)){
    	echo "<tr><th>$fila->Id_As</th> <th>$fila->Hora</th> <th>$fila->Sala</th> <th>$fila->Id_Se</th> <th>$fila->Asignatura</th><th>$fila->Profesor</th> <th>$fila->A</th> <th>$fila->Dia</th> </tr>";
    }

	echo "</tbody></table>";
}


$respuesta3 = mysqli_query($db, $consulta3);
$res3=mysqli_fetch_object($respuesta3);
if(isset($res3->Hora)){
  //Mostramos la respuesta
	echo "<table class='table'>";
	echo "<thead><tr><th>Codigo Asignatura</th> <th>Hora</th> <th>Sala</th> <th>Seccion</th> <th>Asignatura</th> <th>Profesor</th> <th>Nivel</th> <th>Dia</th> </tr></thead><tbody>";
	while($fila = mysqli_fetch_object($respuesta3)){
    	echo "<tr><th>$fila->Id_As</th> <th>$fila->Hora</th> <th>$fila->Sala</th> <th>$fila->Id_Se</th> <th>$fila->Asignatura</th><th>$fila->Profesor</th> <th>$fila->A</th> <th>$fila->Dia</th> </tr>";
    }

	echo "</tbody></table>";
}

$respuesta4 = mysqli_query($db, $consulta4);
$res4=mysqli_fetch_object($respuesta4);
if(isset($res4->Hora)){
  //Mostramos la respuesta
	echo "<table class='table'>";
	echo "<thead><tr><th>Codigo Asignatura</th> <th>Hora</th> <th>Sala</th> <th>Seccion</th> <th>Asignatura</th> <th>Profesor</th> <th>Nivel</th> <th>Dia</th> </tr></thead><tbody>";
	while($fila = mysqli_fetch_object($respuesta4)){
    	echo "<tr><th>$fila->Id_As</th> <th>$fila->Hora</th> <th>$fila->Sala</th> <th>$fila->Id_Se</th> <th>$fila->Asignatura</th><th>$fila->Profesor</th> <th>$fila->A</th> <th>$fila->Dia</th> </tr>";
    }

	echo "</tbody></table>";
}

$respuesta5 = mysqli_query($db, $consulta5);
$res5=mysqli_fetch_object($respuesta5);
if(isset($res5->Hora)){
  //Mostramos la respuesta
	echo "<table class='table'>";
	echo "<thead><tr><th>Codigo Asignatura</th> <th>Hora</th> <th>Sala</th> <th>Seccion</th> <th>Asignatura</th> <th>Profesor</th> <th>Nivel</th> <th>Dia</th> </tr></thead><tbody>";
	while($fila = mysqli_fetch_object($respuesta5)){
    	echo "<tr><th>$fila->Id_As</th> <th>$fila->Hora</th> <th>$fila->Sala</th> <th>$fila->Id_Se</th> <th>$fila->Asignatura</th><th>$fila->Profesor</th> <th>$fila->A</th> <th>$fila->Dia</th> </tr>";
    }

	echo "</tbody></table>";
}

$respuesta6 = mysqli_query($db, $consulta6);
$res6=mysqli_fetch_object($respuesta6);
if(isset($res6->Hora)){
  //Mostramos la respuesta
	echo "<table class='table'>";
	echo "<thead><tr><th>Codigo Asignatura</th> <th>Hora</th> <th>Sala</th> <th>Seccion</th> <th>Asignatura</th> <th>Profesor</th> <th>Nivel</th> <th>Dia</th> </tr></thead><tbody>";
	while($fila = mysqli_fetch_object($respuesta6)){
    	echo "<tr><th>$fila->Id_As</th> <th>$fila->Hora</th> <th>$fila->Sala</th> <th>$fila->Id_Se</th> <th>$fila->Asignatura</th><th>$fila->Profesor</th> <th>$fila->A</th> <th>$fila->Dia</th> </tr>";
    }

	echo "</tbody></table>";
}


?>
</body>
</html>