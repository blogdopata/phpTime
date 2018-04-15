<?php 
	
	$id = $_GET['id'];

	$cnx = mysqli_connect("localhost","root","","webtest");

	$query = "select * from productos where id_c = $id";

	//echo $query;

	$rdy = mysqli_query($cnx,$query);

	//echo var_dump($tempo);
	$data=mysqli_fetch_assoc($rdy);

 ?>
