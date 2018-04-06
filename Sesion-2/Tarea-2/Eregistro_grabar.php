<?php
$a=$_POST['txtapellidos'];
$b=$_POST['txtnombre'];
$c=$_POST['txtcumple'];
#unimos los datos y agregamos 
#salto de linea al final
$linea="$a|$b|$c" . PHP_EOL;

#abrimos con opcion de crear y anexar datos
$base=fopen("basedatos.txt","a+");
fwrite($base,$linea,strlen($linea));
fclose($base);
#se redirecciona al usuario
header('location: EReporte.php');


?>