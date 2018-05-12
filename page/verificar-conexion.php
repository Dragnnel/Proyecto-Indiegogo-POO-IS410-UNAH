<?php

	include("../class/class-conexion.php");

	$conexion = new Conexion();
	echo "Conexion establecida <br>";


	$sql = 	"SELECT codigo_categoria, nombre_categoria FROM tbl_categorias";
	
	$resultado = $conexion->ejecutarConsulta($sql);

	while($fila = $conexion->obtenerFila($resultado)){
		var_dump($fila);
		echo "<br>";
	}

	$conexion->cerrarConexion();

?>