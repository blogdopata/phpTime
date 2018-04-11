<?php 

$cnx = mysqli_connect('localhost','root','','agenda') or die("error danny :v");

//echo var_dump( $cnx);	

$pagina =  isset($_GET['pagina']) ?  (int)$_GET['pagina'] :  1;

$postPorPagina = 5;




require 'index.view.php';


?>