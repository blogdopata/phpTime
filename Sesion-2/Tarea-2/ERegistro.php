<html>
<head>
	<meta charset="utf-8">
	<title>Registro de Usuarios</title>
</head>
<body>
	<form action="Eregistro_grabar.php" method="post">
		<table width="300" border="1">
			<tr>
				<td colspan="2" align="center">Ficha de Inscripcion</td>
			</tr>
			<tr>
				<td>Apellidos</td>
				<td><input type="text" name="txtapellidos" ></td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="txtnombre" ></td>
			</tr>
			<tr>
				<td>Cumpleaños</td>
				<td><input type="date" name="txtcumple"></td>
			</tr>
			<tr>
				<td colspan="2">
				<input type="submit" name="btnEnviar" value="Enviar">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>