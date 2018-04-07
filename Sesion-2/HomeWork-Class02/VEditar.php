
<?php include_once('info/data.php') ?>


<html>
<head>
	<meta charset="utf-8">
	<title>Actualizar de Usuario</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<main class="container-fluid">
	<form action="VEditarGrabar.php" method="post">
		<div class="row">
				<div class="col-sm-6 col-sm-offset-3 fixCol" >
				<h2 class="text-center danger">Actualizar Datos</h2>	
						<table class="table">
						
							<tr>
								<td>Id</td>
								<td><input type="text" name="id" value="<?php echo $id; ?>" readonly></td>
							</tr>
							<tr>
								<td>Apellidos</td>
								<td><input type="text" name="txtapellidos" placeholder="<?php echo $apellidos; ?>"></td>
							</tr>
							<tr>
								<td>Nombre</td>
								<td><input type="text" name="txtnombre" placeholder="<?php echo $nombre; ?>"></td>
							</tr>
							<tr>
								<td>Cumpleaños</td>
								<td><input type="date" name="txtcumple" placeholder="<?php echo $cumple; ?>"></td>
							</tr>
							
						</table>
							<input type="submit" name="btnEnviar" value="Actualizar" class="btn btn-primary btn-fix">

							
				</div>
			</div>			
	</form>
</main>	
</body>
</html>