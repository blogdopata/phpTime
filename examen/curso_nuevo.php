<?php 
include_once('controlQ.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Curso Nuevo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href=""/>
	<script src=""></script>
</head>
<body>

<main class="container-fluid">
	
		<form name="" action="registrarCurso" method="post">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 fixCol" >
				<h2 class="text-center danger">Registrar Curso</h2>	
				<table  class="table">
					<tr>
						<td>Nombre: </td>
						<td><input type="text" name="txtcurso" required><br/></td>
					</tr>
					<tr>
						<td>Estado: </td>
						<td><select name="cboEstado" required>
								<option value="">Seleccione</option>
								<option value="1">Activo</option>
								<option value="0">Desactivado</option>
							</select>
						</td>
					</tr>

				</table>		

			<input type="submit" name="cmdGrabar" value="Grabar"/>
</form>
</body>
</html>