<?php 
include_once('controlQ.php');
include_once('showMatricular.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>CodeLobster::Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href=""/>
	<script src=""></script>
</head>
<body>


	<form name="f2" action="registrarMatricula.php" method="post">
		Alumno: 
		<select name="cboAlumno">
			<?php foreach($grid as $info){ ?>

			<option value="<?php echo $info['id_alumno'] ?>">
				<?php echo $info['apellidos'] .", ".$info['nombre']  ?> 
			</option>
			<?php } ?>


		</select><br/>
		Curso:
		<select name="cboCurso">
			<?php foreach($grid2 as $info2){ ?>
				<option value="<?php echo $info2['id_curso'] ?>">
					<?php  echo $info2['nombre'] ?>	
				</option>
			<?php } ?>
		</select><br/>
		<input type="Submit" name="cmdGrabar" value="Grabar">
	</form>
</body>
</html>