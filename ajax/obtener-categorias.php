<?php
	
	
    include("../class/class-conexion.php");

    $conexion = new Conexion();


	$sql = "SELECT codigo_categoria, nombre_categoria FROM tbl_categorias";

    $resultado = $conexion->ejecutarConsulta($sql);
    $respuesta = array();
    while($fila = $conexion->obtenerFila($resultado)){
        $respuesta[] = $fila;
    }
    
    echo json_encode($respuesta);
    var_dump($respuesta);
    $conexion->cerrarConexion();
    
?>

