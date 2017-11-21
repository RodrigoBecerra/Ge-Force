<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      

      <div>
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
        </button>
        <input type="text" id="buscaCELU">
        <button id="ID_BuscarCELU" type="submit" class="btn btn-default">Buscar</button>
      </div>


    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a class="dropdown-toggle" id="año" data-toggle="dropdown" href="#">Año <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="año">

            <li><a href="#" id='a0' onclick="cambnomhor(1,0,0)" >Año 1</a></li>
            <li><a href="#" id='a1' onclick="cambnomhor(2,0,0)" >Año 2</a></li>
            <li><a href="#" id='a2' onclick="cambnomhor(3,0,0)" >Año 3</a></li>
            <li><a href="#" id='a3' onclick="cambnomhor(4,0,0)" >Año 4</a></li>
            <li><a href="#" id='a4' onclick="cambnomhor(5,0,0)" >Año 5</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" id="seccion" data-toggle="dropdown" href="#">Seccion<span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="seccion">

            <li><a href="#" id='0' onclick="cambnomhor(0,1,0)" >Sección 1</a></li>
            <li><a href="#" id='1' onclick="cambnomhor(0,2,0)" >Sección 2</a></li>
            <li><a href="#" id='2' onclick="cambnomhor(0,3,0)" >Sección 3</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" id="dia" data-toggle="dropdown" href="#">Dia<span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="dia">

            <li><a href="#" id='d0' onclick="cambnomhor(0,0,6)" >Todos</a></li>
            <li><a href="#" id='d0' onclick="cambnomhor(0,0,1)" >Lunes</a></li>
            <li><a href="#" id='d1' onclick="cambnomhor(0,0,2)" >Martes</a></li>
            <li><a href="#" id='d2' onclick="cambnomhor(0,0,3)" >Miercoles</a></li>
            <li><a href="#" id='d3' onclick="cambnomhor(0,0,4)" >Jueves</a></li>
            <li><a href="#" id='d4' onclick="cambnomhor(0,0,5)" >Viernes</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>