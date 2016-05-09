<?php
include "functions.php";
$q = $_GET["q"];
$noms = array();
$cn = connection();
$select = "SELECT usu_correo FROM usuario;";
$res = $cn->query($select);
if ($res->num_rows > 1){
	while ($row = $res->fetch_assoc()){
		array_push($noms, $row["usu_correo"]);
	}
}
$hint = "";
		// lookup all hints from array if $q is different from ""
		if ($q !== "") {
		    $q = strtolower($q);
		    $len=strlen($q);
		    foreach($noms as $name) {
		        if (stristr($q, substr($name, 0, $len))) {
		            if ($hint === "") {
		                $hint = $name;
		            } else {
		                $hint .= ", $name";
		            }
		        }
		    }
		}
echo $hint === "" ? "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-alert'></span> No hay resultados</div>" :  "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-success'></span> Resultados encontrados: ".$hint."</div>";
?>