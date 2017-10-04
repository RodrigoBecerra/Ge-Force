/*cambios para que funcione en celular ya que no tengo contemplado librerias css aca
 */
 console.log("se agregaron los r");
 function cambnomhor(){
   var selectBox = document.getElementById("a");
   var numa = selectBox.options[selectBox.selectedIndex].value;
   selectBox = document.getElementById("s");
   var nums = selectBox.options[selectBox.selectedIndex].value;
   console.log("change");
   document.getElementById("ti").innerHTML ="año "+numa+" seccion "+nums;
   console.log("iz pz");
 }
