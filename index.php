<!DOCTYPE html>
<html>
<head land="es">
	<title>Kawsay</title>
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
			<button type="button" class="btn btn-index btn-primary btn-lg navbar-btn pull-right" data-toggle="modal" data-target="#solo"><span class="glyphicon glyphicon-log-in"></span> Registrate</button>

			<!-- Modal de individuo -->
			<div class="modal fade" id="solo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
							 <h3 class="modal-title">Registrate</h3>
						</div>

						<div class="modal-body">
							<form class="form-horizontal" role="form" method="post" action="#">
							<div class="form-group">
								<label for="user_nick" class="col-xs-12 col-sm-4 control-label">Escoja o escriba su nombre de usuario:</label>
								<div class="col-xs-12 col-sm-6">
								<input type="text" class="form-control" name="user_nick" id="user_nick" placeholder="Nombre de usuario" required><br>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-xs-12 col-sm-4 control-label">Escoja o escriba su contrasenia:</label>
								<div class="col-xs-12 col-sm-6">
								<input type="password" class="form-control" id="password" name="user_password" placeholder="Tu contrasenia" required><br> 
								</div>
							</div>
							
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success" name="submit" value="Registrate">Registrate</button>
							<button type="button" class="btn btn-danger btn-sm btn-outline" data-dismiss="modal">Cerrar</button>
						</div>
						</form>
						
					</div>
				</div>
			</div>				
			<button type="button" class="btn btn-index btn-primary btn-lg navbar-btn pull-right" data-toggle="modal" data-target="#colegio"><span class="glyphicon glyphicon-education"></span> Registra a tu colegio</button>
			<!-- Modal de colegio -->
			<div class="modal fade" id="colegio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal">&times;</button>
							 <h3 class="modal-title"> Registrate como colegio</h3>
						</div>
						<div class="modal-body">
						<form class="form-horizontal" role="form" method="post" action="#">
							<div class="form-group">
								<label for="usuario" class="col-xs-12 col-sm-4 control-label">Escriba su nombre de usuario:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Tu nombre de Usuario" required> <br>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-xs-12 col-sm-4 control-label">Escriba su contrasenia:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="password" class="form-control" name="password" id="password" placeholder="Su contrasenia" required><br>
								
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a type="button" class="btn btn-link" data-dismiss="modal" data-toggle="modal" href="#sin_registro">No tienes una cuenta?</a>
							<button type="submit" class="btn btn-success" name="submit" value="Registrate">Registrate</button>
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
						</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="sin_registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal">&times;</button>
							 <h3 class="modal-title">Registrate con tu colegio</h3>
						</div>
						<div class="modal-body">
						<form class="form-horizontal" role="form" method="post" action="#">
							<div class="form-group">
								<label for="col_nom" class="col-xs-12 col-sm-4 control-label">Seleccione el nombre de su colegio:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="text" class="form-control" name="colegio" id="col_nom" placeholder="Nombre de colegio" required><br>
								</div>
							</div>
							<div class="form-group">
								<label for="usuario" class="col-xs-12 col-sm-4 control-label">Escoja un nombre de usuario:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Tu nombre de Usuario" required> <br>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-xs-12 col-sm-4 control-label">Escoja una contrasenia:</label>
								<div class="col-xs-12 col-sm-8">
								<input type="password" class="form-control" name="password" id="password" placeholder="Su contrasenia" required><br>
								
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success" name="submit" value="Registrate">Registrate</button>
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
						</form>
						</div>
					</div>
				</div>
			</div>
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
		      <img src="imagenes/1.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/2.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/3.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/4.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/5.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/6.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/7.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/8.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/9.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/10.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/11.jpg" alt="No me da verguenza desnudarme ante un medico por perder la vida">
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
  		interval: 3000
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
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>