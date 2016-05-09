<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kawsay</title>
	<meta charset="utf-8">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="bootstrap/css/mystyle.css" rel="stylesheet">
	<link href="bootstrap/bootstrap-social/bootstrap-social.css" rel="stylesheet"> 
	<link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet"> 
	<!--<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>-->
	<script src="bootstrap/jquery/dist/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>	
</head>
<body background="imagenes/logo.png">
<div class="container">
	<nav class="navbar navbar-default" style="background: rgba(148,0,211, 0.6)" >
	<div class="header">
	    <button type="button" class="navbar-toggle btn btn-default btn-sm" data-toggle="collapse"
	            data-target="#desplegable">
	      <span class="sr-only">Desplegar navegación</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
    </div>
    	<!-- Contenido del nav a mostrar, si la pantalla colapsara, como pasa con dispositivos moviles
    		mostrara el contenido de forma desplegable, mediante el boton previamente definido-->
    	<div class="collapse navbar-collapse" id="desplegable">
			<img src="imagenes/logo_peque.png" class="pull-left image-responsive" >
			<br>
			<br>
			<br>
	<!-- Boton de Facebook -->
			<a href="https://www.facebook.com/FundacionUnifranz/?fref=ts" target="_blank"><button class="btn btn-facebook btn-lg navbar-btn pull-right"><i class="fa fa-facebook"></i> | Visitanos en Facebook</button></a>

			<!-- Boton para abrir tooltip con el numero de la Fundacion Unifranz-->
			<button type="button" class="btn btn-index btn-lg btn-info navbar-btn pull-right" data-toggle="tooltip" data-placement="bottom" title="Llamenos directamente al: 2487700"><span class="glyphicon glyphicon-earphone"></span> Contacto</button>
			<!-- Boton para abrir modal con mapa de la Fundacion-->
			<button type="button" class="btn btn-index btn-lg btn-info navbar-btn pull-right" data-toggle="modal" data-target="#mapa"><span class="glyphicon glyphicon-map-marker"></span> Ubicacion</button>
			<div class="modal fade" tabindex="-1" role="dialog" id="mapa">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Fundacion UNIFRANZ</h4>
			      </div>
			      <div class="modal-body">
			      	<div class="row">
			      	<div class="col-xs-12 col-sm-12">
			        <p>Calle Héroes del Acre 1885 esq. Landaeta 4to Piso La Paz</p>
			        </div>
			        <div class="col-xs-12 col-sm-8">
			        	<iframe width="500px" height="500px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d478.17477806503666!2d-68.13291117581485!3d-16.505981467440108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xecdc050310cd3fe0!2sUniversidad+Franz+Tamayo!5e0!3m2!1ses-419!2s!4v1461290222114" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			      	</div>
			      	</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			</div>
		</nav>
	</div>
	<div class="container">
		<div class="row row-content">
			<div class="col-xs-12 col-sm-9 col-sm-offset-2">
			<p style="padding:10px"></p>
			<?php
					include "functions.php";
					$_SESSION["est_mail_actual"] = $_POST["est_nuevo_mail"];
					$_SESSION["est_nom_actual"] = $_POST["est_nuevo_usuario"];
					$_SESSION["est_pass_actual"] = $_POST["est_nuevo_password"];
					$_SESSION["est_col_actual"] = $_POST["nom_colegio"];
					$hoy = date("Y/m/d");
					$cn = connection();
					$result = "SELECT LCASE(col_usu_correo), col_usu_nombre FROM colegio WHERE col_usu_correo = ?;";
					$stmt = $cn->prepare($result);
					$stmt->bind_param("s", $mail);
					$mail = strtolower($_SESSION["est_mail_actual"]);
					$stmt->execute();
					$stmt->bind_result($mail, $user);
					$stmt->fetch();

					if($mail != "" && $user != ""){
								## Si existe un nombre de usuario que tiene ya ese nombre, se debera escoger otro nombre
								echo "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
								<strong>Nombre de usuario existente</strong>, prueba con otro nombre de usuario</div>";
								echo "<a type='button' class='btn btn-warning btn-lg' href='index.php'>Vuelve a llenar el registro</a>";
								## Cerrando servidor y statement
								$cn->close();
								$stmt->close();	
							}
							else{
								$con = connection();
								$relacion = "SELECT col_id FROM colegios WHERE col_nombre = ?;";
								$stmt3 = $con->prepare($relacion);
								$stmt3->bind_param("s", $_SESSION["est_col_actual"]);
								$stmt3->execute();
								$stmt3->bind_result($id);
								$stmt3->fetch();

								$cn = connection();
								$sql = "INSERT INTO colegio(col_usu_correo, col_usu_nombre, col_password, col_id, col_fecha_log) VALUES (?, ?, ?, ?, ?);";
								$stmt2 = $cn->prepare($sql);
								$stmt2->bind_param('ssssi', $mail, $_SESSION["est_nom_actual"], $_SESSION["est_pass_actual"], $id, $hoy);
								$mail = strtolower($_SESSION["est_mail_actual"]);
								$stmt2->execute();
								echo "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
								<strong>Gracias ". $_SESSION["est_nom_actual"] ." >> ". $_SESSION["est_mail_actual"]." </strong>, ingresa con tu correo electrónico <span class='glyphicon glyphicon-arrow-down'> </span></div>";
								## Query preparado para agregar al parametro como nombre de usuario 
								## a la BD KAWSAY, tabla usuario
								
								echo '<div class="row row-content">
									 		<form class="form-horizontal" role="form" method="post" action="entra_colegio.php">
												<div class="form-group">
													<label for="user_mail" style="color:floralwhite" class="col-xs-12 col-sm-4 control-label">Escriba su nombre correo electronico:</label>
														<div class="col-xs-12 col-sm-6">
															<input type="email" class="form-control" name="estudiante_nom" id="user_mail" placeholder="Tu correo electronico" required><br>
														</div>
												</div>
												<div class="form-group">
													<label for="password" style="color:floralwhite" class="col-xs-12 col-sm-4 control-label">Escriba su contraseña:</label>
														<div class="col-xs-12 col-sm-6">
															<input type="password" class="form-control" id="password" name="estudiante_password" placeholder="Tu contraseña" required><br> 
														</div>
												</div>
												<div class="col-xs-12 col-sm-4 col-xs-offset-4 col-sm-offset-4">
													<button type="submit" class="btn btn-success" name="submit" value="Registrate">Entra</button>
												</div>
											</form>
									 	</div>';
								## Cerrando servidor y statement
								$con->close();
								$cn->close();
								$stmt3->close();
								$stmt2->close();		
								
							}
			
			 ?>
	 		</div>
		 </div>
	 </div>
	<!-- Funcion para activar los tooltips-->
	<script type="text/javascript">
		$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
	</script>
</body>
</html>