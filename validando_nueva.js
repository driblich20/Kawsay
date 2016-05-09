function deshabilitarLimpiar(){
	document.getElementById("boton_nuevo_pass").disabled = true;
	document.getElementById("old_pass").value = "";
}

function nuevo_pass(str){
	if (str.length < 6 || str.length == 0 ){
		document.getElementById("nuevo_pass").innerHTML = "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-alert'></span> La contraseña debe contener 6 caracteres</div>";
		document.getElementById("boton_nuevo_pass").disabled = true;
		return;
	}
	else{
		document.getElementById("nuevo_pass").innerHTML = "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-ok'></span> Contraseña válida</div>";
		document.getElementById("boton_nuevo_pass").disabled = false;
	}
}

function viejo_pass(str){
	if (str.length < 6){
		document.getElementById("val_pass").innerHTML = "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-alert'></span> La contraseña debe contener 6 caracteres</div>";
		
		return;
	}
	else{
		var http = new XMLHttpRequest();
		http.onreadystatechange = function(){
			if(http.readyState == 4 && http.status == 200){
				document.getElementById("val_pass").innerHTML = http.responseText;
			}
		};
		http.open("GET", "pass_viejo_val.php?q=" + str, true);
		http.send();
		document.getElementById("boton_nuevo_pass").disabled = false;
		}
	}