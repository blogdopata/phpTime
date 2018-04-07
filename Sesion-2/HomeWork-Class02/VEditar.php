<?php
$id=$_GET['id'];
$apellidos=$_GET['apellidos'];
$nombre=$_GET['nombre'];
$cumple=$_GET['cumple'];
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar de Usuario</title>
</head>
<body>
	<form action="VEditarGrabar.php" method="post">
		<table width="300" border="1">
			<tr>
				<td colspan="2" align="center">Ficha de Inscripcion</td>
			</tr>
			<tr>
				<td>Id</td>
				<td><input type="text" name="id" value="<?php echo $id; ?>" readonly></td>
			</tr>
			<tr>
				<td>Apellidos</td>
				<td><input type="text" name="txtapellidos" value="<?php echo $apellidos; ?>"></td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="txtnombre" value="<?php echo $nombre; ?>"></td>
			</tr>
			<tr>
				<td>Cumpleaños</td>
				<td><input type="date" name="txtcumple" value="<?php echo $cumple; ?>"></td>
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