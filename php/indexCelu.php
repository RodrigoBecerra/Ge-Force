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
  <!-- barra-->
  <div class="colorn">
    <select id="a" onchange="cambnomhor()">
      <option value="1" selected>año 1</option>
      <option value="2">año 2</option>
      <option value="3">año 3</option>
      <option value="4">año 4</option>
      <option value="5">año 5</option>
    </select>
    <select id="s" onchange="cambnomhor()">
      <option value="1" selected>seccion 1</option>
      <option value="2">seccion 2</option>
      <option value="3">seccion 3</option>
    </select>
  </div>
  <!-- fin barra -->
  <div class="colorg" style="background-size: contain;">
    <h1 id="ti">espacio para dar a conocer el año y seccion</h1>
  </div>
  <div class="colorg" style="background-size: contain;">
    <h1>aqui va el horario</h1>
  </div>

  <!--disqus-->
  <div id="disqus_thread"></div>
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
  <h1>.</h1>
</body>
</html>