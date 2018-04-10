<?php
$bus=$_GET['x'];
//echo $bus;
$sql="select * from personas where id=$bus";

$cnx=mysqli_connect('localhost','root','','agenda');
mysqli_query($cnx,'set names utf8');
$tempo=mysqli_query($cnx,$sql);
//echo var_dump($tempo);
$data=mysqli_fetch_assoc($tempo);

//echo  var_dump($data);
//var_dump($data);
?>
<html>
<head>
	<title>Nuevo Alumno</title>
</head>
<body>
	<form name="f1" action="reg_actualizar.php" method="post">
	ID: 
		<input type="text" name="txtid" value="<?= $data['id']?>" readonly>
	<br/>
	Paterno: <input type="text" name="txtpaterno" value="<?= $data['paterno']?>"><br/>
	Materno: <input type="text" name="txtmaterno" value="<?= $data['materno']?>"><br/>
	Nombre: <input type="text" name="txtnombre" value="<?= $data['nombre']?>"><br/>
	DNI: <input type="text" name="txtdni" maxlength="8" value="<?= $data['dni']?>"><br/>
	Nacimiento: <input type="date" name="txtfnac" value="<?= $data['fnac']?>"><br/>
	Donante: <input type="text" name="txtdonante" value="<?= $data['donante']?>"><br/>
	EstadoCivil:
	<select name="cboEstado">
	<option value="S" <?= $data['estadoc']=='S'?'selected':''?>>Soltero</option>
	<option value="C" <?= $data['estadoc']=='C'?'selected':''?>>Casado</option>
	<option value="V" <?= $data['estadoc']=='V'?'selected':''?>>Viudo</option>
	<option value="D" <?= $data['estadoc']=='D'?'selected':''?>>Divorciado</option>
	</select>
	
	<br/>
	<input type="submit" name="cmdGrabar" value="Grabar">
	</form>
</body>
</html>