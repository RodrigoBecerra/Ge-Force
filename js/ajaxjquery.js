$(document).ready(Principal);

function Principal(){
	$("#ID_BuscarPC").click(MostrarPC);
	$("#ID_BuscarCELU").click(MostrarCELU);
}

function MostrarPC(){
	$.ajax({
		url: "buscador.php?busca="+$("#buscaPC").val(), 
		success: function(datos){
			$("#contenido").html(datos);
		}
	})
}

function MostrarCELU(){
	$.ajax({
		url: "buscador.php?busca="+$("#buscaCELU").val(), 
		success: function(datos){
			$("#ins").html(datos);
		}
	})
}