<?php
session_start();
if($_SESSION['acceso']!='concedido'){
	header('location: login.html');
}
?>