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
<body background="imagenes/logo.png">
<!-- Barra de navegacion -->
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
<!-- Mensaje de bienvenida -->
<div class="container">
	<div class="row row-content">
		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
			<?php 
				include "functions.php";
				$_SESSION["est_mail_actual"] = $_POST["estudiante_nom"];
				$_SESSION["est_pass_actual"] = $_POST["estudiante_password"];
				$cn = connection();
				$validation = "SELECT col_usu_correo, col_password, col_privilegio FROM colegio WHERE col_usu_correo = ? AND col_password = ?;";
				$stmt = $cn->prepare($validation);
				$stmt->bind_param("ss", $_SESSION["est_mail_actual"], $_SESSION["est_pass_actual"]);
				$stmt->execute();
				$stmt->bind_result($real_mail, $pass, $priv);
				$stmt->fetch();
				if ($priv == 1 && $pass == $_SESSION["est_pass_actual"] && $real_mail == $_SESSION["est_mail_actual"]){
					header("Location: admin_sesion.php");
				}
				else if($real_mail == $_SESSION["est_mail_actual"] && $pass == $_SESSION["est_pass_actual"]){
					header("Location: sesion_colegio.php");
					}
				else{
					echo "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error al registrarte</strong>, el nombre de usuario 
					o la contrasenia son incorrectos, intentelo nuevamente</div>";
					echo "<a href='index.php' type='button' class='btn btn-warning'>Vuelve a registrarte</a>";
				}
			?>
		</div>
	</div>
</div>
<!-- Nombre de colegio-->

</body>
</html>