<?php
include_once('control.php');
?>
<html>
<head>
	<title>Persona Nuevo</title>
</head>
<body>
	<form name="f2" method="post" action="persona_grabar.php">
	<table border="1">
		<tr>
			<td>Paterno</td>
			<td><input name="txtpaterno" type="text"></td>
		</tr>
		<tr>
			<td>Materno</td>
			<td><input name="txtmaterno" type="text"></td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><input name="txtnombre" type="text"></td>
		</tr>
		<tr>
			<td colspan="2"><input name="cmdGrabar" type="submit"></td>
		</tr>
	</table>
	</form>
</body>
</html>