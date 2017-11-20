<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="indexCelu.php"><img class="logo" width="45px" height="45px" src="../logo.png"></a>
      <a href="indexCelu.php" id="titulo" class="navbar-brand">Universidad Catolica<br> de Temuco</a>
    </div>


    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a class="dropdown-toggle" id="año" data-toggle="dropdown" href="#">Año <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="año">

            <li><a href="#" id='a0' onclick="cambnomhor(1,0)" >Año 1</a></li>
            <li><a href="#" id='a1' onclick="cambnomhor(2,0)" >Año 2</a></li>
            <li><a href="#" id='a2' onclick="cambnomhor(3,0)" >Año 3</a></li>
            <li><a href="#" id='a3' onclick="cambnomhor(4,0)" >Año 4</a></li>
            <li><a href="#" id='a4' onclick="cambnomhor(5,0)" >Año 5</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" id="seccion" data-toggle="dropdown" href="#">Seccion<span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="año">

            <li><a href="#" id='0' onclick="cambnomhor(0,1)" >Sección 1</a></li>
            <li><a href="#" id='1' onclick="cambnomhor(0,2)" >Sección 2</a></li>
            <li><a href="#" id='2' onclick="cambnomhor(0,3)" >Sección 3</a></li>
          </ul>
        </li>
          <!--Buscador-->
                  <form class="form-inline" method="POST" action="buscador.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="busca" size="20">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                    </form>
      </ul>
    </div>
  </div>
</nav>