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
					<form action="login.php" method="post">

						<table class="table">
							<tr>
								<td>Usuario</td> 
								 <td><input type="text" name="txtuser" required> </td>
							</tr>		
							<tr>
								<td>Clave:</td>
								<td><input type="password" name ="txtpass" required></td>
							</tr>	
							<tr>
								<td colspan="2"><input type="submit" value="loguearse"></td>
							</tr>
						</table>
						

					</form>

			</div>
			
		</section>
		



	</main>
</body>
</html>