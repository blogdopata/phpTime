
<?php include_once("controlQ.php") ?>
<?php include_once('showActualizarAlumno.php'); ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>CodeLobster::Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href=""/>
	<script src=""></script>
</head>
<body>
	<main class="container-fluid">
	
		<form action="actualizarAlumnoGrabar.php" method="post">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 fixCol" >
				<h2 class="text-center danger">Ficha de Registro Alumno</h2>	
				<table  class="table">

					<tr>
						<td>Id Alumno: </td>
						<td><input type="text" name="txtid" readonly required value="<?= $data['id_alumno']?>"></td>

					</tr>

					<tr>
						<td>Apellidos: </td>
						<td><input type="text" value="<?= $data['apellidos']?>" name="txtapellidos" required></td>

					</tr>
					<tr>
						<td>Nombre: </td>
						<td><input type="text" value="<?= $data['nombre']?>" name="txtnombre" required></td>
					</tr>
						<tr>
						<td>DNI: </td>
						<td><input type="text" value="<?= $data['dni']?>"  maxlength="8" size = "8" name="txtdni" required></td>
					</tr>

						<tr>
						<td>Cumpleaños: </td>
						<td><input type="date" value="<?= $data['cumple']?>" name="txtcumple" required></td>

					</tr>
					</tr>
						<tr>
						<td>email: </td>
						<td><input type="email" value="<?= $data['correo']?>" name="txtcorreo" required></td>

					</tr>

			</table>
				<input type="Submit" class="btn btn-primary btn-fix" name="cmdGrabar" value="Grabar">

		</form>
	</main>	


</body>
</html>