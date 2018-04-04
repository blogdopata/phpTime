<?php
# escapando caracteres con \
$tempo="\"saludos\"";
echo $tempo;

$a="Curso";
$b="PHP1";

echo "<br/>";
echo "Bienvenido a $a $b ";
// Las comillas dobles permiten liberar valores
echo "<br/>";

echo 'Bienvenido a $a $b ';
// Las comillas simples NO permiten liberar valores
?>