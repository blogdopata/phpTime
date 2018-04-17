<?php 
	include_once('libs/phpFix/conexion.php');

	$idMatri = $_POST['txtid'];
	$idalum = $_POST['txtidalumno'];
	$idcurso = $_POST['txtidcurso'];
	$nomAl = $_POST['txtnombreAl'];
	$nomCu = $_POST['txtnombreCu'];
	

	$sql = "update alumnos set  nombre = '$nomAl' where id_alumno = '$idalum'" ;
	$sql2 = "update cursos set  nombre = '$nomCu' where id_curso = '$idcurso'" ;


	//echo $query;
	$est=mysqli_query($cnx,$sql);
	$est2=mysqli_query($cnx,$sql2);
	//echo "GAme over";

	if($est==true && $est2 == true){
	header('location: listado_matriculas.php');
}else{
	echo "Error al EDITAR registro";
}



 ?>

