<?php
//var_dump($_POST);
$a=$_POST['txtpaterno'];
$b=$_POST['txtmaterno'];
$c=$_POST['txtnombre'];
$d=$_POST['txtdni'];
$e=$_POST['txtfnac'];
$f=$_POST['txtdonante'];
$g=$_POST['cboEstado'];

$sql="insert into personas (paterno,materno,nombre,dni,fnac,donante,estadoc) 
values('$a','$b','$c','$d','$e','$f','$g')";
//echo $sql;

$cnx=mysqli_connect('localhost','root','','agenda');
mysqli_query($cnx,'set names utf8');
$est=mysqli_query($cnx,$sql);

if($est==true){
	header('location: reporte.php');
}else{
	echo "Error al Grabar nuevo registro";
}

?>