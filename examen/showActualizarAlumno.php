
<?php 
	include_once('libs/phpFix/conexion.php');
	$id = $_GET['id'];

	

	$query = "select * from alumnos where id_alumno = $id";

	

	$rdy = mysqli_query($cnx,$query);

	
	$data=mysqli_fetch_assoc($rdy);

 ?>


