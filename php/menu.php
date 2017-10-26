<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	<a class="navbar-brand">barra</a>
	<button class="navbar-toggler" aria-expanded="true" aria-controls="barri3" arial-label="toggle navigation" type="button" data-toggle="collapse" data-target="#barri3">
		<span class="navbar-toggler-icon"></span>
	</button>
    <div class="navbar-nav mr-auto">
        <div class="navbar-collapse collapse" id="barri3">
			<ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="indexPC.php">Principal</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="año" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown">año</a>
					<div class="dropdown-menu" aria-labelledby="año">
						<?php 
						for($i=0;$i<5;$i++){
							echo '<a class="dropdown-item" id="a$i" onclick="cambnomhor("',$i+1,'",0)" >año ',$i+1,'</a>';
							if($i!=4){echo "<br>";};
						}
						?>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="seccion" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown">seccion</a>
						<div class="dropdown-menu" aria-labelledby="seccion">
							<?php
							for($i=0;$i<3;$i++){
								echo "<a class='dropdown-item' id='$i' onclick='cambnomhor(0,",$i+1,")' >seccion ",$i+1,"</a>";
								if($i!=2){echo "<br>";};
							}
							?>
						</div>
				</li>
			<!--<li class="nav-item"><a class="nav-link" href="pag2.html">R2</a></li>
            <li class="nav-item"><a class="nav-link" href="pag3.html">R3</a></li>
			-->
			</ul>
        </div>
    </div>
</nav>