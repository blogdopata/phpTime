<?php
#promedio de 4 notas
$n1=$_POST['txtn1'];
$n2=$_POST['txtn2'];
$n3=$_POST['txtn3'];
$n4=$_POST['txtn4'];

$prom=($n1+$n2+$n3+$n4)/4;
#18
/*
if($prom>=18){
	echo "Felicitaciones, vamos a MANCORA";
}else{
	echo "Nos quedamos a limpieza y pintado de casa";
}
*/
echo ($prom>=18?"Mancora ;)":"Pintar Casa :(");

?>