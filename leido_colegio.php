<?php
	include "functions.php";
	$id = $_GET["id"];
	$cn = connection();
	if ($_GET["subir"] == "si"){
		## Agregar colegio en tabla colegios
		$insert = "INSERT INTO colegios(col_ciudad, col_nombre, col_dependencia) VALUES (?, ?, ?);";
		$stmt = $cn->prepare($insert);
		$stmt->bind_param("sss", $_GET["ciudad"], $_GET["nom"], $_GET["dep"]);
		$stmt->execute();

		$update = "UPDATE solicitud SET sol_visto = 1 WHERE sol_id = ?;";
		$stmt2 = $cn->prepare($update);
		$stmt2->bind_param("i", $_GET["id"]);
		$stmt2->execute();
		$cn->close();
		$stmt->close();
		header("Location: solicitudes.php");
	}else{
		$update = "UPDATE solicitud SET sol_visto = 1 WHERE sol_id = ?;";
		$stmt2 = $cn->prepare($update);
		$stmt2->bind_param("i", $_GET["id"]);
		$stmt2->execute();
		$cn->close();
		$stmt2->close();
		header("Location: solicitudes.php");	
	}
?>