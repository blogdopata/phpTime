<?php
$archivo="contador.txt";
#existe el archivo
if(file_exists($archivo)){
	#apertura en modo lectura escritura
	$f=fopen($archivo,'r+');
	#lee la primera fila
	$contador=fgets($f);
	$contador++;
	#regresamos cursor al inicio del archivo
	rewind($f);
}else{
	#apertura en modo lectura escritura con opcion a creacion
	$f=fopen($archivo,'w+');
	$contador=1;
}
#escribir en archivo el valor del contador con maximo 10 caracteres
fwrite($f,$contador,10);
#cerrar archivo
fclose($f);
#mostrar dato en pagina web
echo "visitante Nro. $contador";
?>
