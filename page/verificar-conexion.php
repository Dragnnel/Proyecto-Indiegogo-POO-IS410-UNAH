<?php

	include("../class/class-conexion.php");

	$conexion = new Conexion();
	echo "Conexion establecida <br>";

	/*
		SELECT codigo_usuario, codigo_genero, nombre, apellido, email, password, url_image_perfil FROM tbl_usuarios WHERE 1
	*/

	$sql = 	"SELECT codigo_usuario, nombre, apellido, ".
			"email, password, url_image_perfil ".
			"FROM tbl_usuarios";
	
	$resultado = $conexion->ejecutarConsulta($sql);

	while($fila = $conexion->obtenerFila($resultado)){
		var_dump($fila);
		echo "<br>";
	}

	$conexion->cerrarConexion();

?>