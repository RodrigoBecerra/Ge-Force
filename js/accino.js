/*acciones parte de el grupo geforce
 *no deberia haber algun tipo de inseguridad
 *en caso de haber alguna parte insegura se tendra cambiar
 *por como esta echo ahora se puede acortar mucho
 */
 var horaIB = ["8:00","8:30","9:10","9:40","10:20","10:50","11:30","12:00","12:40","13:10","13:50","14:20","15:00","15:30","16:10","16:40","17:20","17:50","18:30","19:00","19:40","20:10","20:50","21:20"];
 var horaFB = ["8:30","9:00","9:40","10:10","10:50","11:20","12:00","12:30","13:10","13:40","14:20","14:50","15:30","16:00","16:40","17:10","17:50","18:20","19:00","19:30","20:10","20:40","21:20","21:50"];
 var dias = ["Lun","Mar","Mie","Jue","Vie"];
 var numa=0;
 var nums=0;
 var r = [0,0];
 console.log("accino");

 function mostrarhor(){

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
      horario(r[0],r[1]);
   		console.log("iz pz");
   	}
    else{
      alert("recuerde insertar el otro valor");
    }
  }

  function horario(numa,nums){ //numa= año nums= seccion
    console.log("inicio horario");
    console.log("hora IB. ",horaIB.length);
    for(var i=0;i<cuenta;i++){
      if(String(año[i])==String(numa) && String(seccion[i])==String(nums)){
        for(var j=0; j < horaIB.length;j++){
          h=hora[i].split("-");
          if(String(horaIB[j])==String(h[0])){
            var sta = j;
            while(String(horaFB[sta])!=String(h[1])){
              var mId=dia[i].split("");
              mId=mId[0]+mId[1]+mId[2]+String(j);
              datos = [id_Pl[i],sala[i]];
              cambiarespacio(datos,mId,"red");
              if(sta++ < horaIB.length){sta++;}
              else{break;}
            }
          }
        }
      }
    }
  }

  function cambiarespacio(d,id,color="red"){
    console.log(id);
    document.getElementById(id).innerHTML = d;
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
