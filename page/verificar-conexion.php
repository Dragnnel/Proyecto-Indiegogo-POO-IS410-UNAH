<?php

	include("../class/class-conexion.php");

	$conexion = new Conexion();
	echo "Conexion establecida <br>";

	/*
		SELECT codigo_usuario, codigo_genero, nombre, apellido, email, password, url_image_perfil FROM tbl_usuario WHERE 1
	*/

	$sql = 	"SELECT codigo_usuario, codigo_genero, nombre, apellido, ".
			"email, password, url_image_perfil ".
			"FROM tbl_usuario";
	
	$resultado = $conexion->ejecutarConsulta($sql);

	while($fila = $conexion->obtenerFila($resultado)){
		var_dump($fila);
		echo "<br>";
	}

	$conexion->cerrarConexion();

?>