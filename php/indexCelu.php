<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>pagina</title>
	<script src="../js/accinoCelu.js"></script>
	<link rel="stylesheet" href="../css/extraCelu.css">
</head>
<body>
  <?php require("menuCelu.php") ?>
  <div class="colorg" style="background-size: contain;">
    <h1 id="ti">espacio para dar a conocer el año y seccion</h1>
  </div>
  <div class="colorg" style="background-size: contain;text-align: center;">
    <?php require("horario\horario.php") ?>
  </div>
	<!--disqus-->
	<div id="disqus_thread"></div>
	<?php require("disqus.php") ?>
	<!--fin disqus-->
  <h1>.</h1>
</body>
</html>
