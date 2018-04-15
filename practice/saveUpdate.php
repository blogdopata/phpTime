<?php 
	
	$id = $_POST['txtid'];
	$nombre = $_POST['txtnombre'];
	$tipo = $_POST['txttipo'];
	$fnac = $_POST['txtfnac'];

	$cnx = mysqli_connect("localhost","root","","webtest");
	mysqli_query($cnx,'set names utf8');
	$query = "update productos set nombre = '$nombre', tipo='$tipo', fnac ='$fnac' where id_c = $id";
	echo $query;
	$est=mysqli_query($cnx,$query);



if($est==true){
	header('location: reporte.php');
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
