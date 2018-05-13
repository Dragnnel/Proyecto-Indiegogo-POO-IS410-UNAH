<?php
	
	include("../class/class-conexion.php");
	$conexion = new Conexion();
   
	$sql = "SELECT a.codigo_post, b.nombre, b.apellido, a.nombre_campana, a.descripcion, a.fecha_de_publicacion, a.fecha_de_expiracion, a.url_image, a.monto_a_recaudar from tbl_post a INNER JOIN tbl_usuarios b on (a.codigo_usuario = b.codigo_usuario)";

    $resultado = $conexion->ejecutarConsulta($sql);
    $respuesta = array();
    while($fila = $conexion->obtenerFila($resultado)){
        $respuesta[] = $fila;
    }


    
    //return print_r($respuesta);
    //var_dump($respuesta);
    //var_export($respuesta)
    echo json_encode($respuesta);
    //echo json_encode(var_export($respuesta));
    $conexion->cerrarConexion();
	
?>



