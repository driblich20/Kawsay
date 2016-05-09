<?php
## Obteniendo query de respuesta desde formulario
$q = $_REQUEST["q"];
$match = false;
$requisito = array("1", "2", "3", "4","5","6","7","8","9", "0");
if(strlen($q) >= 6){
	$q = strtolower($q);
	foreach ($requisito as $num) {
		if (stristr($q, $num)){
			$match = true;
		}
	}
	if ($match == false){
		echo "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-alert'></span> La contraseña debe tener un numero</div>";
	}
	else {
		echo "<div class='alert alert-success' id='validar' value='1'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-ok-circle'></span> Contraseña válida </div>";
	}
}
else{
	echo "Error";
}

?>