<?php
session_start();
echo $_SESSION['curso'];

$notas=array(10,15,19);
$_SESSION['nexamen']=$notas;
?>
<br/>
<a href="eje_03.php">siguiente</a>