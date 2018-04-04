<?php
include_once('control.php');
?>
<html>
<head>
	<title>Correo Enviar</title>
</head>
<body>
	<form name="f1" method="post" action="correo_enviar.php">
	<table border="1">
		<tr>
			<td>Destino</td>
			<td><input name="txdestino" type="text"></td>
		</tr>
		<tr>
			<td>Titulo</td>
			<td><input name="txttitulo" type="text"></td>
		</tr>
		<tr>
			<td>Mensaje</td>
			<td><input name="txtmensaje" type="text"></td>
		</tr>
		<tr>
			<td colspan="2"><input name="cmdEnviar" type="submit"></td>
		</tr>
	</table>
	</form>
</body>
</html>