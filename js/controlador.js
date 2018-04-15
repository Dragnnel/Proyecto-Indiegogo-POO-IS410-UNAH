

function crearCuenta(){
	var parametros= "nombre="+$("#txt-nombre").val()+"&"+
					"apellido="+$("#text-apellido").val()+"&"+
					"email="+$("#txt-email").val()+"&"+
					"password="+$("#txt-password").val()+"&"+
					"checkNotificar="+$("#checkNotificar").val();
	console.log(parametros);
	$.ajax({
		url:"ajax/guardar-usuario.php",
		method:"POST",
		data:parametros,
		success:function(respuesta){
			console.log(respuesta);
			$("#div-respuesta").append(respuesta);
		}
	});
}

$(document).ready(function(){
	//Esta funcion se ejecutar cuando todo el DOM se haya cargado
	$.ajax({
		url:"ajax/obtener-usuarios.php",
		success:function(respuesta){
			console.log(respuesta);
			//$("#div-usuarios").html(respuesta);
		}
	});

});




