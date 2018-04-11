<?php
include_once('fixName_lib.php');

$nombre = $_POST['txtNombre'];

//$dato="     Juan    de    la    cruz    ";

//  Mostrare con espacios insertados al inicio
echo  "<h3><pre>Bienvenido  $nombre </pre> <br /> " ; 

//  Mostrare  sin dobles espacios  y todo en mayusculas 
$nombre = textoFix($nombre);
echo  "<h3><pre>Bienvenido $nombre </pre> <br /> " ; 

// Y como creo que debería ser :D 
$nombre = ucwords(strtolower($nombre)) ;
echo  "<h3><pre>Bienvenido $nombre </pre> <br /> " ; 


//$nuevo=TextoMayusculas($dato);

//echo "<pre>|$nuevo|</pre>";

?>