<?php 

	include_once('libs/phpFix/conexion.php');

	$query = "select * from alumnos";
	$query2 = "select * from cursos";

	$rdy = mysqli_query($cnx , $query);

	$rdy2 = mysqli_query($cnx, $query2);
	//echo var_dump($rdy);
	//$itera =0;
	while($fila = mysqli_fetch_assoc($rdy)){
			
			$grid[] = $fila;

	}

	while($fila2 = mysqli_fetch_assoc($rdy2)){
			
			$grid2[] = $fila2;

	}

	

 ?>