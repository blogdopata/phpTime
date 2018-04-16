
<?php 

include_once('libs/phpFix/conexion.php');
include_once("libs/phpFix/fixName.php");


$curso 	= $_POST['txtcurso'];
$estado	= $_POST['cboEstado'];


$curso = textoFIx($curso);


$query = "insert into cursos (nombre,activo) values ('$curso','$estado')";

	echo $query;
	$est=mysqli_query($cnx,$query);


	if($est==true){
		header('location:listado_cursos.php');
	}else{
		echo "Error al EDITAR registro";
	}




?>


