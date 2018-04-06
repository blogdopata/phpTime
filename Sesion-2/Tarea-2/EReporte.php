<?php
#abrimos solo en modo lectura
$base=fopen("basedatos.txt","r");
#mientras no se llega al final del archivo End_Of_File
#se lee cada fila fgets
#explode parte una cadena basandose en el separador
while(!feof($base)){
	$partes[]=explode("|",fgets($base));
}
fclose($base);
#borramos el ultimo elemento PARTES por que esta vacio, salto de linea
unset($partes[count($partes)-1]);
# Z es un contador y numerador para la columna id
$z=0;
?>
<!doctype html>
<html>
<head>
<meta charset="uft-8">
<title>Reporte de Inscripcion</title>
</head>
<body>
<a href="ERegistro.php">Registrar Nuevo</a><br/><br/>
<table width="500" border="1" cellspacing="2" cellpadding="2">
<tr>
	<th>ID</th>
	<th>APELLIDOS</th>
	<th>NOMBRE</th>
	<th>CUMPLE</th>
	<th>EDITAR</th>
	<th>ELIMINAR</th>
</tr>
<?php foreach($partes as $f){ ?>
<?php $z=$z+1; ?>
<tr>
	<td><?php echo $z ?></td>
	<td><?php echo $f[0] ?></td>
	<td><?php echo $f[1] ?></td>
	<td><?php echo $f[2] ?></td>
	<td><a href="Eregistro_editar.php?id=<?php echo $z?>&apellidos=<?php echo $f[0]?>&nombre=<?php echo $f[1]?>&cumple=<?php echo $f[2]?> ">Editar</a></td>
	<td><a href="Eregistro_eliminar.php?id=<?php echo $z?>">Eliminar</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>