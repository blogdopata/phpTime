<?php 

$apellidos = $_POST['txtapellidos'];
$nombre = 	 $_POST['txtnombre'];
$cumple =		 $_POST['txtcumple'];

$linea = "$apellidos|$nombre|$cumple" .PHP_EOL;

$base = fopen("bdtxt.txt","a+");

fwrite($base, $linea, strlen($linea));
fclose($base);

header('location: VReporte.php');

//echo $linea;
//echo $base;

?>
