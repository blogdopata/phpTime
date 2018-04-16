<?php 
	include_once('libs/phpFix/conexion.php');

	$id 	= $_POST['txtid'];
	$nombre = $_POST['txtnombre'];
	$estado = $_POST['cboEstado'];

	
	$query = "update cursos set nombre = '$nombre', activo='$estado' where id_curso = $id";
	echo $query;
	$est=mysqli_query($cnx,$query);



if($est==true){
	header('location: listado_cursos.php');
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

