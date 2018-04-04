<?php
$c[]="Cero";
$c[]="uno";
$c[]="dos";
$c[]="tres";
$c[8]="cuatro";
$c['curso']="PHP1";

echo "Cantidad : " . count($c) . "<br/>";
/*
for($t=0;$t<count($c);$t++){
	echo $c[$t] . "<br/>";
}
*/

foreach($c as $x=>$y){
	echo "Indice: $x , Informacion: $y <br/>";
}

?>