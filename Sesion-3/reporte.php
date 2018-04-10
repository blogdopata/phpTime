<?php
$cnx=@mysqli_connect("localhost","root","","agenda") or die('Fuimos !!');
mysqli_query($cnx,"set names utf8");

$sql="select * from personas";
$tempo=mysqli_query($cnx,$sql);
//var_dump( $tempo);
//echo "<br>";

while($fila=mysqli_fetch_assoc($tempo)){
	//echo $fila['paterno'] ."-". $fila[2] ."-".$fila['nombre'] . "<br>";
	//var_dump($fila);
	$grid[]=$fila;
}
?>
<a href="reg_nuevo.html">Nuevo Registro</a><br/>
<table border="1">
<tr>
	<th>Id</th>
	<th>Paterno</th>
	<th>Materno</th>
	<th>Nombre</th>
	<th>dni</th>
	<th>fnac</th>
	<th>donante</th>
	<th>estado_C</th>
	<th>Editar</th>
	<th>Borrar</th>
</tr>
<?php foreach($grid as $persona){ ?>
<tr>
	<td><?= $persona['id']?></td>
	<td><?php echo $persona['paterno']?></td>
	<td><?= $persona['materno']?></td>
	<td><?= $persona['nombre']?></td>
	<td><?= $persona['dni']?></td>
	<td><?= $persona['fnac']?></td>
	<td><?= $persona['donante']?></td>
	<td><?= $persona['estadoc']?></td>
	<td><a href="reg_editar.php?x=<?= $persona['id']?>">Editar</a></td>
	<td><a href="reg_borrar.php?x=<?= $persona['id']?>" onclick="return confirm('Seguro de borrar?');">Borrar</a></td>
</tr>
<?php } ?>





</table>