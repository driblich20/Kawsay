<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
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
	<script src="validando_nueva.js"></script>
</head>
<body background="imagenes/logo.png" >
<div class="container">
	<div class="row row-content">
		<?php
		header("Refresh: 4; url=admin_sesion.php");
		include "functions.php";
		$_SESSION["pass_cambio"] = true;
		$pass = $_POST["nuevo_password"];
		$cn = connection();
		$update = "UPDATE usuario SET usu_password = ? WHERE usu_correo = 'admin@gmail.com';";
		$stmt = $cn->prepare($update);
		if($stmt === FALSE){
			echo "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-ok'></span> Error</div>";
		}
		$stmt->bind_param("s", $pass);
		$stat = $stmt->execute();
		if($stat === FALSE){
			echo "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-ok'></span> Error</div>";
		}
		$cn->close();
		$stmt->close(); 

		echo "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-ok'></span> La contraseña fue cambiada con éxito</div>";

		?>
	</div>
</div>
</body>
</head>
