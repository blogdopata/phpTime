<?php
session_start();
echo "Esta es la ID de sesión: " . session_id();
$_SESSION['edad']=29;
$_SESSION['dolar']=3.42;
$_SESSION['curso']='PHP';
$_SESSION['donante']=true;
?>
<br/>
<a href="eje_02.php">siguiente</a>