

<?php require_once('paginame.php'); ?>


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
						<td align="center">
								<?= $persona['fnac'] ?>
						</td>
						<td align="center">
							<?= $persona['donante'] ?>
						</td>
						<td align="center">
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

		<section class="paginacion">
			<ul>
				 <!-- FLECHA INICILA -->
			<?php if($pagina ==1) { ?>
					<li class="disabled">&laquo;</li>

			<?php } else { ?>
					<li> <a href="?pagina=<?php echo $pagina -1; ?>" >&laquo;</a></li>

			<?php  }  ?>	
		
		<!-- FIN  FLECHA INICILA -->

   <!-- BLOQUE  I : PARA MOSTRAR NUMERACION  -->
			<?php 
					for($i = 1; $i <= $numPag ; $i++){
						if($pagina == $i){
							echo "<li class='active'><a href='?pagina=$i'>$i </a></li> ";
						} else{
							echo "<li> <a href='?pagina=$i'> $i </a> </li>";
						}
					}

			 ?>
	 <!-- FIN BLOQUE 1  -->



	<!-- FLECHA FINAL  -->
		<?php if($pagina == $numPag) { ?>
					<li class="disabled">&raquo;</li>

			<?php } else { ?>
					<li> <a href="?pagina=<?php echo $pagina +1; ?>" >&raquo;</a></li>

			<?php  }  ?>	

 <!-- FIN FLECHA FINAL -->

				
		
			</ul>
		</section>


</main>

 </body>
 </html>