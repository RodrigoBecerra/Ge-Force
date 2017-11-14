/*acciones parte de el grupo geforce
 *no deberia haber algun tipo de inseguridad
 *en caso de haber alguna parte insegura se tendra cambiar
 *por como esta echo ahora se puede acortar mucho
 */
 var numa=0;
 var nums=0;
 var r = [0,0];
 console.log("accino");

 function mostrarhor(x,y){
   console.log(x,"-",y);
 }

 function cambnomhor(numa,nums){
    if(numa!=0){
      r[0]=numa;
    }
    if(nums!=0){
      r[1]=nums;
    }
   	if(r[0]!=0 && r[1]!=0){
   		document.getElementById("ti").innerHTML ="año "+r[0]+" seccion "+r[1];
   		mostrarhor(r[0],r[1]);
      horario(r[0],r[1]);
   		console.log("iz pz");
   	}
    else{
      alert("recuerde insertar el otro valor");
    }
  }

  function horario(numa,nums){ //numa= año nums= seccion
    for(var i=0;i<cuenta;i++){
      if(año[i]==numa && seccion[i]==nums){
        hora[i]
      }
    }
  }

  function camcolor(color,id){
    document.getElementById(id).style = "background-color: "+color;
    console.log("id ",id," color ",color);
  }

document.onkeyup=function(e){
  var e = e || window.event; // for IE to cover IEs window event-object
  if(e.altKey && e.which == 65) {
    alert('ayuda:\nnumero=seleccción rapida de año\nq,w,a =seleccción de rapida de sección\nrecuerde que en los comentarios estas opciones no funcionan\nsi no funciona clickee sobre algun lugar');
    return false;
  }
  else if(e.char == 'q'){
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
