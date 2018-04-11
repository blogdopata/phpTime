<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Paginacion</title>
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="contenedor">
		<h1>Articulos</h1>
		<section class="articulos">

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

			<ul>
				<?php foreach ($grid as $persona){ ?>			
			
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
				
		</section>

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
	</div>
</body>
</html>