<?php 

	include_once('libs/phpFix/conexion.php');

	$query = "select * from cursos";

	$rdy = mysqli_query($cnx , $query);

	//echo var_dump($rdy);
	//$itera =0;
	while($fila = mysqli_fetch_assoc($rdy)){
			//$itera++;
		

			$grid[] = $fila;

	}

	//echo var_dump($grid) . $itera . "<br>";

 ?>