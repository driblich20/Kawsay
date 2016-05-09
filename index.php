<!DOCTYPE html>
<html>
<head land="es">
	<meta charset="UTF-8">
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
	<!-- AJAX scripts para validacion de una contraseña segura -->
	<script src="validacion_pass_ajax.js"></script>	
</head>

<body background="imagenes/logo.png">
	<div class="container">
		<nav class="navbar navbar-default bg-faded" style="background: rgba(148,0,211, 0.6)" >
			 <!-- El logotipo y el icono que despliega el menú se agrupan
       			para mostrarlos mejor en los dispositivos móviles -->
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
			<button type="button" class="btn btn-index btn-primary btn-lg navbar-btn pull-right" data-toggle="modal" data-target="#solo" onclick="limpiar();limpiar_avisos();deshabilitar()">
			<span class="glyphicon glyphicon-log-in"></span> Inicia Sesión</button>

			<!-- Modal de individuo -->
			<div class="modal fade" id="solo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
							 <h3 class="modal-title">Inicia sesión</h3>
						</div>

						<div class="modal-body">
							<form class="form-horizontal" role="form" method="post" action="entra_solo.php" name="solo_regis">
							<div class="form-group">
								<label for="user_email" class="col-xs-12 col-sm-4 control-label">Escriba su correo electrónico:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="text" class="form-control" name="usu_nuevo_correo" id="user_email" placeholder="Email con el que te registraste" required>
								</div>
							</div>
							<div class="form-group">
								<label for="usu_password" class="col-xs-12 col-sm-4 control-label">Escriba su contraseña:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="password" class="form-control" id="usu_password" onkeyup="poner_pass_regis(this.value)" name="usu_password_nuevo" placeholder="Tu contraseña" required>
								<p id="validacion_pass_regis"></p>
								</div>
							</div>
							
						</div>
						<div class="modal-footer">
							<a href="#sin_registro_solo" type="button" class="btn btn-link btn-sm" data-dismiss="modal" data-toggle="modal">¿No tienes una cuenta?</a>
							<button type="submit" id="boton_solo_regis" class="btn btn-success" name="submit" value="Registrate">Entra</button>
							<button type="button" class="btn btn-danger btn-sm btn-outline" data-dismiss="modal">Cerrar</button>
						</div>
						</form>
						
					</div>
				</div>
			</div>	
			<!-- Modal anidado por si el usuario no tuviera una cuenta-->
			<div class="modal fade" id="sin_registro_solo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal">&times;</button>
							 <h3 class="modal-title">Regístrate individualmente</h3>
						</div>
						<div class="modal-body">
						<form class="form-horizontal" role="form" method="post" action="sin_registro_solo.php">
							<div class="form-group">
								<label for="usuario" class="col-xs-12 col-sm-4 control-label">Escriba su correo electrónico:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="email" class="form-control" id="usuario" name="usu_nuevo_correo" placeholder="Su correo electrónico" required> 
								</div>
							</div>
							<div class="form-group">
								<label for="usuario" class="col-xs-12 col-sm-4 control-label">Escoja un nombre de usuario:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="text" class="form-control" id="usuario" name="usu_nuevo" placeholder="Su nombre de Usuario" required>
								</div>
							</div>
							<div class="form-group">
								<label for="usu_nuevo_password" class="col-xs-12 col-sm-4 control-label">Escoja una contraseña:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="password" class="form-control" onkeyup="poner_pass(this.value)" name="usu_password_nuevo" id="usu_nuevo_password" placeholder="Su contraseña" required>
								<p id="validacion_pass"></p>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success" id="boton_solo_nuevo" name="submit" value="Registrate">Regístrate</button>
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
						</form>
						</div>
					</div>
				</div>
			</div>

			<button type="button" class="btn btn-index btn-primary btn-lg navbar-btn pull-right" onclick="limpiar();limpiar_avisos();deshabilitar()" data-toggle="modal" data-target="#colegio">
			<span class="glyphicon glyphicon-education"></span> Inicia sesión como estudiante</button>
			<!-- Modal de colegio -->
			<div class="modal fade" id="colegio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal">&times;</button>
							 <h3 class="modal-title"> Inicia sesión como estudiante</h3>
						</div>
						<div class="modal-body">
						<form class="form-horizontal" role="form" method="post" action="entra_colegio.php">
							<div class="form-group">
								<label for="usuario" class="col-xs-12 col-sm-4 control-label">Escriba su correo electrónico de usuario:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="mail" class="form-control" id="usuario" name="estudiante_nom" placeholder="Tu nombre correo electrónico" required> <br>
								</div>
							</div>
							<div class="form-group">
								<label for="est_password" class="col-xs-12 col-sm-4 control-label">Escriba su contraseña:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="password" class="form-control" name="estudiante_password" onkeyup="poner_pass_regis(this.value)" id="est_password" placeholder="Tu contraseña" required>
								<p id="est_val"></p>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a type="button" class="btn btn-link" data-dismiss="modal" data-toggle="modal" href="#sin_registro">¿No tienes una cuenta?</a>
							<button type="submit" class="btn btn-success" id="boton_est_regis" name="submit_col" value="Registrate">Entra</button>
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
						</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal anidado para las personas sin registro previo-->
			<div class="modal fade" id="sin_registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal">&times;</button>
							 <h3 class="modal-title">Registrate como estudiante de tu colegio</h3>
						</div>
						<div class="modal-body">
						<form class="form-horizontal" role="form" method="post" action="sin_registro_cole.php">
							<div class="form-group">
								<label for="colegio" class="col-xs-12 col-sm-4 control-label">Seleccione el nombre de su colegio:</label>
								<div class="col-xs-12 col-sm-8">
								<select data-live-search="true" class="selectpicker show-tick form-control" name="nom_colegio" id="colegio" title="Seleccione a su colegio" required>
									<?php
										include "functions.php";
										$con = connection();
										$colegios = "SELECT DISTINCT col_nombre FROM colegios;";
										$result = $con->query($colegios);
										while($name = $result->fetch_assoc()){
											echo "<option>".$name["col_nombre"]."</option>";
										}
										$con->close();
									?>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label for="est_mail" class="col-xs-12 col-sm-4 control-label">Escriba su correo electrónico</label>
								<div class="col-xs-12 col-sm-8">
									<input type="mail" class="form-control" id="est_mail" name="est_nuevo_mail" placeholder="Tu correo electrónico" required>
								</div>
							</div>
							<div class="form-group">
								<label for="usuario" class="col-xs-12 col-sm-4 control-label">Escoja un nombre de usuario:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="text" class="form-control" id="usuario" name="est_nuevo_usuario" placeholder="Tu nombre de Usuario" required> 
								</div>
							</div>
							<div class="form-group">
								<label for="est_password" class="col-xs-12 col-sm-4 control-label">Escoja una contraseña:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="password" class="form-control" name="est_nuevo_password" id="est_nuevo_password" onkeyup="poner_pass(this.value)" placeholder="Tu contraseña" required>
								<p id="est_nuevo_val"></p>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a href="#nuevo_colegio" class="btn btn-link" data-dismiss="modal" data-toggle="modal" type="button">¿No está tu colegio?</a>
							<button type="submit" class="btn btn-success" id="boton_est_nuevo" name="submit" value="Registrate">Regístrate</button>
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
						</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal para registro de nuevo colegio-->
			<div class="modal fade" id="nuevo_colegio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal">&times;</button>
							 <h3 class="modal-title">Registra a tu colegio</h3>
						</div>
						<div class="modal-body">
						<form class="form-horizontal" role="form" method="get" action="nuevo_registro_cole.php">
							<div class="form-group">
								<label  for="nuevo_colegio" class="col-xs-12 col-sm-4 control-label">Escriba el nombre de tu colegio:</label>
								<div class="col-xs-12 col-sm-8">
									<input data-toggle="tooltip" data-placement="right" title="Escriba exactamente el nombre de su colegio" type="text" name="nuevo_colegio" class="form-control" id="nuevo_colegio" placeholder="Tu colegio">
								</div>
							</div>
							<div class="form-group">
								<label for="ciudad" class="col-xs-12 col-sm-4 control-label">Escriba la ciudad de tu colegio:</label>
								<div class="col-xs-12 col-sm-8">
								<select data-live-search="true" class="selectpicker show-tick form-control" name="ciudad_colegio" id="ciudad" title="Seleccione su ciudad" required>
									<option>La Paz</option>
									<option>Cochabamba</option>
									<option> Oruro</option>
									<option>Potosí</option>
									<option>Chuquisaca</option>
									<option>Tarija</option>
									<option>Santa Cruz</option>
									<option>Beni</option>
									<option>Pando</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label for="dependencia" class="col-xs-12 col-sm-4 control-label">Escoja la dependencia de su colegio:</label>
								<div class="col-xs-12 col-sm-8">
								 <label class="radio-inline "><input type="radio"  id="dependencia" name="dependencia_colegio" value="Fiscal" required>Fiscal</label>
								 <label class="radio-inline"><input type="radio" name="dependencia_colegio" value="Privado" required> Privado</label>
								<label class="radio-inline"><input type="radio"  name="dependencia_colegio" value="Convenio" required> Convenio</label>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success" id="boton_est_nuevo" name="submit" value="Registrate">Enviar</button>
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
						</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Boton de Facebook -->
			<a href="https://www.facebook.com/FundacionUnifranz/?fref=ts" target="_blank"><button class="btn btn-facebook btn-lg navbar-btn pull-right"><i class="fa fa-facebook"></i> | Facebook</button></a>

			<!-- Boton para abrir tooltip con el numero de la Fundacion Unifranz-->
			<button type="button" class="btn btn-index btn-lg btn-info navbar-btn pull-right" data-toggle="tooltip" data-placement="bottom" title="Llamenos directamente al: 2487700"><span class="glyphicon glyphicon-earphone"></span> Contacto</button>
			<!-- Boton para abrir modal con mapa de la Fundacion-->
			<button type="button" class="btn btn-index btn-lg btn-info navbar-btn pull-right" data-toggle="modal" data-target="#mapa"><span class="glyphicon glyphicon-map-marker"></span> Ubicación</button>
			<div class="modal fade" tabindex="-1" role="dialog" id="mapa">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Fundación UNIFRANZ</h4>
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
	<div class="col-xs-12 col-sm-12">

	<!-- Carousel para mostrar las imagenes con los personajes de ATB, con mensaje contra el cancer -->
		<div id="carousel" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carousel" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel" data-slide-to="1"></li>
		    <li data-target="#carousel" data-slide-to="2"></li>
		    <li data-target="#carousel" data-slide-to="3"></li>
		    <li data-target="#carousel" data-slide-to="4"></li>
		    <li data-target="#carousel" data-slide-to="5"></li>
		    <li data-target="#carousel" data-slide-to="6"></li>
		    <li data-target="#carousel" data-slide-to="7"></li>
		    <li data-target="#carousel" data-slide-to="8"></li>
		    <li data-target="#carousel" data-slide-to="9"></li>
		    <li data-target="#carousel" data-slide-to="10"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="imagenes/1.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida" class="image-responsive">
		    </div>
		    <div class="item">
		      <img src="imagenes/2.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida" class="image-responsive">
		    </div>
		    <div class="item">
		      <img src="imagenes/3.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida" class="image-responsive">
		    </div>
		    <div class="item">
		      <img src="imagenes/4.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida" class="image-responsive">
		    </div>
		    <div class="item">
		      <img src="imagenes/5.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida" class="image-responsive">
		    </div>
		    <div class="item">
		      <img src="imagenes/6.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida" class="image-responsive">
		    </div>
		    <div class="item">
		      <img src="imagenes/7.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida" class="image-responsive">
		    </div>
		    <div class="item">
		      <img src="imagenes/8.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida" class="image-responsive">
		    </div>
		    <div class="item">
		      <img src="imagenes/9.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida" class="image-responsive">
		    </div>
		    <div class="item">
		      <img src="imagenes/10.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida" class="image-responsive">
		    </div>
		    <div class="item">
		      <img src="imagenes/11.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida" class="image-responsive">
		    </div>
		  </div>
		  <!--  Control izquierdo y derecho-->
		  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
		    <span class="icon-prev" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
		    <span class="icon-next" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		  <!-- Boton para continuar con el carousel -->
		<button class="btn btn-primary btn-sm pull-right" onclick="go_on()"><span class="glyphicon glyphicon-play"></span></button>

		  <!-- Boton para pausar el carousel -->
		<button class="btn btn-danger btn-sm pull-right" onclick="stop()"><span class="glyphicon glyphicon-pause"></span></button>
		
		</div>
		</div>
	</div>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-sm-offset-8">
				<!--a href="#"><i class="fa fa-facebook-square fa-3x"></i></a> -->
				<a href="https://www.facebook.com/FundacionUnifranz/?fref=ts" target="_blank"><button class="btn btn-facebook pull-right"><i class="fa fa-facebook"></i> | Visitanos en Facebook</button></a>
			</div>
		</div>
	</div>
	</footer>

<!-- Scripts de control del tiempo de transicion -->
<script type="text/javascript">
	$('.carousel').carousel({
  		interval: 7000;
	})
</script>
<!-- Funciones para parar el carousel y continuarlo-->
<script>
	function stop(){
		$('.carousel').carousel('pause');
	}
	function go_on(){
		$('.carousel').carousel('cycle');
	}
</script>
<!-- Funcion para activar los tooltips-->
<script>
	$(function () {
  		$('[data-toggle="tooltip"]').tooltip();
	})
</script>
</body>
</html>