<?php
$id=$_POST['txtid'];
$a=$_POST['txtapellidos'];
$b=$_POST['txtnombre'];
$c=$_POST['txtcumple'];
#unimos los datos y agregamos 
#salto de linea al final
$linea="$a|$b|$c" . PHP_EOL;

#abrimos 
$base=fopen("basedatos.txt","r");
$base2=fopen("basedatos2.txt","w+");
$cont=1;
while(!feof($base)){
	$linea2=fgets($base);
	if($cont!=$id){
		fwrite($base2,$linea2,strlen($linea2));
	}else{
		fwrite($base2,$linea,strlen($linea));
	}
	$cont++;
}

fclose($base2);
fclose($base);
unlink($base);
rename ("basedatos2.txt", "basedatos.txt");
#se redirecciona al usuario
header('location: EReporte.php');

?>