
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
	validarCampoVacio("txt-correo");	
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
    var patron =/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
    if (patron.test(String(nombre.value).toLowerCase())){
    	nombre.classList.remove("is-invalid");
    	nombre.classList.add("is-valid");
    }
    else{
    	nombre.classList.remove("is-valid");
    	nombre.classList.add("is-invalid");
    }
}

function validarApellido(apellido) {
    var patron =/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
    if (patron.test(String(apellido.value).toLowerCase())){
    	apellido.classList.remove("is-invalid");
    	apellido.classList.add("is-valid");
    }
    else{
    	nombre.classList.remove("is-valid");
    	nombre.classList.add("is-invalid");
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
    var patron = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (patron.test(String(email.value).toLowerCase())){
    	email.classList.remove("is-invalid");
    	email.classList.add("is-valid");
    }
    else{
    	email.classList.remove("is-valid");
    	email.classList.add("is-invalid");
    }
}


/*
function validarForm(){
			  var expRegNombre=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
			  var expRegApellidos=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
			  var expRegCorreo=/^\w+@(\w+\.)+\w{2,4}$/; 
			  var expRegPassword=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{6,15}$/;


		     var nombre = document.getElementById("txt-nombre");
		     var apellidos = document.getElementById("txt-apellidos");
		     var correo = document.getElementById("txt-Correo");
		     var password = document.getElementById("txt-password");
		     
		     //Campo nombre
		     if(nombre.value)
		     {
		      alert("El campo nombre es requerido");
		      nombre.focus();
		      return false;
		     }
		     if (!expRegNombre.exec(nombre.value))
		     {
		        alert("El campo nombre admite letras y espacios.")
		        nombre.focus();
		        return false;
		     }

		     //Campo apellido
		     if(!apellidos.value)
		     {
		      alert("El campo apellidos es requerido");
		      apellidos.focus();
		      return false;
		     }
		     if(!expRegApellidos.exec(apellidos.value))
		     {
		       alert("El campo apellidos admite letras y espacios.")
		       apellidos.focus();
		       return false;
		     }


		     //campo email
		     if(!correo.value)
		     {
		      alert("El campo correo es requerido");
		      correo.focus();
		      return false;
		     }
		     if(!expRegCorreo.exec(correo.value))
		     {
		       alert("El campo correo no tiene el formato correcto.")
		       correo.focus();
		       return false;
		     }

		      //Campo password
		     if(!password.value)
		     {
		      alert("El campo contraseña es requerido");
		      password.focus();
		      return false;
		     }
		     if (!expRegNombre.exec(password.value))
		     {
		        alert("El campo nombre admite letras y caracteres especiles.")
		        password.focus();
		        return false;
		     }
		    

		     return true;
		  }

		   */

		  







