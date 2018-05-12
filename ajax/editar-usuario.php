<?php
	$archivo = fopen("../data/usuario.csv", "r");
	$respuesta = array();
	while(($linea=fgets($archivo))){
		$partes=explode(",",$linea);
		if ($partes[2]==$_POST["email"]){
			//echo $linea;
			//nombre,apellido,usuario@gmail,15889,
			$respuesta["nombre"] = $partes[0];
			$respuesta["apellido"] = $partes[1];
			$respuesta["password"] = $partes[3];
			$respuesta["checkNotificar"] = $partes[4];
		
			//var_dump($respuesta);
			echo json_encode($respuesta);


			exit;
		}
	}
	echo "Usuario no encontrado";
?>