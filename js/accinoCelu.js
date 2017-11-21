/*cambios para que funcione en celular ya que no tengo contemplado librerias css aca
 */
 var x = [0,0,0];
 var dia = "";
 var ppeed = "";//para poner en el div
 console.log("accinocelu");

 function mostrarhor(x,y,z){
 	ppeed = "<hr class='half-rule'/>";
   var dived = document.getElementById("ins"); //edicion del div
   console.log(x,"-",y);
   for(var i=0;i<cuenta;i++){
   		if(String(año[i])==String(x) && String(seccion[i])==String(y)){
   			if(z==dia[i]){
   				ppeed = ppeed+"<br><p>Sala: "+sala[i]+"</p><br><p>Hora: "+hora[i]+"</p><br><p>Asignatura: "+asig[i]+"</p><br><p>Profesor: "+profe[i]+"</p><br><hr class='half-rule'/>";
   			}
   			else if(z=="Todos"){
   				ppeed = ppeed+"<br><p>Sala: "+sala[i]+"</p><br><p>Dia: "+dia[i]+"</p><br><p>Hora: "+hora[i]+"</p><br><p>Asignatura: "+asig[i]+"</p><br><p>Profesor: "+profe[i]+"</p><br><hr class='half-rule'/>";
   			}
   		}
   }
   dived.innerHTML=ppeed;
 }

 function dias(day){
 	if (day==5){
 		return "Viernes";
 	}
 	else if(day==4){
 		return "Jueves";
 	}
 	else if(day==3){
 		return "Miercoles";
 	}
 	else if(day==2){
 		return "Martes";
 	}
 	else if(day==1){
 		return "Lunes";
 	}
 	else{
 		return "Todos";
 	}
 }

 function cambnomhor(numa,nums,day){
 	if(numa != 0){
		x[0]=numa;//año
	}
	else if(nums != 0){
		x[1]=nums;//seccion
	}
	if(day!=0){
		x[2]=day;
	}
	if(x[0]!=0 && x[1]!=0){
		dia=dias(x[2]);
		document.getElementById("ti").innerHTML = "año: "+x[0]+" seccion: "+x[1]+" dia: "+dia;
		mostrarhor(x[0],x[1],dia);
	}
	else{
		document.getElementById("ti").innerHTML = "seleccione en el otro campo tambien.";
	}
 }