
<?php 
	include_once('libs/phpFix/conexion.php');
	$id = $_GET['id'];

	

	$query = "select * from cursos where id_curso = $id";

	

	$rdy = mysqli_query($cnx,$query);

	
	$data=mysqli_fetch_assoc($rdy);

 ?>


