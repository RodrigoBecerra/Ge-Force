<!Doctype html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
// Conectarse al motor de Base de Datos
include("../conex.inc");
$busca=$_GET["T1"];

//Hacer la consulta
$consulta = "Select * FROM Asignatura
            WHERE Asignatura OR Profesor OR Repeticion LIKE $busca";
$respuesta = mysqli_query($db, $consulta);
if(mysqli_num_rows($respuesta)==0) echo "Registro No encontrado";

if($respuesta)

  //Mostramos la respuesta
	while($fila = mysqli_fetch_object($respuesta))
    	echo "$fila->Nombre $fila->Apellido $fila->Sexo $fila->FechaNacimiento $fila->Sueldo $fila->Departamento $fila->descripcion <br>";
else
  echo "Error!!!!";
?>
</body>
</html>