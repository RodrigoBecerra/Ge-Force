<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Horarios</title>
	<script src="../js/accinoCelu.js"></script>
	<link rel="stylesheet" href="../css/extraCelu.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <?php require("menuCelu.php") ?>
  <?php require("horario\horarioCelu.php") ?>


  <div class="colorg" style="background-size: contain;">
    <h4 id="ti">seleccione arriba el año y seccion.</h4>
    <!-- no tocar esto --><div id="ins"></div>
  </div>


  <div class="colorg" style="background-size: contain;text-align: center;">
    
  </div>
	<!--disqus-->
	<div id="disqus_thread"></div>
	<?php require("disqus.php") ?>
	<!--fin disqus-->
  <h1>.</h1>
</body>
</html>
