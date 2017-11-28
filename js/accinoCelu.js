/*cambios para que funcione en celular ya que no tengo contemplado librerias css aca
 */
 var horaIB = ["8:00","8:30","9:10","9:40","10:20","10:50","11:30","12:00","12:40","13:10","13:50","14:20","15:00","15:30","16:10","16:40","17:20","17:50","18:30","19:00","19:40","20:10","20:50","21:20"];
 var x = [0,0,0];
 var dia = "";
 var ppeed = "";//para poner en el div
 console.log("accinocelu");

 function mostrarhor(x,y,z){
 	ppeed = "";
   var dived = document.getElementById("ins"); //edicion del div
   //console.log(x,"-",y);
   //proximacls(x,y);
   for(var i=0;i<cuenta;i++){
   	if(seccion[i].length > 1){
   		var sussec = seccion[i].split('-');
   		for(var j=0;j<sussec.length;j++)
   		if(String(año[i])==String(x) && String(sussec[j])==String(y)){
   			if(z==diacls[i]){
   				ppeed = ppeed+"<div class='col-xl-6 thumbnail' style='background-color:rgba(10,20,255,0.6)'> <p>Sala: "+sala[i]+"</p><br><p>Hora: "+hora[i]+"</p><br><p>Asignatura: "+asig[i]+"</p><br><p>Profesor: "+profe[i]+"</p></div><hr class='half-rule'/>";
   			}
   			else if(z=="Todos"){
   				ppeed = ppeed+"<div class='col-xl-6 thumbnail' style='background-color:rgba(10,20,255,0.6)'><p>Sala: "+sala[i]+"</p><br><p>Dia: "+diacls[i]+"</p><br><p>Hora: "+hora[i]+"</p><br><p>Asignatura: "+asig[i]+"</p><br><p>Profesor: "+profe[i]+"</p></div><hr class='half-rule'/>";
   			}
   		}
   	}
   	else{
   		if(String(año[i])==String(x) && String(seccion[i])==String(y)){
   			if(z==diacls[i]){
   				ppeed = ppeed+"<div class='col-xl-6 thumbnail' style='background-color:rgba(10,20,255,0.6)'><p>Sala: "+sala[i]+"</p><br><p>Hora: "+hora[i]+"</p><br><p>Asignatura: "+asig[i]+"</p><br><p>Profesor: "+profe[i]+"</p></div><hr class='half-rule'/>";
   			}
   			else if(z=="Todos"){
   				ppeed = ppeed+"<div class='col-xl-6 thumbnail' style='background-color:rgba(10,20,255,0.6)'><p>Sala: "+sala[i]+"</p><br><p>Dia: "+diacls[i]+"</p><br><p>Hora: "+hora[i]+"</p><br><p>Asignatura: "+asig[i]+"</p><br><p>Profesor: "+profe[i]+"</p></div><hr class='half-rule'/>";
   			}
   		}
   	}
   }
   dived.innerHTML=ppeed;
 }

 function dias(day){
 	if (day==5 || day=="Fri"){
 		return "Viernes";
 	}
 	else if(day==4 || day=="Thu"){
 		return "Jueves";
 	}
 	else if(day==3 || day=="Wed"){
 		return "Miercoles";
 	}
 	else if(day==2 || day=="Tue"){
 		return "Martes";
 	}
 	else if(day==1 || day=="Mon"){
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
/*
 function proximacls(numa,nums){
 	var d = new Date();
    var n = d.toString();
    d = n.split(" ");
    n = d[4].split(":");
    n = n[0]+":"+n[1]; 
    d = dias(d[0]);
    console.log(n);
    var n2 = "";
    if(d != "Todos"){
    	for (var i = 0; i < 5; i++) {
    		if(d == diacls[i]){//n[0] <= n2[0] && 
    			var paraelceluav=rellenoavanzado(n);
    			if(paraelceluav<299){
    				return "<hr class='half-rule'/><div class='col-xl-6 thumbnail' style='background-color:rgba(255,20,10,0.6)'><p>proxima clase de este dia:</p><br><p>Sala: "+sala[paraelceluav]+"</p><br><p>Hora: "+hora[paraelceluav]+"</p><br><p>Asignatura: "+asig[paraelceluav]+"</p><br><p>Profesor: "+profe[paraelceluav]+"</p></div><hr class='half-rule'/>";
    			}
    			else{return "<hr class='half-rule'/>";}
    		}
    	}
    }else{
    	return "<hr class='half-rule'/>";
    }
 }

 function rellenoavanzado(jh){
    var extcjh = "";
    var extcjh2 = 0;
    cjh = 0;
    jh=jh.split(":");
    for (var h = cjh; h < horaIB.length; h++) {
      extcjh = horaIB[h].split(":");
      if(jh[0]==extcjh[0]){
      	console.log("aviso existencia 1");
        if(parseInt(jh[1])<parseInt(extcjh[1])){
          return h;
        }
        else{
        	if(parseInt(jh[0])<parseInt(extcjh[0])){
        		extcjh2 = h;
        	}
        }
      }
    }
    if(extcjh2 != 0){
    	return h;
    }
    return 300;
  }*/