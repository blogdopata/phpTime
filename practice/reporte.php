<?php
include_once('controlQ.php');
include_once('showReporte.php')

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<main class="container" style="margin-top: 100px;">
		<section class="row text-center" >
			<div class="col-sm-8 col-sm-offset-2" style="border:1px solid red;">
						
					<table class="table">

					<tr>
						<td align="center"><b>Id Producto </b></td>
						<td align="center"><b>Nombre</b></td>
						<td align="center"><b>Tipo</b></td>
						<td align="center"><b>Fecha</b></td>
						<td align="center"><b>Actualizar</b></td>
						<td align="center"><b>Borrar</b></td>
					</tr>
					<?php foreach($grid as $info){ ?>
					<tr>
						<td align="center"><?= $info['id_c'] ?> </td>
						<td align="center"><?= $info['nombre'] ?> </td>
						<td align="center"><?= $info['tipo'] ?> </td>
						<td align="center"><?= $info['fnac'] ?> </td>
						<td align="center"><a href="actualizar.php?id=<?php echo $info['id_c'] ?>">Actualizar</a></td>
						<td align="center"><a href="borrar.php?id=<?php echo $info['id_c'] ?>">Borrar</a></td>
					</tr>
					<?php } ?>
							
					
						
					</table>
				

			</div>
			
		</section>
		



	</main>
</body>
</html>