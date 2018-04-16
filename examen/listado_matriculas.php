
<?php 

include_once('controlQ.php');
include_once('showReporteMatricula.php')

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Matriculas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href=""/>
	<script src=""></script>
</head>
<body>
		<table border="1">
		<tr>
			<td>id matricula</td>
			<td>id alumno</td>
			<td>Apellidos_Nombre</td>
			<td>id curso</td>
			<td>Nombre_Curso</td>
			<td>Editar</td>
			<td>Borrar</td>
		</tr>
		<?php foreach($grid as $info){ ?>
			<tr>
				<td align="center"><?= $info['id_matricula'] ?> </td>
				<td align="center"><?= $info['id_alumno'] ?> </td>
				<td align="center"><?= $info['alumno'] ?> </td>
				<td align="center"><?= $info['id_curso'] ?> </td>
				<td align="center"><?= $info['curso'] ?> </td>
				
				<td align="center"><a href="actualizarMatricula.php?id=<?php echo $info['id_matricula'] ?>">Actualizar</a></td>

				<td align="center"><a href="borrarMatricula.php?id=<?php echo $info['id_matricula'] ?>">Borrar</a></td>



			</tr>
		<?php } ?>

		</table>
</body>
</html>