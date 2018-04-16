<?php 
include_once('controlQ.php');
include_once('showReporteAlumnos.php')

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
<main class="container" style="margin-top: 100px;">
		<section class="row text-center" >
			<div class="col-sm-8 col-sm-offset-2">
						
					<table class="table" border="1">

					<tr>
						<td align="center"><b>Id ALumno </b></td>
						<td align="center"><b>Apellidos</b></td>
						<td align="center"><b>Nombre</b></td>
						<td align="center"><b>DNI</b></td>
						<td align="center"><b>Cumple</b></td>
						<td align="center"><b>Correo</b></td>
						<td align="center"><b>Actualizar</b></td>
						<td align="center"><b>Borrar</b></td>
					</tr>
					<?php foreach($grid as $info){ ?>
					<tr>
						<td align="center"><?= $info['id_alumno'] ?> </td>
						<td align="center"><?= $info['apellidos'] ?> </td>
						<td align="center"><?= $info['nombre'] ?> </td>
						<td align="center"><?= $info['dni'] ?> </td>
						<td align="center"><?= $info['cumple'] ?> </td>
						<td align="center"><?= $info['correo'] ?> </td>
						<td align="center"><a href="actualizarAlumno.php?id=<?php echo $info['id_alumno'] ?>">Actualizar</a></td>
						<td align="center"><a href="borrarAlumno.php?id=<?php echo $info['id_alumno'] ?>">Borrar</a></td>
					</tr>
					<?php } ?>
							
					
						
					</table>
				

			</div>
			
		</section>
		



	</main>
</body>
</html>