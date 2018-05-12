<?php

	include("../class/class-conexion.php");

	$conexion = new Conexion();
	echo "Conexion establecida <br>";

	/*
		SELECT codigo_usuario, codigo_genero, nombre, apellido, email, password, url_image_perfil FROM tbl_usuarios WHERE 1

<<<<<<< HEAD


		"SELECT codigo_usuario, codigo_genero, nombre, apellido, ".
=======
	$sql = 	"SELECT codigo_usuario, nombre, apellido, ".
>>>>>>> 8f678ea8816cbc44b81e47d60f2b4ab5bcb171be
			"email, password, url_image_perfil ".
			"FROM tbl_usuarios"
	*/

	$sql = 	"SELECT codigo_categoria, nombre_categoria FROM tbl_categorias";
	
	$resultado = $conexion->ejecutarConsulta($sql);

	while($fila = $conexion->obtenerFila($resultado)){
		var_dump($fila);
		echo "<br>";
	}

	$conexion->cerrarConexion();

?>