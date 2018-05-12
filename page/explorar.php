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
    <title>Explora</title>

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
    <img src="../img/explorar-header.jpg">
    <div class="container explorar-pag">
      <div class="row">
        <div class="col-xl-4">
          <b>Filtros de resultados</b>
          <p>Tipo de proyecto</p>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Todos los tipos de proyectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Financiamiento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Marketplace</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Invertir</a>
            </li>
          </ul>

          <p>Categorías</p>

          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Todas las categorías</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tecnología e innovación</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Trabajos creativos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Proyectos comunitarios</a>
            </li>
          </ul>

        </div>
        <div class="col-xl-8">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-search fa-lg" style="color: gray;"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Busca ayuda" id="txt-ayuda" name="txt-ayuda">
          </div><hr>

          <div class="card-deck" id="div-lista-posts">
            <!--todos los posts-->
            <!--<div class="cardin col-xl-4">
              <div class="card">
                <img class="card-img-top" src="../img/imgpost/imagen1.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>-->

          </div>

          <a class="btn btn-rosa1" href="#" >MOSTRAR MÁS</a>
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