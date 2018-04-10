
<?php 
	$cnx =  mysqli_connect('localhost','root','','agenda') or die("Se cayo esta shit");

	mysqli_query($cnx, "set names utf8");

	$sql = "select * from personas";

	$tempo = mysqli_query($cnx,$sql);
// echo var_dump($tempo);
	while($fila = mysqli_fetch_assoc($tempo)){

		//	echo var_dump($fila);
			$grid[] = $fila;
	//	echo var_dump($grid);
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<main class="container-fluid">	
 	<a href="VRegistro.html" class="fix-link">Registrar nuevo</a>

 	<div class="row">
		<div class="col-sm-8 col-sm-offset-2 fixCol" >

			<h2 class="text-center danger">Reporte de Inscritos</h2>	
				<table  class="table">
			  	<tr>
			  		<th>ID</th>
			  		<th>Nombre</th>
			  		<th>Paterno</th>
			  		<th>Materno</th>
			  		<th>DNI</th>
			  		<th>F. Nacimiento</th>
			  		<th>Donante</th>
			  		<th>Estado</th>
			  		<th>Editar</th>
			  		<th>Borrar</th>
			  	</tr>
				<?php foreach ($grid as $persona) { ?>	
					<tr> 
						<td>
							<?= $persona['id'] ?>
						</td>
						<td>
								<?= $persona['nombre'] ?>
						</td>
						<td>
								<?= $persona['paterno'] ?>
						</td>
						<td>
								<?= $persona['materno'] ?>
						</td>
						<td>
									<?= $persona['dni'] ?>
						</td>
						<td>
								<?= $persona['fnac'] ?>
						</td>
						<td>
							<?= $persona['donante'] ?>
						</td>
						<td>
							<?= $persona['estadoc'] ?>
						</td>
						<td>
							<a href="VActualizar.php?id=<?= $persona['id']?>"> Actualizar</a>
						</td>
						<td>
							 <a href="VBorrar.php?id=<?= $persona['id']?>">	Eliminar</a>
						</td>
					

					</tr>
			<?php } ?>
		
 		 </table>

</main>

 </body>
 </html>