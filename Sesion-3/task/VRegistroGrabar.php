<?php 

$nombre  	= $_POST['txtnom'];
$paterno 	= $_POST['txtpat'];
$materno 	= $_POST['txtmat'];
$dni     	= $_POST['txtdni'];
$fnac			= $_POST['txtdate'];
$dona		  = $_POST['txtD'];
$estado		= $_POST['cboEstado'];

//echo var_dump($_POST);
//echo "$nombre,$paterno,$materno,$dni,$fnac,$dona,$estado";

// Preparo mi SQL :V
$sql = "insert into personas (nombre,paterno,materno,dni,fnac,donante,estadoc) values('$nombre','$paterno','$materno','$dni','$fnac','$dona','$estado')";
//echo $sql;
// Mi conexion para usar la BD
$cnx = mysqli_connect('localhost','root','','agenda') or die("se cayo esta shit");

// Para que me devuela sin fallos de caracter
 mysqli_query($cnx,'set name utf8');

// para realizar la ejecucion d el consulta
$est = mysqli_query($cnx,$sql);

if($est == true){
	header('location:VReporte.php');
}else{
	echo "Error al Grabar nuevo Registro";
}



?>