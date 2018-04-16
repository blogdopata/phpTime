
<?php 
	session_start();

	if($_SESSION['acceso']!='concedido'){

	header('location: login.html');

	}else{
			$user=$_SESSION['user'];
			$pass=$_SESSION['pass'];
/*
			echo $user;
			echo $pass;
			//echo "bien con la sesi"	;*/
	}


 ?>


