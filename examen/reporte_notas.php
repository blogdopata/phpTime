<?php

include_once('controlQ.php');
include_once('showReporteNotas.php')

?>
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
<table border="1">
	<tr>
		<td>Id Alumno</td>
		<td>Alumno</td>
		<td>Id Curso</td>
		<td>Curso</td>
		<td>Nota 1</td>
		<td>Nota 2</td>
		<td>Nota 3</td>
		<td>Nota 4</td>
		<td>Promedio</td>
		<td>Agregar Notas</td>
		<td>Notificado</td>
		<td>Correo</td>
	</tr>

	<?php foreach($grid as $info){ ?>
		<tr>
			<td align="center"><?= $info['id_alumno'] ?> </td>
			<td align="center"><?= $info['alumno'] ?> </td>
			<td align="center"><?= $info['id_curso'] ?> </td>
			<td align="center"><?= $info['curso'] ?> </td>
			<td align="center"><?= $info['nota1'] ?> </td>
			<td align="center"><?= $info['nota2'] ?> </td>
			<td align="center"><?= $info['nota3'] ?> </td>
			<td align="center"><?= $info['nota4'] ?> </td>
			<td align="center"><?= $info['promedio'] ?> </td>
			<td align="center"><a href="agregarNotas.php?idAl=<?php echo $info['id_alumno'] ?>&""></a><?php </td>
			<td align="center"><?= $info['notificado'] ?> </td>
			<td align="center"><?= $info['correo'] ?> </td>
			


		</tr>
		<?php } ?>

</table>
</body>
</html>