<html>
<head>
<meta charset="utf-8">
<title>Registrar  Usuarios</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<main class="container-fluid">
	
		<form action="VRegistroGrabar.php" method="post" >
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 fixCol" >
				<h2 class="text-center danger">Ficha de Inscripción</h2>	
				<table  class="table">
				
					<tr>
						<td>Apellidos</td>
						<td><input type="text" name="txtapellidos" required></td>
					</tr>
					<tr>
						<td>Nombre</td>
						<td><input type="text" name="txtnombre" required></td>
					</tr>
					<tr>
						<td>Cumpleaños</td>
						<td><input type="date" name="txtcumple" required></td>
					</tr>				

				</table>			
					<input type="submit" name="btnEnviar" value="Registrar" class="btn btn-primary btn-fix">
				</div>
			</div>
		</form>

</main>
</body>
</html>