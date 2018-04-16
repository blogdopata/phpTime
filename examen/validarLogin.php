<?php 

include_once("libs/phpFix/conexion.php");

$user = $_POST['txtuser'];
$pass = $_POST['txtpass'];



$sql= "select * from usuarios where usuario = '$user' and clave = '$pass';";



$rdy=mysqli_query($cnx, $sql);

$data=mysqli_fetch_assoc($rdy);


if( $data['usuario'] == $user &&  $data['clave']== $pass) {
	echo "hola";
	// abrir sesion 
	session_start();

	//echo "Esta es la ID de sesión: " . session_id() ."<br>";
	//echo " y  la ruta es : " . session_save_path();

	$_SESSION['user']=$user;
	$_SESSION['pass']=$pass;
	$_SESSION['acceso']='concedido';

	header('location:principal.php');
}
else {
	header('location:login.html');
	//echo "adios";
}




 ?>