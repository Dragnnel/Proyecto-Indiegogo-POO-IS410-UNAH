
$("#btn-explorar").hover(
    function(){
        $("#div-explorar").show();
    }
);

$("#div-explorar").hover(
	function(){
        $("#div-explorar").show();
    },
    function(){
        $("#div-explorar").hide();
    }
);

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

function validar(){
	validarCampoVacio("txt-nombre");	
	validarCampoVacio("txt-apellido");
	validarCampoVacio("txt-email");	
	validarCampoVacio("txt-password");
}


var validarCampoVacio = function(id){
	
	if (document.getElementById(id).value == ""){
		document.getElementById(id).classList.remove('is-valid');
		document.getElementById(id).classList.add('is-invalid');
	}
	else{
		document.getElementById(id).classList.remove('is-invalid');
		document.getElementById(id).classList.add('is-valid');
	}
};

function validarNombre(nombre) {
    var expRegNombre =/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
    if (expRegNombre.test(String(nombre.value).toLowerCase())){
    	nombre.classList.remove("is-invalid");
    	nombre.classList.add("is-valid");
    }
    else{
    	nombre.classList.remove("is-valid");
    	nombre.classList.add("is-invalid");
    }
}

function validarApellido(apellido) {
    var expRegApellidos =/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
    if (expRegApellidos.test(String(apellido.value).toLowerCase())){
    	apellido.classList.remove("is-invalid");
    	apellido.classList.add("is-valid");
    }
    else{
    	apellido.classList.remove("is-valid");
    	apellido.classList.add("is-invalid");
    }
}



function validarContrasena(etiqueta) {
    var expRegPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{6,15}$/;
    
    if (expRegPassword.test(String(etiqueta.value).toLowerCase()) && etiqueta.value.length<6){
    	etiqueta.classList.remove("is-invalid");
    	etiqueta.classList.add("is-valid");
    }
    else{
    	etiqueta.classList.remove("is-valid");
    	etiqueta.classList.add("is-invalid");
    }
}

function validarContrasena(etiqueta){
    if (etiqueta.value.length<6) {
        etiqueta.classList.remove("is-valid");
        etiqueta.classList.add("is-invalid");
    }
    else{
        etiqueta.classList.remove("is-invalid");
        etiqueta.classList.add("is-valid");
    }
}

function validarEmail(email) {
    var expRegCorreo = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (expRegCorreo.test(String(email.value).toLowerCase())){
    	email.classList.remove("is-invalid");
    	email.classList.add("is-valid");
    }
    else{
    	email.classList.remove("is-valid");
    	email.classList.add("is-invalid");
    }
}








