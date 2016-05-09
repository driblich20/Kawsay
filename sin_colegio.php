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
	<script src="busca_usuario.js"></script>
</head>
<body background="imagenes/logo.png">
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
			<a class="navbar-brand navbar-color" href="admin_sesion.php">Kawsay Administrador</a>
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
<!-- Modal para seleccionar datos sobre usuarios mostrar -->
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
<!-- Modal para cambiar contraseña-->
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
<p style="padding:50px"></p>
<div class="container">
	<div class="row row-content">
		<div class="col-xs-4">
			<h2 style="color:floralwhite;text-align:center">Actualiza los datos de los usuarios</h2>
		</div>
		<div class="col-xs-8">
			<form class="form-vertical" role="form">
							<div class="form-group">
								<div class="col-xs-12 col-sm-8">
									<input type="text" class="form-control" name="busqueda" onkeyup="busca_usuario(this.value)" id="busqueda_input" placeholder="Busque a un usuario por su correo" required>
									<span id="nueva_busq"></span>
								</div>
							</div>
							<a type="button" class="btn btn-default" id="boton_nuevo_pass" name="submit" onclick="mostrar_busqueda()" value="Registrate">Buscar <span class='glyphicon glyphicon-search'></span></a>
			</form>
		</div>
	</div>
	<div class="row row-content">
		<div class="col-xs-12 col-sm-10">
			<span id="busqueda_realizada"></span>
		</div>
		<div class="col-xs-12 col-sm-10">
			<div class="table table-responsive">
			<table class="table table-hover">
				<?php 
					include "functions.php";
					$cn = connection();
					$selection = "SELECT usu_correo, usu_nombre, usu_fecha_log FROM usuario";
					$result = $cn->query($selection);
					if($result->num_rows >0 ){
						echo "<thead><tr class='info'><th>Correo electrónico de usuario</th><th>Nombre de usuario</th><th>Fecha de registro</th><th>Cambiar</th><th>Eliminar</th></tr></thead>";
						while($row  = $result->fetch_assoc()){
							echo "<tbody><tr><td>".$row["usu_correo"]."</td>".
								 "<td>".$row["usu_nombre"]."</td>".
								 "<td>".$row["usu_fecha_log"]."</td>".
								 "<td><a type='button' class='btn btn-info btn-xs' href='eliminar_usuario.php?mail=".$row["usu_correo"]."&nom=".$row["usu_nombre"]."'><span class='glyphicon glyphicon-refresh'></span></a></td>".
								 "<td><a type='button' class='btn btn-danger btn-xs' href='eliminar_usuario.php?mail=".$row["usu_correo"]."'><span class='glyphicon glyphicon-remove'></span></a></td></tr></tbody>";

						}
					}
				?>
			</table>
			</div>
		</div>
			<div class="col-xs-12 col-sm-2">
				<?php
					$con = connection();
					$q = "SELECT COUNT(usu_correo) AS 'NumeroUsuarios' FROM usuario;";
					$result = $con->query($q);
					$num = $result->fetch_assoc();
					echo "<div class='panel panel-info'><div class='panel-heading'>Número de usuarios: </div><div class='panel-body'>Actualmente tiene: ".$num["NumeroUsuarios"]." usuario/os</div></div>"
				?>
			</div>
		</div>
	</div>
	
</div>
</body>
</head>