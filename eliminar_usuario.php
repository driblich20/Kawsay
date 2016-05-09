<?php
include "functions.php";
$id = $_GET["mail"];
$del = "DELETE FROM usuario WHERE usu_correo = ?;";
$cn = connection();
$stmt = $cn->prepare($del);
$stmt->bind_param("s", $id);
$stmt->execute();
$cn->close();
$stmt->close();
header("Location: sin_colegio.php");
?>