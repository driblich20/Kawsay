<?php
session_start();
?>
<?php
if(isset($_GET["submit"])){
	if ($_GET["tipo"] == "sin_colegio"){
		header("Location: sin_colegio.php");
	}
	else{
		header("Location: con_colegio.php");
	}
}
?>