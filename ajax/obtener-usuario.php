<?php
	$archivo = fopen("../data/usuarios.csv","r");
	while(($linea=fgets($archivo))){
		$partes = explode(",", $linea);
		echo 'Nombre: '.$partes[0].'Apellido'.$partes[1].'Email'.$partes[2].'Contraseña: '.$partes[3];


		console.log('Nombre: '.$partes[0].'Apellido'.$partes[1].'Email'.$partes[2].'Contraseña: '.$partes[3]);
	}
	fclose($archivo);
	
?>