
<?php 

include_once('libs/phpFix/conexion.php');


$id_alumno 	= $_POST['cboAlumno'];
$id_curso	= $_POST['cboCurso'];


//echo "Valor de IDAlumno $id_alumno y de IDCurso $id_curso";



$query = "insert into matriculas (id_alumno,id_curso)values ('$id_alumno','$id_curso')" ;

 	//echo $query;
$est=mysqli_query($cnx,$query);


	if($est==true){
 		header('location: listado_matriculas.php');
 	}else{
 		echo "Error al EDITAR registro";
 	}
		



?>


