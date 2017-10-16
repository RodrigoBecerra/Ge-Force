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
		<?php require("menu.php")?>
		<div style="padding: 10px;color: black;">
			<div class="cuadhor" style="text-align: center;">
				<h1 id="ti">espacio para dar a conocer el año y seccion</h1>
			</div>
			<div style="display: flex;flex-direction:row;">
				<div class="cuadvert" style="text-align: left; flex-basis:50%;">
					<h1>aqui va el horario</h1>
				</div><br>
				<!--disqus-->

				<div id="disqus_thread" style="text-align: left; flex-basis:50%;"></div>
				<script>
				(function() {
				var d = document, s = d.createElement('script');
				s.src = 'https://petdi1.disqus.com/embed.js';
				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				<!--fin disqus-->
			</div>
			<h1>.</h1>
		</div>
	</div>
</body>
</html>