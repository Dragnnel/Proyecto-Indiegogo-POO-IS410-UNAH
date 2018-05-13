<?php
    session_start();
    if (!isset($_SESSION["email"]) || !isset($_SESSION["psw"]))
        header("Location: log-in-sign-up.php");
    include("../class/class-conexion.php");
    $conexion = new Conexion();
     $sql = sprintf( 
        "SELECT codigo_usuario, codigo_tipo_de_usuario, ". 
        "email, nombre, apellido, password, url_image_perfil FROM tbl_usuarios ".
        "WHERE email = '%s' and password = '%s' and codigo_tipo_de_usuario = 1",
        $_SESSION["email"],
        $_SESSION["psw"]
    );
    $resultado = $conexion->ejecutarConsulta($sql);
    $respuesta = array();
    if ($conexion->cantidadRegistros($resultado)<=0){
           header("Location: log-in-sign-up.php");
    }
    $registro = $conexion->obtenerFila($resultado);
?>

<!doctype html>
<html lang="es">

<!-- Comienzo del encabezado lo mas general de sitio web -->
  <head>
    <!-- Indicar que se utilizara caracteres especiales en la pagina-->
    <meta charset="utf-8">

    <!-- Indicar que nuestro sitio web esta diseñado para ser visto desde diferentes tamaños de pantalla--> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Descripcion del proyecto y nombre de los autores -->
    <meta name="description" content="Proyecto de Progracion orientada a objetos IS-POO-2018 donde se replicara una pagina para medir nuestras competancias adquiridas en la clase.">
    <meta name="author" content="RonmelLizardo_LuisEstrada">

    <!-- Icono o favicon de el sitio web y nombre de la pagina -->
    <link rel="icon" href="../img/favicon.png">
    <title>Comienza una campaña</title>

	<!-- Importar las librerias de bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">

    <!-- Libreria para utilizar font awesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

      <!--Css donde se creara los demas atributos que se
    utilizara en el sitio web -->
     <link rel="stylesheet" type="text/css" href="../css/estilosConSASS.css">

  </head>
  <!--Fin del encabezado -->



<!--Inicio del body -->
  <body>

    <!--Inicio de la barra de menu -->
    <?php include("header.html"); ?>

    <!--Contenido -->
    <div class="container post-pag">
      <div class="row">
        <div class="col-xl-10">
          <h1>Comienza una campaña</h1>
          <h6>Recauda fondos para un proyecto creativo, empresarial u otro proyecto inspirador</h6><br><br>

          ¿Cuánto dinero deseas recaudar?
          <div class="col-xl-4">
            <input type="text" class="form-control" id="txt-recaudar" placeholder="$500 mínimo"><br>
          </div>

          ¿Cuál es el título de tu campaña?
          <div class="col-xl-8">
            <input type="text" class="form-control" id="txt-titulo" placeholder="Título de la campaña"><br>
          </div>

          ¿Cuál es la descripción de tu campaña?
          <div class="col-xl-8">
            <input type="text" class="form-control" id="txt-des" placeholder="Descripción de la campaña" ><br>
          </div>

          Escoge la imagen de tu campaña!
          <div class="col-xl-8">
            <select class="form-control" id="opt-img">
              <option value="img/imgpost/imagen1.png">Imagen 1</option>
              <option value="img/imgpost/imagen2.png">Imagen 2</option>
              <option value="img/imgpost/imagen3.png">Imagen 3</option>
              <option value="img/imgpost/imagen4.png">Imagen 4</option>
              <option value="img/imgpost/imagen5.png">Imagen 5</option>
              <option value="img/imgpost/imagen6.png">Imagen 6</option>
              <option value="img/imgpost/imagen7.png">Imagen 7</option>
              <option value="img/imgpost/imagen8.png">Imagen 8</option>
              <option value="img/imgpost/imagen9.png">Imagen 9</option>
              <option value="img/imgpost/imagen10.png">Imagen 10</option>
              <option value="img/imgpost/imagen11.png">Imagen 11</option>
              <option value="img/imgpost/imagen12.png">Imagen 12</option>
            </select><br>
          </div>

          ¿Cuál es la categoría de tu campaña?
          <div class="col-xl-8" id="div-cat">
          </div><br>

          <br>
          <button class="btn btn-rosa1" onclick="crearCampana();" >CREAR MI CAMPAÑA</button>
        </div>
      </div>
    </div>

    <!-- Comienzo del pie de pagina-->
      <?php include("footer.html"); ?>

    
    <!--Posterior uso JS, Popper.js y jQuery -->
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    

     <!--Controlador para gestionar la pagina-->
    <script type="text/javascript" src="../js/controlador.js"></script>



  </body>
</html>