<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	<a class="navbar-brand">barra</a>
	<button class="navbar-toggler" aria-expanded="true" aria-controls="barri3" arial-label="toggle navigation" type="button" data-toggle="collapse" data-target="#barri3">
		<span class="navbar-toggler-icon"></span>
	</button>
    <div class="navbar-nav mr-auto">
        <div class="navbar-collapse collapse" id="barri3">
			<ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="indexPC.html">Principal</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="año" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown">año</a>
					<div class="dropdown-menu" aria-labelledby="año">
						<a class="dropdown-item" id='a0' onclick="cambnomhor(1,0)" >año 1</a><br>
						<a class="dropdown-item" id='a1' onclick="cambnomhor(2,0)" >año 2</a><br>
						<a class="dropdown-item" id='a2' onclick="cambnomhor(3,0)" >año 3</a><br>
						<a class="dropdown-item" id='a3' onclick="cambnomhor(4,0)" >año 4</a><br>
						<a class="dropdown-item" id='a4' onclick="cambnomhor(5,0)" >año 5</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="seccion" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown">seccion</a>
						<div class="dropdown-menu" aria-labelledby="seccion">
							<a class="dropdown-item" id='0' onclick="cambnomhor(0,1)" >seccion 1</a><br>
							<a class="dropdown-item" id='1' onclick="cambnomhor(0,2)" >seccion 2</a><br>
							<a class="dropdown-item" id='2' onclick="cambnomhor(0,3)" >seccion 3</a>
						</div>
				</li>
			<!--<li class="nav-item"><a class="nav-link" href="pag2.html">R2</a></li>
            <li class="nav-item"><a class="nav-link" href="pag3.html">R3</a></li>
			-->
			</ul>
        </div>
    </div>
</nav>