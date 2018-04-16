
<?php 

include_once('libs/phpFix/conexion.php');
include_once("libs/phpFix/fixName.php");


$apellidos 	= $_POST['txtapellidos'];
$nombre 	= $_POST['txtnombre'];
$dni 		= $_POST['txtdni'];
$cumple 	= $_POST['txtcumple'];
$correo 	= $_POST['txtcorreo'] ;


$apellidos = textoFIx($apellidos);
$nombre = textoFix($nombre);

	

$query = "insert into alumnos  (apellidos,nombre,dni,cumple,correo) values ('$apellidos','$nombre','$dni','$cumple','$correo')";

	echo $query;
	$est=mysqli_query($cnx,$query);


	if($est==true){
		header('location: listado_alumnos.php');
	}else{
		echo "Error al EDITAR registro";
	}
		



?>


