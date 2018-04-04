<?php
$a=$_POST['txtlogin'];
$b=$_POST['txtpass'];

if($a=="alumno" && $b=="2018"){
	session_start();
	#dejamos una marca en la session, para indicar 
	#acceso correcto por login
	$_SESSION['acceso']='concedido';
	header('location: persona_nuevo.php');
}else{
	header('location: login.html');
}
?>