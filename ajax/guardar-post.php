<?php

    include("../class/class-conexion.php");
    $conexion = new Conexion();

    $sql =  sprintf("INSERT INTO tbl_post(codigo_usuario, codigo_categoria, nombre_campana, descripcion, fecha_de_publicacion, fecha_de_expiracion, url_image, monto_a_recaudar) VALUES (%s,%s,'%s','%s',curdate(),curdate(),'%s',%s)",
        2,
        3,//arreglar esto
        $conexion->antiInyeccion($_POST["titulo"]),
        $conexion->antiInyeccion($_POST["descripcion"]),
        $conexion->antiInyeccion($_POST["img"]),
        $conexion->antiInyeccion($_POST["recaudar"])
        );

    //INSERT INTO tbl_post(codigo_usuario, codigo_categoria, nombre_campana, descripcion, fecha_de_publicacion, fecha_de_expiracion, url_image, monto_a_recaudar) VALUES (%s,%s,'%s','%s',curdate(),curdate(),'%s',%s)
           

    $resultado = $conexion->ejecutarConsulta($sql);
    if ($resultado){
        //Se agrego con exito
        $fila["codigo_resultado"] = 0;
        $fila["mensaje_resultado"] = "Post registrado con éxito";
        echo json_encode($fila);

    }else{
        //Fallo
        $respuesta["codigo_resultado"] = 1;
        $respuesta["mensaje_resultado"] = "No se pudo registrar el post";
        $respuesta["sql"] = $sql;
        echo json_encode($respuesta);
    }

    $conexion->cerrarConexion();

?>