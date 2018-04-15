
<?php include_once('controlQ.php'); ?>
<?php include_once('showActualizar.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Practice</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<main class="container" style="margin-top: 100px;">
		<section class="row text-center" >
			<div class="col-sm-8 col-sm-offset-2" style="border:1px solid red;">
					<form action="saveUpdate.php" method="post">

						<table class="table">
							<tr>
								<td>id</td> 
								 <td><input type="text" name="txtid" readonly value="<?= $data['id_c'] ?>"required> </td>
							</tr>		

							<tr>
								<td>nombre</td> 
								 <td><input type="text" name="txtnombre"  value="<?= $data['nombre'] ?>"required> </td>
							</tr>		
							<tr>
								<td>tipo</td> 
								 <td><input type="text" name="txttipo"  value="<?= $data['tipo'] ?>"required> </td>
							</tr>		
							
							<tr>
								<td>fecha</td>
								<td><input type="date" name ="txtfnac" value="<?= $data['fnac'] ?>" required></td>
							</tr
							<tr>
								<td colspan="2"><input type="submit" value="actualizar"></td>
							</tr>
						</table>
						

					</form>

			</div>
			
		</section>
		



	</main>
</body>
</html>