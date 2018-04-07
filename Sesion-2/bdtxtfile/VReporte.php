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
 </head>
 <body>
 	<a href="Vregistro.php">Registrar nuevo</a>
  <br>
  <br>
  <table>
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
		<td><?php echo $conta ?></td>
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



 </body>
 </html>