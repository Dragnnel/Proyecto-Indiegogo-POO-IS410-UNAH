
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
			console.log(respuesta);
			//$("#div-usuarios").html(respuesta);
		}
	});

});

$("#btn-guardar").click(function(){

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

});

function nvalidar(){

    var v = [validar("#txt-nombre"),validar("#txt-apellido"),validar("#txt-password"),validar("#txt-email")];

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








