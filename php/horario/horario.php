<?php
require('conexion.php');
DB::open();
$consulta = DB::gethorario();
$cuenta = DB::cuenta()->fetch_object()->cu;
//$cuneta = intval ($cuenta);
$cuent = 0;
DB::close();
echo "<script>
var cuenta = parseInt($cuenta);
var hora = new Array(cuenta);
var sala = new Array(cuenta);
var dia = new Array(cuenta);
var año = new Array(cuenta);
console.log('$cuenta');
</script>";
while ($registro = $consulta->fetch_object()){  
	//$nombre = ucfirst(strtolower($registro->nombre)); para usar en el futuro en los nombres
	$hora = $registro->Hora ? $registro->Hora : "no hay hora disponible";
	$sala = $registro->Sala ? $registro->Sala : "no hay sala";
	$dia = $registro->Dia ? $registro->Dia : "no hay dia disponible";
	$año = $registro->A ? $registro->A : "no hay año disponible";
	$seccion = $registro->Seccion ? $registro->Seccion : "no hay Seccion disponible";
	echo "<script>
	hora[$cuent] = '$hora';
	sala[$cuent] = '$sala';
	dia[$cuent] = '$dia';
	año[$cuent] = '$año';
	seccion[$cuent] = '$seccion';
	</script>";


	//solo se muestra para ver todo en caso de necesitarlo
	/*echo "<p>hora: $hora</p>
	<p>sala: $sala</p>
	<p>dia: $dia</p>
	<p>año: $año</p>
	<p>seccion: $seccion</p>
	<p>---------------------------------------</p>
	";*/
	$cuent++;
}
require('tabla.php');


?>