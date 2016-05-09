<?php
include "functions.php";
$q = $_GET["q"];
$cn = connection();
$select = "SELECT col_usu_correo, col_usu_nombre, col_fecha_log FROM colegio WHERE col_usu_correo = ?;";
$stmt = $cn->prepare($select);
$stmt->bind_param("s", $q);
$stmt->execute();
$stmt->bind_result($mail, $nick, $log);
$row = $stmt->fetch();
echo "<h3 style='color:floralwhite'>Resultado de la búsqueda: </h3><div class='table table-responsive'>".
		"<table class='table table-hover'>".
		"<thead><tr class='info'><th>Correo electrónico de usuario</th><th>Nombre de usuario</th><th>Fecha de registro</th><th>Cambiar</th><th>Eliminar</th></tr></thead>".
				 "<tbody><tr><td>".$mail."</td>".
				"<td>".$nick."</td>".
				"<td>".$log."</td>".
				"<td><a type='button' class='btn btn-info btn-xs' href='eliminar_usuario.php?mail=".$mail."&nom=".$nick."'><span class='glyphicon glyphicon-refresh'></span></a></td>".
					"<td><a type='button' class='btn btn-danger btn-xs' href='eliminar_usuario.php?mail=".$mail."'><span class='glyphicon glyphicon-remove'></span></a></td></tr></tbody></table></div><hr>";
?>