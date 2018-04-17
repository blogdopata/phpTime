<?php 
include_once('controlQ.php');
include_once('showReporteCursos.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Cursos</title>
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
						<td align="center"><b>Id Curso </b></td>
						<td align="center"><b>Nombre Curso</b></td>
						<td align="center"><b>Estado</b></td>
						<td align="center"><b>Actualizar</b></td>
						<td align="center"><b>Borrar</b></td>
					</tr>
					<?php foreach($grid as $info){ ?>
					<tr>
						<td align="center"><?= $info['id_curso'] ?> </td>
						<td align="center"><?= $info['nombre'] ?> </td>
						<td align="center"> <?php echo $info['activo']=='1'? 'Activo': 'Desactivo'?> </td>
						<td align="center"><a href="actualizarCurso.php?id=<?php echo $info['id_curso'] ?>">Actualizar</a></td>
						<td align="center"><a href="borrarCurso.php?id=<?php echo $info['id_curso'] ?>">Borrar</a></td>
					</tr>
					<?php } ?>
							
					
						
					</table>
				

			</div>
			
		</section>
		



	</main>
</body>
</html>