<?php
include "functions.php";
$q = $_REQUEST["q"];
$cn = connection();
$viejo = "SELECT usu_password FROM usuario WHERE usu_correo = 'admin@gmail.com';";
$result = $cn->query($viejo);
$pass = $result->fetch_assoc();
if($q == $pass["usu_password"]){
	echo "<div class='alert alert-success'><a href='#' data-dismiss='alert' aria-label='close' class='close' data-target='alert'>&times;</a><strong><span class='glyphicon glyphicon-ok'></span> La contraseña es igual</strong></div>";
}else{
	echo "<div class='alert alert-warning'><a href='#' data-dismiss='alert' aria-label='close' class='close' data-target='alert'>&times;</a><strong>La contraseña no es igual a la anterior</strong></div>";

}
?>