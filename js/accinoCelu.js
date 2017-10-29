/*cambios para que funcione en celular ya que no tengo contemplado librerias css aca
 */
 console.log("accinocelu");

 function mostrarhor(x,y){
   console.log(x,"-",y);
 }

 function cambnomhor(){
   var selectBox = document.getElementById("a");
   var numa = selectBox.options[selectBox.selectedIndex].value;
   selectBox = document.getElementById("s");
   var nums = selectBox.options[selectBox.selectedIndex].value;
   document.getElementById("ti").innerHTML ="año "+numa+" seccion "+nums;
   mostrarhor(numa,nums);
 }
