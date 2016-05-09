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
<!-- Barra de navegacion-->

<!-- Mensaje de bienvenida-->
<div class="container">
	<div class="row row-content">
		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
			<?php 
				include "functions.php";
				$cn = connection();
				$user_name = "SELECT usu_nombre FROM usuario WHERE usu_correo = ?;";
				$stmt = $cn->prepare($user_name);
				$stmt->bind_param("s", $_SESSION["usu_act_correo"]);
				$stmt->execute();
				$stmt->bind_result($nick);
				$stmt->fetch();

				echo "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Bienvenido ". $nick ."</strong>, debajo observaras tu puntaje e historial de juegos, revisa la barra del menu para acceder a los juegos y demas opciones, <strong>disfruta de KAWSAY</strong></div>";
				$cn->close();
				$stmt->close();
			?>
		</div>
	</div>
</div>
<!-- Carousel-->
<div class="container">
	<div class="row row-content">
		<div class="col-xs-12 col-sm-12">
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
		      <img src="imagenes/12.jpg" alt="No me da verguenza desnudarme ante un medico a perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/13.jpg" alt="No me da verguenza desnudarme ante un medico a perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/14.jpg" alt="No me da verguenza desnudarme ante un medico a perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/15.jpg" alt="No me da verguenza desnudarme ante un medico a perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/16.jpg" alt="No me da verguenza desnudarme ante un medico a perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/17.jpg" alt="No me da verguenza desnudarme ante un medico a perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/18.jpg" alt="No me da verguenza desnudarme ante un medico a perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/19.jpg" alt="No me da verguenza desnudarme ante un medico a perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/20.jpg" alt="No me da verguenza desnudarme ante un medico a perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/21.jpg" alt="No me da verguenza desnudarme ante un medico a perder la vida">
		    </div>
		    <div class="item">
		      <img src="imagenes/22.jpg" alt="No me da verguenza desnudarme ante un medico a perder la vida">
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
</body>
</html>