<?php
include "functions.php";
$id = $_GET["mail"];
$del = "DELETE FROM colegio WHERE usu_correo = ?;";
$cn = connection();
$stmt = $cn->prepare($del);
$stmt->bind_param("s", $id);
$stmt->execute();
$cn->close();
$stmt->close();
header("Location: con_colegio.php");
?>