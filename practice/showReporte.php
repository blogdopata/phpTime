<?php 

	$cnx = mysqli_connect("localhost","root","","webtest");

	mysqli_query($cnx, "set names utf8");

	$query = "select * from productos";

	$rdy = mysqli_query($cnx , $query);

	//echo var_dump($rdy);
	//$itera =0;
	while($fila = mysqli_fetch_assoc($rdy)){
			//$itera++;
		

			$grid[] = $fila;

	}

	//echo var_dump($grid) . $itera . "<br>";

 ?>
