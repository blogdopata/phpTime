<?php
$y=$_GET['x'];

$sql="delete from personas where id=$y";

$cnx=mysqli_connect('localhost','root','','agenda');
$est=mysqli_query($cnx,$sql);

if($est==true){
	header('location: reporte.php');
}else{
	echo "Error al Borrar nuevo registro";
}

?>