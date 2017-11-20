function edge(ste){
  ste.innerHTML = "alt+a ayuda";
  console.log("egde");
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
