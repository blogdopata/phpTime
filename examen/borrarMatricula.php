<?php 
	include_once('libs/phpFix/conexion.php');
	$id = $_GET['id'];

	
	$query = "delete from matriculas  where id_matricula = $id";
	//echo $query;
	$est=mysqli_query($cnx,$query);



if($est==true){
	header('location: listado_matriculas.php');
}else{
	echo "Error al EDITAR registro";
}
	//echo $query;
/*
	$rdy = mysqli_query($cnx,$query);

	//echo var_dump($tempo);
	$data=mysqli_fetch_assoc($rdy);
*/
 ?>


