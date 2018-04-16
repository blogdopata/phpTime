

<?php include_once("controlQ.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap All in One Navbar</title>
<link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/principal.css" rel="stylesheet">
</head> 
<body>
<nav class="navbar navbar-default navbar-expand-xl navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="#"><i class="fa fa-cube"></i>PHP <b>SistemasUNI</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item active"><a href="principal.php" class="nav-link">Home</a></li>
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Mantenimiento <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="alumno_nuevo.php" target="ventana" class="dropdown-item">Registrar Alumno</a></li>
					<li><a href="curso_nuevo.php" target="ventana" class="dropdown-item">Registrar Cursos</a></li>
					<li><a href="matricular.php" target="ventana" class="dropdown-item">Matricular </a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Reportes <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="listado_alumnos.php" target="ventana" class="dropdown-item">Listado Alumnos</a></li>
					<li><a href="listado_cursos.php" target="ventana" class="dropdown-item">Listado Cursos</a></li>
					<li><a href="listado_matriculas.php" target="ventana" class="dropdown-item">Listado Matriculas</a></li>
					<li><a href="reporte_notas.php" target="ventana" class="dropdown-item">Reporte Notas </a></li>
				</ul>
			</li>
			<li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
			<li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
		</ul>
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search by Name">
				<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div>
		</form>
		<!--
		<ul class="nav navbar-nav navbar-right ml-auto">
			<li class="nav-item"><a href="#" class="nav-link notifications"><i class="fa fa-bell-o"></i><span class="badge">1</span></a></li>
			<li class="nav-item"><a href="#" class="nav-link messages"><i class="fa fa-envelope-o"></i><span class="badge">10</span></a></li>
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">
				<img src="https://www.tutorialrepublic.com/examples/images/avatar/2.jpg" class="avatar" alt="Avatar"> Paula Wilson <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></li>
					<li class="divider dropdown-divider"></li>
					<li><a href="#" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
				</ul>
			</li>
		</ul>
		-->
	</div>
</nav>
<iframe src="inicial.php" width="100%" height="500" name="ventana"></iframe>
</body>
</html>                                                        