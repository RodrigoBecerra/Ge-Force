 var horaIB = ["8:00","8:30","9:10","9:40","10:20","10:50","11:30","12:00","12:40","13:10","13:50","14:20","15:00","15:30","16:10","16:40","17:20","17:50","18:30","19:00","19:40","20:10","20:50","21:20"];
 var horaFB = ["8:30","9:00","9:40","10:10","10:50","11:20","12:00","12:30","13:10","13:40","14:20","14:50","15:30","16:00","16:40","17:10","17:50","18:20","19:00","19:30","20:10","20:40","21:20","21:50"];
 var dias = ["Lun","Mar","Mie","Jue","Vie"];
 var numa=0;
 var nums=0;
 var r = [0,0];
 console.log("accino");
 //las dos siguientes son para usar el ? del php
 var paginaactual = "http://localhost/dashboard/ElCuartel/Ge-Force/php/indexPC.php";
 var usaopciones = 0;
 //dia actual
 var d = new Date();
 var n = d.toString();
    d = n.split(" ");
    if (d[0]=="Fri"){d="Vie";}
    else if(d[0]=="Thu"){d="Jue";}
    else if(d[0]=="Wed"){d="Mie";}
    else if(d[0]=="Tue"){d="Mar";}
    else if(d[0]=="Mon"){d="Lun";}
    else{d="Todos";}

 function limpiar(){
   for(var i=0;i<5;i++){
     for(var j=0;j < horaIB.length;j++){
       var pid=dias[i]+String(j);
       console.log("pid=",pid);
       document.getElementById(pid).innerHTML ="";
       document.getElementById(pid).style ="color: white;";
     }
   }
 }

 function holaXD(numa,nums){
  limpiar();
  horario(numa,nums);
 }

 function cambnomhor(numa,nums,dd){
    if(numa!=0){
      r[0]=numa;
      usaopciones = 1;
    }
    if(nums!=0){
      r[1]=nums;
      usaopciones = 1;
    }
   	if(r[0]!=0 && r[1]!=0){
   		//document.getElementById("ti").innerHTML ="año "+r[0]+" seccion "+r[1];
      if(usaopciones == 1){
        usaopciones = 0;
        location.href = paginaactual+"?v="+r[0].toString()+r[1].toString();
      }
   	}
    else{
      alert("recuerde insertar el otro valor");
    }
  }

  function horario(numa,nums){ //numa= año nums= seccion
    //marcardia();
    for(var i=0;i<cuenta;i++){
      if(String(año[i])==String(numa) && String(seccion[i])==String(nums)){
        for(var j=0; j < horaIB.length;j++){
          h=hora[i].split("-");
          if(String(horaIB[j])==String(h[0])){
            var sta = j;
            while(String(horaFB[sta])!=String(h[1])){
              console.log("mand")
              var mId=dia[i].split("");
              mId=mId[0]+mId[1]+mId[2]+String(j);
              datos = asig[i]+"<br>"+sala[i];
              cambiarespacio(datos,mId,"rgb(255,230,230)");
              cambiarprofe(mId,String(profe[i]));
              if(sta++ < horaIB.length){sta++;}
              else{break;}
            }
          }
        }
      }
    }
  }

  function marcardia(){
    if(d != "Todos"){
      for(var i=0;i<horaIB.length;i++){
        cambiarespacio("",dia+String(i),"rgb(230,230,230)");
      }
    }
  }

  function cambiarespacio(datl,id,color="red"){
      document.getElementById(id).innerHTML = datl;
    document.getElementById(id).style = "background-color: "+color+";";
  }
  function cambiarprofe(id,profg){
    document.getElementById(id).title=profg;
  }