<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>InfHorariosUCT</title>
	<script src="../js/accino.js"></script>
	<?php $user_agent = $_SERVER['HTTP_USER_AGENT']; if(strpos($user_agent, 'Edge') !== FALSE){echo "<script src='../js/edgepluss.js'></script>";} ?>
</head>
<body>
	<div class="fondo" style="text-align: center;">
	<h1 style="background-color: rgba(40,40,40,1);">titulo</h1>
		<?php require("menuPC.php") ?>
		<div style="padding: 10px;color: black;margin-top: 35px;">
			<div style="display: flex;flex-direction:row;">
				<div id="contenido" class="cuadvert" style="background-color:white; color: black;text-align: left; flex-basis:50%;">
					<?php require("horario\horario.php") ?>
				</div><br> 
				<!--disqus-->
				<div id="disqus_thread" style="text-align: left; flex-basis:50%;margin: 0px 10px;"></div>
				<?php require("disqus.php") ?>
				<!--fin disqus-->
			</div>
			<!-- <?php require("horario/horaLocal.php") ?> -->
			<h1 id="fin"<?php if(strpos($user_agent, 'Edge') !== FALSE){ echo" onload='edge(this)' onclick='edge(this)'>presiona";}else{echo">.";} ?></h1>
		</div>
	</div>
	<script src="../js/jQuery.js"></script>
	<script src="../js/popper.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/anime.js"></script>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/principal.css">
	<link rel="stylesheet" type="text/css" href="../css/tabla.css">
	<link rel="shortcut icon" href="../1.ico" >
	<script src="../js/ajaxjquery.js"></script>
</body>
</html>