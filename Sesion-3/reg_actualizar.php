<?php
//var_dump($_GET);
//var_dump($_REQUEST);

$a=$_POST['txtid'];
$b=$_POST['txtpaterno'];
$c=$_POST['txtmaterno'];
$d=$_POST['txtnombre'];
$e=$_POST['txtfnac'];
$f=$_POST['txtdonante'];
$g=$_POST['cboEstado'];

$sql="update personas set paterno='$b',
materno='$c',nombre='$d',fnac='$e',
donante='$f',estadoc='$g' where id=$a";

$cnx=mysqli_connect('localhost','root','','agenda');
mysqli_query($cnx,'set names utf8');
$est=mysqli_query($cnx,$sql);

if($est==true){
	header('location: reporte.php');
}else{
	echo "Error al EDITAR registro";
}



?>