<?php
require('conexion.php');
DB::open();
$consulta = DB::celu();
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
var seccion = new Array(cuenta);
var id_As = new Array(cuenta);
var profe = new Array(cuenta);
var asig = new Array(cuenta);
console.log('$cuenta');
";
while ($registro = $consulta->fetch_object()){
	//$nombre = ucfirst(strtolower($registro->nombre)); para usar en el futuro en los nombres
	$hora = $registro->Hora ? $registro->Hora : "no hay hora disponible";
	$sala = $registro->Sala ? $registro->Sala : "no hay sala";
	$dia = $registro->Dia ? $registro->Dia : "no hay dia disponible";
	$año = $registro->A ? $registro->A : "no hay año disponible";
	$seccion = $registro->Seccion ? $registro->Seccion : "no hay Seccion disponible";
	$Id_As = $registro->Id_As ? $registro->Id_As : "no hay id_As";
	$profe = $registro->Profesor ? utf8_encode($registro->Profesor) : "no hay Profesor";
	$asignatura = $registro->Asignatura ? utf8_encode($registro->Asignatura) : "no hay sala";
	echo"hora[$cuent] = '$hora';
	sala[$cuent] = '$sala';
	dia[$cuent] = '$dia';
	año[$cuent] = '$año';
	seccion[$cuent] = '$seccion';
	id_As[$cuent] = '$Id_As';
	profe[$cuent] = '$profe';
	asig[$cuent] = '$asignatura';";


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
echo "</script>";
if(!empty($_GET['v'])){$vurl = $_GET['v'];}else{$vurl = "no";}

if($vurl != "no"){
	require('tabla.php');
	echo "
	<script>
		var ysd = '$vurl';
		var paratababla = ysd.split('');
		if(paratababla.length > 1){
			holaXD(paratababla[0],paratababla[1]);
		}
	</script>
	";
}
else{
	//news
	require('noticias/noticias.php');
}

?>
