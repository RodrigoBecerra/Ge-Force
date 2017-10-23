<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>pagina</title>
	<script src="../js/accino.js"></script>
	<!--cambiar al final para carga mas rapida-->
	<script src="../js/jQuery.js"></script>
	<script src="../js/popper.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/anime.js"></script>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/extra.css">
</head>
<body>
	<div class="fondo" style="text-align: center;">
	<h1 style="background-color: rgba(40,40,40,1);">titulo</h1>
		<?php require("menu.php") ?>



		<div style="padding: 10px;color: black;">
			<div class="cuadhor" style="text-align: center;">
				<h1 id="ti">espacio para dar a conocer el año y seccion</h1>
			</div>
			<div style="display: flex;flex-direction:row;">
				<div class="cuadvert" style="text-align: left; flex-basis:50%;">
					<h1>aqui va el horario</h1>
					




					<?php
						require('horario\conexion.php');
					    DB::open();
					    $consulta = DB::gethorario();
					    DB::close();
					    while ($registro = $consulta->fetch_object()){  
					      //$nombre = ucfirst(strtolower($registro->nombre)); para usar en el futuro en los nombres
					      $hora = $registro->Hora ? $registro->Hora : "no hay hora disponible";
					      $sala = $registro->Sala ? $registro->Sala : "no hay sala";
					      $dia = $registro->Dia ? $registro->Dia : "no hay dia disponible";
					      //$año = $registro->Año ? $registro->Año : "no hay año disponible";     aun no funciona
					      $seccion = $registro->Seccion ? $registro->Seccion : "no hay Seccion disponible";

					      echo "<p>hora: $hora</p>
								<p>sala: $sala</p>
								<p>dia: $dia</p>
								<p>seccion: $seccion</p>
								<p>---------------------------------------</p>
					      		";//<p>año: $año</p>
					      }
					 ?>




				</div><br>




				<!--disqus-->
				<div id="disqus_thread" style="text-align: left; flex-basis:50%;margin: 0px 10px;"></div>
				<?php require("disqus.php") ?>
				<!--fin disqus-->
			</div>
			<h1>alt+a=ayuda</h1>
		</div>
	</div>
</body>
</html>
