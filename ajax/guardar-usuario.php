<?php

	$respuesta = array();

		$respuesta['nombre'] = $_POST['nombre'];
		$respuesta['apellido'] = $_POST['apellido'];	
		$respuesta['email'] = $_POST['email'];	
		$respuesta['password'] = $_POST['password'];
		$respuesta['checkNotificar'] = $_POST['checkNotificar'];

	echo json_encode($respuesta);
	
	
	/*$archivo = fopen("../data/usuario.csv", "a+");
	fwrite( $archivo, 
			$_POST["nombre"].",".
			$_POST["apellido"].",".
			$_POST["email"].",".
			$_POST["password"].",".
			$_POST["checkNotificar"]."\n"
	);
	fclose($archivo);

	echo ' <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">';
		echo '  <div class="well">';
		echo '    <strong>'.$_POST['nombre'].'</strong>';
		echo '    <p>'.$_POST["apellido"].'</p>';
		echo '    <p>'.$_POST["email"].'</p>';
		echo '    <p>'.$_POST["password"].'</p>';	
		echo '    <p>'.$_POST["checkNotificar"].'</p>';
		echo '  </div>';
		echo '</div>';	*/

?>