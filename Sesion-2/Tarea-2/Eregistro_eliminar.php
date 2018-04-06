<?php
$id=$_GET['id'];

#abrimos 
$base=fopen("basedatos.txt","r");
$base2=fopen("basedatos2.txt","w+");
$cont=1;
while(!feof($base)){
	$linea2=fgets($base);
	if($cont!=$id){
		fwrite($base2,$linea2,strlen($linea2));
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