<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kawsay</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="bootstrap/css/mystyle.css" rel="stylesheet">
	<link href="bootstrap/bootstrap-social/bootstrap-social.css" rel="stylesheet"> 
	<link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet"> 
	<link href="bootstrap/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet"></script>
	<!--<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>-->
	<script src="bootstrap/jquery/dist/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	
	<script src="bootstrap/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
</head>
<body>
</body>
<!-- Barra de navegacion -->

<!-- Mensaje de bienvenida -->
<div class="container">
	<div class="row row-content">
		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
			<?php 
				include "functions.php";
				echo "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>
				Bienvenido ". $_SESSION["est_nom_actual"] ."</strong>, debajo observaras tu puntaje e historial de juegos, revisa la barra del menu para acceder a los juegos y demas opciones, <strong>disfruta de KAWSAY</strong></div>";
				
			?>
		</div>
	</div>
</div>
<!-- Nombre de colegio-->
<div class="container">
	<div class="row row-content">
		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
			<?php
				echo "<h1>Colegio: ".$_SESSION["est_col_actual"]."</h1>";
			 ?>
		</div>
	</div>
</div>
</body>
</html>