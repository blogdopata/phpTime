<?php 
	include_once('libs/phpFix/conexion.php');

	$id = $_POST['txtid'];
	$apellidos = $_POST['txtapellidos'];
	$nombre = $_POST['txtnombre'];
	$dni = $_POST['txtdni'];
	$cumple = $_POST['txtcumple'];
	$correo = $_POST['txtcorreo'];

	
	$query = "update alumnos set apellidos = '$apellidos', nombre='$nombre', dni ='$dni' , cumple = '$cumple', correo='$correo' where id_alumno = $id";
	echo $query;
	$est=mysqli_query($cnx,$query);



if($est==true){
	header('location: listado_alumnos.php');
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

