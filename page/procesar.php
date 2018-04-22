<?php

	echo "<h2>Informacion enviada desde el formulario de registro:	 </h2>";
	echo $_GET["txt-nombre"]."<br>";
	echo $_GET["text-apellido"]."<br>";
	echo $_GET["txt-email"]."<br>";
	echo $_GET["txt-password"]."<br>";
	echo $_GET["checkNotificar"]."<br>";
	

	$archivo = fopen("../data/usuario.csv", "a+");
	fwrite($archivo, 
		$_GET["txt-nombre"].",".
		$_GET["text-apellido"].",".
		$_GET["txt-email"].",".
		$_GET["txt-password"].",".
		$_GET["checkNotificar"]."\n"
	);
	fclose($archivo);

?>