<?php 

$base =  fopen("bdtxt.txt", "r");

while(!feof($base)){
	$partes[] =  explode("|", fgets($base));
}

fclose($base);
//echo  var_dump($partes);
unset($partes[count($partes)-1]);
//echo  " new text array";
//echo  var_dump($partes);
$conta=0;

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Reporte de Inscritos</title>
 	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
 </head>
 <body>

 <main class="container-fluid">	

			
			 	<a href="Vregistro.php" class="fix-link">Registrar nuevo</a>
		
			 	<div class="row">
					<div class="col-sm-6 col-sm-offset-3 fixCol" >

						<h2 class="text-center danger">Reporte de Inscritos</h2>	
							<table  class="table">
						  	<tr>
						  		<th>ID</th>
						  		<th>APELLIDOS</th>
						  		<th>NOMBRE</th>
						  		<th>CUMPLE</th>
						  		<th>EDITAR</th>
						  		<th>BORRAR</th>
						  	</tr>
								<?php  foreach($partes as $f){ ?>
								<?php $conta++ ;  ?>
								<tr> 
									<td><?php echo $conta ?><!--<script>alert("interando");</script>--></td>
									<td><?php echo $f[0] ?></td>
									<td><?php echo $f[1]  ?></td>
									<td><?php echo $f[2]  ?></td>
									<td>
										 <a href="VEditar.php?id=<?php echo $conta?>&apellidos=<?php echo $f[0]?>&nombre=<?php echo $f[1]?>&cumple=<?php $f[2]?>">Actualizar
									 		</a>
									</td>
									<td> 
										<a href="VEliminar.php?a=<?php echo $conta ?> "  >Eliminar 
										</a>
									</td>


								</tr>

							<?php  } ?>
			 		 </table>

</main>

 </body>
 </html>