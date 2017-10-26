<?php 
$horaIB = ["8:00","8:30","9:10","9:40","10:20","10:50","11:30","12:00","12:40","13:10","13:50","14:20","15:00","15:30","16:10","16:40","17:20","17:50","18:30","19:00","19:40","20:10","20:50","21:20"];
$horaFB = ["8:30","9:00","9:40","10:10","10:50","11:20","12:00","12:30","13:10","13:40","14:20","14:50","15:30","16:00","16:40","17:10","17:50","18:20","19:00","19:30","20:10","20:40","21:20","21:50"];
$dias = ["Lun","Mar","Mie","Jue","Vie"];

/*if(count($horaIB)==count($horaFB)){
	echo "<h1>igual cantidad</h1>";
}*/
echo "
<table border=2 align='center'>
	<thead>
		<tr>
			<th>Hora</th>
";
for($i = 0; $i < 5; $i++){
	echo "<th>$dias[$i]</th>";
}
echo "
		</tr>
	</thead>
	<tbody>
		<tr>

";
for($i = 0; $i < 24; $i++){
	echo "<td>$horaIB[$i] $horaFB[$i]</td>";
	for($j = 1; $j < 6; $j++){
		$p = $j - 1;
		//forma rapida de cachar cual es cual
		echo "<td id='$dias[$p]$i'>$dias[$p]$i</td>";
		//se tiene que cambiar por el de abajo
		//echo "<td id='$dias[$p]$i'></td>";
	}
	echo "</tr>";
}
echo "
		</tr>
	</tbody>
</table>
";
?>