/*acciones parte de el grupo geforce
 *no deberia haber algun tipo de inseguridad
 *en caso de haber alguna parte insegura se tendra cambiar
 *por como esta echo ahora se puede acortar mucho
 */
 var r1=0;
 var r2=0;
 console.log("se agregaron los r");
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