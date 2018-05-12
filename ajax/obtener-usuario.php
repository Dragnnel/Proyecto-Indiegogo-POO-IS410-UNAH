<?php
	session_start();
	include("../class/class-conexion.php");
	$conexion = new Conexion();

	$sql = sprintf("SELECT codigo_usuario, nombre, apellido, password, url_imagen_perfil FROM tbl_usuarios WHERE email='%s' and password=sha1('%s')",
		$conexion->antiInyeccion($_POST["mail"]),
		$conexion->antiInyeccion($_POST["psw"]));

	$resultado = $conexion->ejecutarConsulta($sql);
    $respuesta = array();
    if ($conexion->cantidadRegistros($resultado)>0){
        $respuesta = $conexion->obtenerFila($resultado);
        $respuesta["codigoResultado"] = 0;
        $respuesta["mensajeResultado"] = "El usuario si existe";
        $_SESSION["email"] = $respuesta["email"];
        $_SESSION["psw"] = sha1($_POST["password"]);
    }else {
        $respuesta["codigoResultado"] = 1;
        $respuesta["mensajeResultado"] = "El usuario no existe";
        session_destroy();
    }

    echo json_encode($respuesta);
    $conexion->cerrarConexion();
	
?>