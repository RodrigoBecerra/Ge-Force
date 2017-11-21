<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
          	<a href="indexPC.php"><img class="logo" width="50px" height="50px" src="../logo.png"></a>
						<a href="indexPC.php" class="navbar-brand">Universidad Catolica<br> de Temuco</a>
						<button class="navbar-toggler" aria-expanded="true" aria-controls="barri3" arial-label="toggle navigation" type="button" data-toggle="collapse" data-target="#barri3">
							<span class="navbar-toggler-icon"></span>
						</button>
            <div class="navbar-nav mr-au o">
              <div class="navbar-collapse collapse" id="barri3">
								<ul class="navbar-nav mr-auto">
                 				 <li class="nav-item"><a class="nav-link" href="indexPC.php">Inicio</a></li>

                 				 <!--Año-->
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" id="año" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown">Año</a>
										<div class="dropdown-menu" aria-labelledby="año">
											<a class="dropdown-item" id='a0' onclick="cambnomhor(1,0)" >Año 1</a><br>
											<a class="dropdown-item" id='a1' onclick="cambnomhor(2,0)" >Año 2</a><br>
											<a class="dropdown-item" id='a2' onclick="cambnomhor(3,0)" >Año 3</a><br>
											<a class="dropdown-item" id='a3' onclick="cambnomhor(4,0)" >Año 4</a><br>
											<a class="dropdown-item" id='a4' onclick="cambnomhor(5,0)" >Año 5</a>
										</div>
									</li>

									<!--Seccion-->
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" id="seccion" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown">Sección</a>
										<div class="dropdown-menu" aria-labelledby="seccion">
											<a class="dropdown-item" id='0' onclick="cambnomhor(0,1)" >Sección 1</a><br>
											<a class="dropdown-item" id='1' onclick="cambnomhor(0,2)" >Sección 2</a><br>
											<a class="dropdown-item" id='2' onclick="cambnomhor(0,3)" >Sección 3</a>
										</div>
									</li>

									<!--Buscador-->
									
									<div class="form-inline">
    									<div class="form-group">
      										<input type="text" class="form-control" id="buscaPC" size="20">
    									</div>
    									<input id="ID_BuscarPC" type="submit" class="btn btn-default" value="Buscar">
    								</div>
  									
								</ul>
              </div>
            </div>
          </nav>