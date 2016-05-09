function busca_usuario(str){
	if(str.length == 0){
		document.getElementById("nueva_busq").innerHTML = "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-alert'></span> No hay resultados</div>";
		return ;
	}else{
		var http = new XMLHttpRequest();
		http.onreadystatechange = function(){
			if(http.readyState == 4 && http.status == 200){
				document.getElementById("nueva_busq").innerHTML = http.responseText;
			}
		};
		http.open("GET", "busq_usuario.php?q=" + str, true);
		http.send();
	}
}

function mostrar_busqueda(){
	var busq = document.getElementById("busqueda_input").value;
	if(busq.length == 0){
		document.getElementById("busqueda_realizada").innerHTML = "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-alert'></span> No hay resultados</div>";
		return ;
	}else{
		var http = new XMLHttpRequest();
		http.onreadystatechange = function(){
			if(http.readyState == 4 && http.status == 200){
				document.getElementById("busqueda_realizada").innerHTML = http.responseText;
			}
		};
		http.open("GET", "buscar_usuario.php?q=" + busq, true);
		http.send();
	}
}
function busca_estudiante(str){
	if(str.length == 0){
		document.getElementById("nueva_busq").innerHTML = "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-alert'></span> No hay resultados</div>";
		return ;
	}else{
		var http = new XMLHttpRequest();
		http.onreadystatechange = function(){
			if(http.readyState == 4 && http.status == 200){
				document.getElementById("nueva_busq").innerHTML = http.responseText;
			}
		};
		http.open("GET", "busq_est.php?q=" + str, true);
		http.send();
	}
}

function mostrar_busqueda_est(){
	var busq = document.getElementById("busqueda_input_est").value;
	if(busq.length == 0){
		document.getElementById("busqueda_realizada").innerHTML = "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <span class='glyphicon glyphicon-alert'></span> No hay resultados</div>";
		return ;
	}else{
		var http = new XMLHttpRequest();
		http.onreadystatechange = function(){
			if(http.readyState == 4 && http.status == 200){
				document.getElementById("busqueda_realizada").innerHTML = http.responseText;
			}
		};
		http.open("GET", "mostrar_busq.php?q=" + busq, true);
		http.send();
	}
}