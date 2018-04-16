
<?php include_once("controlQ.php") ?>
<?php include_once('showActualizarCurso.php'); ?>


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
	
		<form action="actualizarCursoGrabar.php" method="post">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 fixCol" >
				<h2 class="text-center danger">Actualizar Curso</h2>	
				<table  class="table">

					<tr>
						<td>Id Curso: </td>
						<td><input type="text" name="txtid" readonly required value="<?= $data['id_curso']?>"></td>

					</tr>

					<tr>
						<td>Nombre: </td>
						<td><input type="text" value="<?= $data['nombre']?>" name="txtnombre" required></td>

					</tr>
					<tr>
						<td>Estado: </td>

						<td>
							<select name="cboEstado">
							<option value="1" <?= $data['activo']=='1'?'selected':''?>>Activo</option>
							<option value="0" <?= $data['activo']=='0'?'selected':''?>>Desactivo</option>	
							</select>
						</td>
						
					

			</table>
				<input type="Submit" class="btn btn-primary btn-fix" name="cmdGrabar" value="Grabar">

		</form>
	</main>	


</body>
</html>