<?php
$a=$_REQUEST['txtNombre'];
$b=$_REQUEST['txtApellido'];

echo "Bienvenido $a $b";
//var_dump($_GET);
//var_export($_GET);
?>
<table border="1">
	<tr>
		<td>Nombre:</td>
		<td><?php echo $a; ?></td>
	</tr>
	<tr>
		<td>Apellido:</td>
		<td><?= $b; ?></td>
	</tr>
</table>