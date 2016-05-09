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


<!-- Barra de navegacion superior-->
<nav class="navbar navbar-dark bg-primary navbar-fixed-top">
	<div class="header">
	<button type="button" class="navbar-toggle btn btn-default btn-lg" data-toggle="collapse"
	            data-target="#desplegable">
	      <span class="sr-only">Desplegar navegación</span>
	      <span class="glyphicon glyphicon-menu-hamburger"></span>
	    </button>
    </div>
	<div class="collapse navbar-collapse container-fluid" id="desplegable">
		<div class="navbar-header">
			<a class="navbar-brand navbar-color" href="#">Kawsay Administrador</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="nav-item nav-fix">
				<a class="nav-link nav-admin" href="solicitudes.php">Solicitudes de colegios nuevo</a>
			</li>
			<li class="nav-item nav-fix">
				<a class="nav-link nav-admin" href="#">Datos estadísticos</a>
			</li>
			<li class="nav-item nav-fix">
				<a class="nav-link nav-admin" href="#" data-toggle="modal" data-target="#ver_datos">Actualizaciones</a>
			</li>
		</ul>
		<form class="navbar-logout" method="get" action="salir.php">
		<button type="submit" class="btn btn-lg btn-default pull-right" >Cerrar sesión</button>
		</form>
		<a type="button" data-toggle="modal" data-target="#cambiar_pass" onclick="deshabilitarLimpiar()" class="btn btn-success btn-lg pull-right" href="#">Cambia tu contraseña</a>	
	</div>	

</nav>
<div class="modal fade" id="cambiar_pass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal">&times;</button>
							 <h3 class="modal-title">Cambia la contraseña del administrador</h3>
						</div>
						<div class="modal-body">
						<form class="form-horizontal" role="form" method="post" action="cambiar_pass.php">
							<div class="form-group">
								<label for="old_pass" class="col-xs-12 col-sm-4 control-label">Escriba su contraseña actual:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="password" class="form-control" id="old_pass" name="antiguo_password" onkeyup="viejo_pass(this.value)" placeholder="Tu contraseña actual" required>
								<span id="val_pass"></span>
								</div>
							</div>
							<div class="form-group">
								<label for="new_password" class="col-xs-12 col-sm-4 control-label">Escriba su nueva contraseña:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="password" class="form-control" name="nuevo_password" onkeyup="nuevo_pass(this.value)" id="new_password" placeholder="Tu nueva contraseña" required>
								<span id="nuevo_pass"></span>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success" id="boton_nuevo_pass" name="submit" value="Registrate">Cambia contraseña</button>
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
						</form>
						</div>
					</div>
				</div>
			</div>

<p style="padding:30px"></p>
<!-- Mensaje de bienvenida-->
<div class="container">
	<div class="row row-content">
		<div class="alert alert-warning"><a href="#" data-dismiss="alert" class="close" aria-label='close'>&times;</a>
		<strong>Se recomienda usar esta sección en una pantalla de tablet, laptop o más grande.</strong>
		</div>
	</div>
</div>
<div class="container">
	<div class="row row-content">
		<div class="col-xs-12 col-sm-4">
			<a href="solicitudes.php"><span data-toggle="tooltip" data-placement="top" title="Ve las solicitudes de nuevos colegios y súbelos" class="glyphicon glyphicon-upload glyphicon-bigger"></span></a>
		</div>
		<div class="col-xs-12 col-sm-4">
			<a href="#"><span data-toggle="tooltip" data-placement="top" title="Revisa los datos sobre los puntajes de los usuarios"  class="glyphicon glyphicon-stats	glyphicon-bigger"></span></a>
		</div class="col-xs-12 col-sm-4">
		<div>
			<a type="button" data-toggle="modal" href="#" data-target="#ver_datos"><span  data-toggle="tooltip" data-placement="top" title="Actualiza y modifica datos sobre tus usuarios" class="glyphicon glyphicon-refresh glyphicon-bigger"></span></a>
		</div>
	</div>
</div>
<div class="modal fade" id="ver_datos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal">&times;</button>
							 <h3 class="modal-title">Escoja la categoría de usuario</h3>
						</div>
						<div class="modal-body">
						<form class="form-horizontal" role="form" method="get" action="ver_usuarios.php">
							<div class="form-group">
								<label for="dependencia" class="col-xs-12 col-sm-4 control-label">Escoja el tipo de usuario:</label>
								<div class="col-xs-12 col-sm-8">
								 <label class="radio-inline "><input type="radio"  id="dependencia" name="tipo" value="sin_colegio" required>Usuarios sin colegio</label>
								 <label class="radio-inline"><input type="radio" name="tipo" value="con_colegio" required>Usuarios con colegio</label>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success" id="boton_est_nuevo" name="submit" value="Registrate">Entrar</button>
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
						</form>
						</div>
					</div>
				</div>
			</div>


<script >
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>