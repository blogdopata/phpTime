
<?php include_once('controlQ.php'); ?>




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
					<form action="save_reg.php" method="post">

						<table class="table">
						<!--	<tr>
								<td>id</td> 
								 <td><input type="text" name="txtid"  required> </td>
							</tr>		
-->
							<tr>
								<td>nombre</td> 
								 <td><input type="text" name="txtnombre"  required> </td>
							</tr>		
							<tr>
								<td>tipo</td> 
								 <td><input type="text" name="txttipo"  required> </td>
							</tr>		
							
							<tr>
								<td>fecha</td>
								<td><input type="date" name ="txtfnac"  required></td>
							</tr
							<tr>
								<td colspan="2"><input type="submit" value="Registrar"></td>
							</tr>
						</table>
						

					</form>

			</div>
			
		</section>
		



	</main>
</body>
</html>