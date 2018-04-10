<?php 

$id				=	$_POST['txtid'];
$nombre		=	$_POST['txtnom'];
$paterno	=	$_POST['txtpat'];
$materno	=	$_POST['txtmat'];
$dni			=	$_POST['txtdni'];
$fnac			=	$_POST['txtdate'];
$dona			=	$_POST['txtD'];
$estado 	=	$_POST['cboEstado'];

$sql = "update personas set  nombre='$nombre',
paterno='$paterno',materno='$materno',dni ='$dni', fnac='$fnac',
donante='$dona',estadoc='$estado' where id='$id'";

//echo $sql;

$cnx = mysqli_connect('localhost','root','','agenda');
mysqli_query($cnx, 'set names utf8');

$rdy = mysqli_query($cnx,$sql);

if($rdy == true){
	header('location:VReporte.php');
}else{
	echo "Error de actualizacion -.-";
}


?>