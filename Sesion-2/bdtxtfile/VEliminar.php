<?php 

$id = $_GET['a'];

$rutaA = fopen('bdtxt.txt','r');
$rutaB = fopen('bdtxt2.txt' , 'w+');
$z = 1;

while(!feof($rutaA)){
	$linea = fgets($rutaA);
	if($z!=$id){
		fwrite($rutaB,$linea,strlen($linea));
	}
	$z++;
}

fclose($rutaB);
fclose($rutaA);

unlink($rutaA);

rename("bdtxt2.txt","bdtxt.txt");

header('location: VReporte.php');

//echo $linea;
//echo $base;

?>
