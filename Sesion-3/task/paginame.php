<?php 

$cnx = mysqli_connect('localhost','root','','agenda') or die("error danny se cayo todo :(");

//echo var_dump( $cnx);	

$pagina =  isset($_GET['pagina']) ?  (int)$_GET['pagina'] :  1;

$muestro = 3;

// para saber desde que post traer los articulos 
$inicio = ($pagina>1) ? ($pagina*$muestro - $muestro): 0;

mysqli_query($cnx, "set names utf8");

$sql =  "select SQL_CALC_FOUND_ROWS * from personas order by id desc limit $inicio, $muestro " ;

$rdy = mysqli_query($cnx,$sql);

while($fila = mysqli_fetch_assoc($rdy)){
	
			$grid[] = $fila;
			//echo var_dump($grid);
	}
	//echo var_dump($grid);
	if(!$grid){
		header('location: VReporte.php');
	}

$totalPersonas = "select FOUND_ROWS() as total" ;
$rdy2 = mysqli_query($cnx,$totalPersonas);

//echo var_dump($rdy2);

while($fila2 = mysqli_fetch_assoc($rdy2)){
			$grid2[] = $fila2;
			//echo var_dump($grid);
	}

//echo var_dump($grid2[0]['total']);   Cogí el valor del array :3

$totalPersonas = $grid2[0]['total'];
//echo $totalPersonas;
$numPag = ceil($totalPersonas / $muestro);

//echo $numPag;


?>