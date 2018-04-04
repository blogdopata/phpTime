<?php

$persona="Jaime Perez";

function saludar(){
	global $persona;	
	echo "Hola, $persona <br/>";
	$persona="Eva  Mendez";
}

echo $persona . "<br/>";
saludar();
echo $persona . "<br/>";
?>