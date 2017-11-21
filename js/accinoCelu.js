/*cambios para que funcione en celular ya que no tengo contemplado librerias css aca
 */
 var x = [0,0];
 console.log("accinocelu");

 function mostrarhor(x,y){
   console.log(x,"-",y);

 }

 function cambnomhor(numa,nums){
 	if(numa != 0){
		x[0]=numa;//año
	}
	else if(nums != 0){
		x[1]=nums;//seccion
	}
	if(x[0]!=0 x[1]!=0){
		document.getElementById("ti").innerHTML = "año "+x[0]+" seccion "+x[1];
		mostrarhor(numa,nums);
	}
	else{
		document.getElementById("ti").innerHTML = "seleccione en el otro campo tambien.";
	}
 }