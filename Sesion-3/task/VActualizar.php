<?php 

	$id = $_GET['id'];

	$sql = "select * from personas where id = $id";

	$cnx = mysqli_connect("localhost","root","","agenda");
	mysqli_query($cnx, "set names utf8");

	$rdy = mysqli_query($cnx, $sql);

	$data = mysqli_fetch_assoc($rdy);

	//echo var_dump($data);

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar  Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
<main class="container-fluid">
	
		<form action="VUpdate.php" method="post" >
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 fixCol" >
				<h2 class="text-center danger">Actualizar  Registro</h2>	
				<table  class="table">
					<tr>
						<td>ID:</td>
						<td><input type="text" name="txtid" value="<?= $data['id']?>" readonly></td>
					</tr>
					<tr>
						<td>Nombres:</td>
						<td><input type="text" name="txtnom" required value="<?= $data['nombre'] ?>"></td>
					</tr>
					<tr>
						<td>Paterno:</td>
						<td><input type="text" name="txtpat" required value="<?= $data['paterno'] ?>"></td>
					</tr>
					<tr>
						<td>Materno:</td>
						<td><input type="text" name="txtmat" required value="<?= $data['materno'] ?>"></td>
					</tr>
					<tr>
						<td>DNI:</td>
						<td><input type="text" name="txtdni" maxlength="8" required value="<?= $data['dni'] ?>"></td>
					</tr>
					<tr>
						<td>Nacimiento:</td>
						<td><input type="date" name="txtdate" required value="<?= $data['fnac'] ?>"></td>
					</tr>
					<tr>
						<td>Donante:</td>
						<td>
							<input type="radio" name="txtD" value="si" <?=$data['donante']=='si' ? 'checked' :''?>>
							<label for="">Si </label> 
							 - 
							<input type="radio" name="txtD" value="no" <?=$data['donante']=='no' ? 'checked' :''?>>
							<label for="">No </label>
						</td>
					</tr>
					<tr>
						<td>Estado</td>
						<td>
						<select name="cboEstado" required>
							<option value="" <?= $data['estadoc']==''?'selected':''?>>Seleccione</option>
							<option value="F" <?= $data['estadoc']=='F'?'selected':''?>>Feliz</option>
							<option value="C" <?= $data['estadoc']=='C'?'selected':''?>>Casado</option>
							<option value="V" <?= $data['estadoc']=='V'?'selected':''?>>Viudo</option>
							<option value="D" <?= $data['estadoc']=='D'?'selected':''?>>Divorciado</option>
						</select>
						</td>
					</tr>




				</table>			
					<input type="submit" name="btnEnviar" value="Actualizar" class="btn btn-primary btn-fix">
				</div>
			</div>
		</form>

</main>

</body>
</html>