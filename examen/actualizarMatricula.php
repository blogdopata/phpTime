
<?php include_once("controlQ.php") ?>
<?php include_once('showActualizarMatricula.php'); ?>


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
	
		<form action="actualizarMatriculaGrabar.php" method="post">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 fixCol" >
				<h2 class="text-center danger">Actualizar Matricula</h2>	
				<table  class="table">

					<tr>
						<td>Id Matricula: </td>
						<td><input type="text" name="txtid" readonly required value="<?= $data['id_matricula']?>"></td>

					</tr>

					<tr>
						<td>id Alumno </td>
						<td><input type="text" name="txtidalumno"  value="<?= $data['id_alumno']?>" readonly required></td>

					</tr>
					<tr>
						<td>Id Curso: </td>
						<td><input type="text" value="<?= $data['id_curso']?>" readonly name="txtidcurso" required></td>
					</tr>
						<tr>
						<td>Nombres </td>
						<td><input type="text" name="txtnombreAl" value="<?= $data['alumno']?>"   required></td>
				
					</tr>
						<tr>
						<td>Nombre Curso </td>
						<td><input type="text" name="txtnombreCu" value="<?= $data['curso']?>" required></td>

					</tr>

			</table>
				<input type="Submit" class="btn btn-primary btn-fix" name="cmdGrabar" value="Grabar">

		</form>
	</main>	


</body>
</html>