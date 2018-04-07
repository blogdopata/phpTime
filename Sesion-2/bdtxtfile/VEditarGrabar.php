<?php

$id=$_POST['id'];
$apellido=$_POST['txtapellidos'];
$nombre=$_POST['txtnombre'];
$cumple=$_POST['txtcumple'];

$linea="$apellido|$nombre|$cumple" . PHP_EOL;

$rutaA=fopen("bdtxt.txt","r");
$rutaB=fopen("bdtxt2.txt","w+");
$cont=1;
while(!feof($rutaA)){
	$linea2=fgets($rutaA);
	if($cont!=$id){
		fwrite($rutaB,$linea2,strlen($linea2));
	}else{
		fwrite($rutaB,$linea,strlen($linea));
	}
	$cont++;
}

fclose($rutaB);
fclose($rutaA);
unlink($rutaA);
rename ("bdtxt2.txt", "bdtxt.txt");

header('location: VReporte.php');

?>