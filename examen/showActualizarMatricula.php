
<?php 
	include_once('libs/phpFix/conexion.php');
	$id = $_GET['id'];

	

	$query = "select * from v_reporte_notas where id_matricula = $id";

	

	$rdy = mysqli_query($cnx,$query);

	
	$data=mysqli_fetch_assoc($rdy);

 ?>


