<?php 

$id  	= $_GET['id'];
//echo  $id;
$sql = "delete from personas where id = $id";

$cnx = mysqli_connect("localhost","root","","agenda");

$rdy = mysqli_query($cnx,$sql);

if($rdy == true){
	header('location: VReporte.php');
}else{
	echo " Error en borrar registro";
}


?>