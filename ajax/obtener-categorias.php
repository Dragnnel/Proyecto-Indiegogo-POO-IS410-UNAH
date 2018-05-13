<?php
	
	
    include("../class/class-conexion.php");

    $conexion = new Conexion();


	$sql = "SELECT codigo_categoria, nombre_categoria FROM tbl_categorias";

    $resultado = $conexion->ejecutarConsulta($sql);
    $respuesta = array();
    while($fila = $conexion->obtenerFila($resultado)){
        $respuesta[] = $fila;
    }

    //var_dump($respuesta);
    //var_dump(json_encode($respuesta, JSON_FORCE_OBJECT));
    //echo json_encode($respuesta, JSON_FORCE_OBJECT);
    echo json_encode($respuesta);
    //return print_r($respuesta);
    // var_dump($respuesta);
   
    $conexion->cerrarConexion();
    
?>

