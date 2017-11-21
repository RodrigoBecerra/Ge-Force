$(document).ready(Principal);

function Principal(){
	$("#ID_Buscar").click(Mostrar);
}

function Mostrar(){
	$.ajax({
		url: "buscador.php?busca="+$("#busca").val(), 
		success: function(datos){
			$("#contenido").html(datos);
		}
	})
}