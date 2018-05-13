
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
    console.log( "Comenzar con el DOM!" );
	//Esta funcion se ejecutar cuando todo el DOM se haya cargado
	$.ajax({
		url:"../ajax/obtener-post.php",
        dataType:'json',
		success:function(respuesta){
            console.log(respuesta);
           
            var imprimir = "";
            for (var i=0; i<respuesta.length; i++){
                
                imprimir += '<div class="cardin col-xl-4"><div class="card">'+
                        '<img class="card-img-top" src="../'+respuesta[i].url_image+'" alt="Card image cap">'+
                        '<div class="card-body">'+
                        '<h5 class="card-title">'+respuesta[i].nombre_campana+'</h5>'+
                        '<p class="card-text">'+respuesta[i].descripcion+'</p>'+
                        '<p class="card-text"><small class="text-muted">'+respuesta[i].fecha_de_publicacion+'</small></p>'+
                        '</div></div></div>';
            }
            $("#div-lista-posts").html(imprimir);

        },
        error:function(error){
            console.log(error);
        }
	});

    obtenerCategorias();
});


function obtenerCategorias(){
    $.ajax({
        url:"../ajax/obtener-categorias.php",
        dataType: 'json',
        success : function(respuesta){
            console.log(respuesta);
            var imprimir = '<select class="form-control">';
            for (var i=0; i<respuesta.length; i++){
                
                imprimir += '<option value="' + respuesta[i].codigo_categoria + '"> ' + respuesta[i].nombre_categoria + ' </option>';

            }

            imprimir += "</select>";
            $("#div-cat").html(imprimir);

        },
        error:function(error){
            console.log(error);
        }
    });
}


function crearCampana(){
    if (nvalidarCampana()){
        var parametros= "titulo="+$("#txt-titulo").val()+"&"+
                    "descripcion="+$("#txt-des").val()+"&"+
                    "recaudar="+$("#txt-recaudar").val()+"&"+
                    "img="+$("#opt-img").val();

        $("#txt-titulo").val("");
        $("#txt-des").val("");
        $("#txt-recaudar").val("");

        console.log(parametros);

        $.ajax({
        url:"../ajax/guardar-post.php",
        data: parametros,
        method: "POST",
        dataType:"json",
        success:function(respuesta){
            console.log(respuesta);

            location.href ="explorar.php";

            },
        error:function(error){
            console.log(error);
            }

        });

    }
}


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
        var parametros= "nombre="+$("#txt-nombre-pag").val()+"&"+
                    "apellido="+$("#txt-apellido-pag").val()+"&"+
                    "email="+$("#txt-email-pag").val()+"&"+
                    "password="+$("#txt-password-pag").val();
        $("#txt-nombre-pag").val("");
        $("#txt-apellido-pag").val("");
        $("#txt-email-pag").val("");
        $("#txt-password-pag").val("");

        console.log(parametros);

        $.ajax({
        url:"../ajax/guardar-usuario.php",
        data: parametros,
        method:"POST",
        dataType:"json",
        success:function(respuesta){
            console.log(respuesta);
            $("#div-a-usu").html(respuesta.nombre);
            $("#div-a-usu-img").html("");
            $("#div-nombre-i").html(respuesta.nombre);
            $("#div-i").html("");
            location.href ="../index.php";

            },
        error:function(error){
            console.log(error);
            }

        });

    }

}

function guardarUsuarioIndex(){

    if (nvalidarIndex()){
        var parametros= "nombre="+$("#txt-nombre-index").val()+"&"+
                    "apellido="+$("#txt-apellido-index").val()+"&"+
                    "email="+$("#txt-email-index").val()+"&"+
                    "password="+$("#txt-password-index").val();

        $("#txt-nombre-index").val("");
        $("#txt-apellido-index").val("");
        $("#txt-email-index").val("");
        $("#txt-password-index").val("");

        console.log(parametros);

        $.ajax({
        url:"ajax/guardar-usuario.php",
        data: parametros,
        method: "POST",
        dataType:"json",
        success:function(respuesta){
            console.log(respuesta);
            $("#div-nombre-i").html(respuesta.nombre);
            $("#div-i").html("");
            $("#div-a-usu").html(respuesta.nombre);
            $("#div-a-usu-img").html("");
            location.href ="index.php";

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

function nvalidarCampana(){

    var v = [validar("#txt-titulo"),validar("#txt-des"),validar("#txt-recaudar")];

    if ($("#txt-recaudar").val()<500) {
        v[2]=false;
    }

    if ((v[0]&&v[1]&&v[2])==false){
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
    if (nvalidarsesionIndex()){
        var parametros= "email="+$("#txt-email").val()+"&"+
                        "password="+$("#txt-password").val();

        $("#txt-email").val("");
        $("#txt-password").val("");

        console.log(parametros);
        $.ajax({
        url:"ajax/obtener-usuario.php",
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

function iniciarSesionPag(){
    if (nvalidarsesionPag()){
        var parametros= "email="+$("#txt-email-session").val()+"&"+
                        "password="+$("#txt-password-session").val();

        $("#txt-email-session").val("");
        $("#txt-password-session").val("");

        console.log(parametros);
        $.ajax({
        url:"../ajax/obtener-usuario.php",
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

function nvalidarsesionPag(){

    var v = [validar("#txt-password-session"),validar("#txt-email-session")];

    if ((v[0]&&v[1])==false){
        return false;
    }
    else{
        return true;
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

function nvalidarsesionIndex(){

    var v = [validar("#txt-password"),validar("#txt-email")];

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

