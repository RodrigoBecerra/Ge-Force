/*acciones parte de el grupo geforce
 *no deberia haber algun tipo de inseguridad
 *en caso de haber alguna parte insegura se tendra cambiar
 *por como esta echo ahora se puede acortar mucho
 */
 var r1=0;
 var r2=0;
 console.log("accino");
 function cambnomhor(numa,nums){
 	if(numa==0){
 			numa=r1;
 			console.log("1");
 		}
 	if(nums==0){
 			nums=r2;
 			console.log("2");
 	}

 	if(numa!=0 && nums!=0){
 		console.log("change");
 		document.getElementById("ti").innerHTML ="año "+numa+" seccion "+nums;
 		mostrarhor(numa,nums);
 		console.log("iz pz")
 	}
 	else{
 		if(numa!=0){
 			r1=numa;
 			r2=0;
 			console.log("3")
 		}
 		if(nums!=0){
 			r1=0;
 			r2=nums;
 			console.log("4")
 		}
 		alert("recuerde insertar el otro valor");
 	}
 }
document.onkeyup=function(e){
  var e = e || window.event; // for IE to cover IEs window event-object
  if(e.altKey && e.which == 65) {
    alert('ayuda:\nnumero=seleccción rapida de año\nq,w,a =seleccción de rapida de sección\nrecuerde que en los comentarios estas opciones no funcionan\nsi no funciona clickee sobre algun lugar');
    return false;
  }
  else if(e.char == 'q'){
  	console.log('hola');
  	r2=1;
  	cambnomhor(0,r2);
  	return false;
  }
  else if(e.char == 'w'){
  	r2=2;
  	cambnomhor(0,r2);
  	return false;
  }
  else if(e.char == 'e'){
  	r2=3;
  	cambnomhor(0,r2);
  	return false;
  }
  else if(e.char == '1'){
  	r1=1;
  	cambnomhor(r1,0);
  	return false;
  }
  else if(e.char == '2'){
  	r1=2;
  	cambnomhor(r1,0);
  	return false;
  }
  else if(e.char == '3'){
  	r1=3;
  	cambnomhor(r1,0);
  	return false;
  }
  else if(e.char == '4'){
  	r1=4;
  	cambnomhor(r1,0);
  	return false;
  }
  else if(e.char == '5'){
  	r1=5;
  	cambnomhor(r1,0);
  	return false;
  }
  /*if(e.which != ''){
  	console.log(e);
  }*/
}