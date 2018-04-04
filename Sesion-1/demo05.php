<?php
//for($w=1;$w<=100;$w=$w+1){
$columnas=8;
echo "<table border=1>";
echo "<tr>";

$contador=0;
for($w=65;$w<=90;$w++){
	echo "<td>".chr($w) . "</td>";
	$contador++;
	if($contador==$columnas){
		echo "</tr><tr>";
		$contador=0;
	}
}

echo "</table>";
?>