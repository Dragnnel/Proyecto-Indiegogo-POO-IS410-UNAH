
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

$(document).ready(function(){
	//Esta funcion se ejecutar cuando todo el DOM se haya cargado
	$.ajax({
		url:"../ajax/obtener-usuarios.php",
		success:function(respuesta){
			console.log(respuesta.nombre);
			//$("#div-usuarios").html(respuesta);
		}
	});

});

function guardarUsuarioHeader(){

    if (nvalidar()){
        $("#btn-guardar").attr("disabled","disabled");
        var parametros= "nombre="+$("#txt-nombre").val()+"&"+
                    "apellido="+$("#txt-apellido").val()+"&"+
                    "email="+$("#txt-email").val()+"&"+
                    "password="+$("#txt-password").val()+"&"+
                    "checkNotificar="+$("#checkNotificar").val();

        console.log(parametros);

        $.ajax({
        url:"../ajax/guardar-usuario.php",
        data: parametros,
        method:"POST",
        dataType:"json",
        success:function(respuesta){
            console.log(respuesta);

            },
        error:function(error){
            console.log(error);
            }

        });

    }

}

function guardarUsuarioPag(){

    if (nvalidarPag()){
        $("#btn-guardar-pag").attr("disabled","disabled");
        var parametros= "nombre="+$("#txt-nombre-pag").val()+"&"+
                    "apellido="+$("#txt-apellido-pag").val()+"&"+
                    "email="+$("#txt-email-pag").val()+"&"+
                    "password="+$("#txt-password-pag").val()+"&"+
                    "checkNotificar="+$("#checkNotificar-pag").val();

        console.log(parametros);

        $.ajax({
        url:"../ajax/guardar-usuario.php",
        data: parametros,
        method:"POST",
        dataType:"json",
        success:function(respuesta){
            console.log(respuesta);

            },
        error:function(error){
            console.log(error);
            }

        });

    }

}

function guardarUsuarioIndex(){

    if (nvalidarIndex()){
        $("#btn-guardar-index").attr("disabled","disabled");
        var parametros= "nombre="+$("#txt-nombre-index").val()+"&"+
                    "apellido="+$("#txt-apellido-index").val()+"&"+
                    "email="+$("#txt-email-index").val()+"&"+
                    "password="+$("#txt-password-index").val()+"&"+
                    "checkNotificar="+$("#checkNotificar-index").val();

        console.log(parametros);

        $.ajax({
        url:"../ajax/guardar-usuario.php",
        data: parametros,
        method:"POST",
        dataType:"json",
        success:function(respuesta){
            console.log(respuesta);

            },
        error:function(error){
            console.log(error);
            }

        });

    }

}

function nvalidar(){

    var v = [validar("#txt-nombre"),validar("#txt-apellido"),validar("#txt-password"),validar("#txt-email")];

    if ((v[0]&&v[1]&&v[2]&&v[3])==false){
        return false;
    }
    else{
        return true;
    }
}

function nvalidarPag(){

    var v = [validar("#txt-nombre-pag"),validar("#txt-apellido-pag"),validar("#txt-password-pag"),validar("#txt-email-pag")];

    if ((v[0]&&v[1]&&v[2]&&v[3])==false){
        return false;
    }
    else{
        return true;
    }
}

function nvalidarIndex(){

    var v = [validar("#txt-nombre-index"),validar("#txt-apellido-index"),validar("#txt-password-index"),validar("#txt-email-index")];

    if ((v[0]&&v[1]&&v[2]&&v[3])==false){
        return false;
    }
    else{
        return true;
    }
}

function validar(n){
    if ($(n).val()==""){
        $(n).removeClass("is-valid");
        $(n).addClass("is-invalid");
        return false;
    }else{
        $(n).removeClass("is-invalid");
        $(n).addClass("is-valid");
        return true;
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

function iniciarSesion(){
    if (nvalidarsesion()){
        var parametros=
                    "email="+$("#txt-email-log").val()+"&"+
                    "password="+$("#txt-password-log").val();

        alert("Sesion Iniciada "+parametros);

        /*$.ajax({
        url:"../ajax/guardar-usuario.php",
        data: parametros,
        method:"POST",
        dataType:"json",
        success:function(respuesta){
            console.log(respuesta);

            },
        error:function(error){
            console.log(error);
            }

        });*/

    }
    
}

function nvalidarsesion(){

    var v = [validar("#txt-password-log"),validar("#txt-email-log")];

    if ((v[0]&&v[1])==false){
        return false;
    }
    else{
        return true;
    }
}


function crowdfunding(){
    if (nvalidarcrowdfunding()){
        var parametros= "nombre="+$("#txt-nombre-emp").val()+"&"+
                    "apellido="+$("#txt-apellido-emp").val()+"&"+
                    "email="+$("#txt-email-emp").val()+"&"+
                    "nombre-campana="+$("#txt-nombre-campana").val()+"&"+
                    "presupuesto="+$("#sl-presupuesto");

        console.log(parametros);
        alert("Descargando...");

        $.ajax({
        url:"../ajax/guardar-usuario.php",
        data: parametros,
        method:"POST",
        dataType:"json",
        success:function(respuesta){
            console.log(respuesta);

            },
        error:function(error){
            console.log(error);
            }

        });

    }
}

function nvalidarcrowdfunding(){

    var v = [validar("#txt-nombre-emp"),validar("#txt-apellido-emp"),validar("#txt-nombre-campana"),validar("#txt-email-emp")];

    if ((v[0]&&v[1]&&v[2]&&v[3])==false){
        return false;
    }
    else{
        return true;
    }
}

function edu(){
    if (nvalidaredu()){
        var parametros= "nombre="+$("#txt-nombre-edu").val()+"&"+
                    "apellido="+$("#txt-apellido-edu").val()+"&"+
                    "email="+$("#txt-email-edu").val();

        console.log(parametros);

        $.ajax({
        url:"../ajax/guardar-registro.php",
        data: parametros,
        method:"POST",
        dataType:"json",
        success:function(respuesta){
            console.log(respuesta);
            $("#div-edu").html("<h2 style='color:white; text-align:center; padding:55px 0 55px 0' >Thank you for signing up!</h2>")
            },
        error:function(error){
            console.log(error);
            }

        });

    }
}

function nvalidaredu(){

    var v = [validar("#txt-nombre-edu"),validar("#txt-apellido-edu"),validar("#txt-email-edu")];

    if ((v[0]&&v[1]&&v[2])==false){
        return false;
    }
    else{
        return true;
    }
}

