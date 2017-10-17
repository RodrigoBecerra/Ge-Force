
if (window.XMLHttpRequest) objAjax = new XMLHttpRequest() //para Mozilla
else 
	if (window.ActiveXObject) objAjax = new ActiveXObject("Microsoft.XMLHTTP") //Para IExplorer
			

function AjaxElimina(id){
	url = "phpajax.php?id="+id;
	objAjax.open("GET",url)
	objAjax.send(null)
//PASO03: Recibir la respuesta del servidor
	objAjax.onreadystatechange = VerRespuesta;
	}

function VerRespuesta(){
	if(objAjax.readyState==4)
	document.getElementById("horario").innerHTML = objAjax.responseText;
	}
