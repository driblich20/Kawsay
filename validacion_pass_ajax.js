function limpiar(){
			document.getElementById("usu_nuevo_password").value = "";
			document.getElementById("usu_password").value = "";
			document.getElementById("est_password").value = "";
			document.getElementById("est_nuevo_password").value = "";
		}
		function limpiar_avisos(){
			document.getElementById("validacion_pass").innerHTML = "";
			document.getElementById("est_nuevo_val").innerHTML = "";
			document.getElementById("validacion_pass_regis").innerHTML = "";
			document.getElementById("est_val").innerHTML = "";
		}
		function deshabilitar(){
			document.getElementById("boton_est_regis").disabled = true;
			document.getElementById("boton_solo_regis").disabled = true;
			document.getElementById("boton_solo_nuevo").disabled = true;
			document.getElementById("boton_est_nuevo").disabled = true;
		}
		function poner_pass(str){
				if(str.length < 6){
					
					document.getElementById("validacion_pass").innerHTML = "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-alert'></span> La contraseña debe contener 6 caracteres</div>";
					document.getElementById("est_nuevo_val").innerHTML = "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-alert'></span> La contraseña debe contener 6 caracteres</div>";
					return;
				}
				else{
					var http = new XMLHttpRequest();
					http.onreadystatechange = function(){
						if(http.readyState == 4 && http.status == 200){
							document.getElementById("est_nuevo_val").innerHTML = http.responseText;
							document.getElementById("validacion_pass").innerHTML = http.responseText;
						}
					};
					http.open("GET", "pass_apropiado.php?q=" + str, true);
					http.send();
					document.getElementById("boton_solo_nuevo").disabled = false;
					document.getElementById("boton_est_nuevo").disabled = false;
			}
		}

		function poner_pass_regis(str){
				if(str.length < 6){
					
					
					document.getElementById("validacion_pass_regis").innerHTML = "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-alert'></span> La contraseña debe contener 6 caracteres</div>";
					document.getElementById("est_val").innerHTML = "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><span class='glyphicon glyphicon-alert'></span> La contraseña debe contener 6 caracteres</div>";
					return;
				}
				else{
					var http = new XMLHttpRequest();
					http.onreadystatechange = function(){
						if(http.readyState == 4 && http.status == 200){
							document.getElementById("est_val").innerHTML = http.responseText;
							document.getElementById("validacion_pass_regis").innerHTML = http.responseText;
						}
					};
					document.getElementById("boton_solo_regis").disabled = false;
					document.getElementById("boton_est_regis").disabled = false;
					
					http.open("GET", "pass_apropiado.php?q=" + str, true);
					http.send();
			
					
			}
		}