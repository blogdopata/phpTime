<?php 

$user = $_POST['txtuser'];
$pass = $_POST['txtpass'];


$cnx = mysqli_connect("localhost","root","","webtest");

mysqli_query($cnx,"set names uf8");

$sql= "select * from usuario where user = '$user' and pass = '$pass';";

//echo $sql  . "<br>";



$rdy=mysqli_query($cnx, $sql);

$data=mysqli_fetch_assoc($rdy);

//echo $data['user'];


if( $data['user'] == $user &&  $data['pass']== $pass) {
	echo "hola";
	session_start();
	//echo "Esta es la ID de sesión: " . session_id() ."<br>";
	//echo " y  la ruta es : " . session_save_path();

	$_SESSION['user']=$user;
	$_SESSION['pass']=$pass;
	$_SESSION['acceso']='concedido';

	header('location:registrar.php');

}
else {
	header('location:index.php');
	//echo "adios";
}




 ?>