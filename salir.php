<?php
	unset($_SESSION["usu_act_correo"]);
	unset($_SESSION["usu_act_password"]);
	session_destroy();
	header("Location: index.php");
?>