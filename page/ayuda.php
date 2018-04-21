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
    <title>Ayuda Y Servicio Técnico - Indiegogo IS-POO-2018</title>

	<!-- Importar las librerias de bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">

    <!-- Libreria para utilizar font awesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!--Css donde se creara los demas atributos que se
    utilizara en el sitio web -->
    <link rel="stylesheet" type="text/css" href="../css/estiloIS.css">
  </head>
  <!--Fin del encabezado -->

<!--Inicio del body -->
  <body>

    <!--Inicio de la barra de menu -->
    <?php include("header.html"); ?>

    <div class="help-header" style="background-image: url(../img/ayuda-header.png);">
      <div class="help-content">
        <h1>Cómo podemos ayudarte?</h1>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search fa-lg" style="color: gray;"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Busca ayuda" id="txt-ayuda" name="txt-ayuda">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xl-3">
          <div class="help-cards pink-link">
            <img class="help-img" src="../img/backer.png">
            <h5>Backers</h5>
            <p>Find out how to evaluate and back crowdfunding campaigns, and manage your orders</p>
            <a href="">View All</a>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="help-cards pink-link">
            <img class="help-img" src="../img/financiamiento.jpg">
            <h5>Campaigns</h5>
            <p>Discover how to plan, create, and manage your crowdfunding campaign</p>
            <a href="">View All</a>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="help-cards pink-link">
            <img class="help-img" src="../img/payments.png">
            <h5>Payments</h5>
            <p>Learn how to connect your bank account and receive funds from your crowdfunding campaign</p>
            <a href="">View All</a>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="help-cards pink-link">
            <img class="help-img" src="../img/safety.png">
            <h5>Trust & Safety</h5>
            <p>Understand Indiegogo’s policies and how our Trust & Safety team protects our customers</p>
            <a href="">View All</a>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="help-cards pink-link">
            <img class="help-img" src="../img/indenisacion.jpg">
            <h5>InDemand</h5>
            <p>Learn how to manage your InDemand campaign</p>
            <a href="">View All</a>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="help-cards pink-link">
            <img class="help-img" src="../img/marketplace.jpg">
            <h5>Marketplace</h5>
            <p>Understand the basics about buying and selling in the Indiegogo Marketplace</p>
            <a href="">View All</a>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="help-cards pink-link">
            <img class="help-img" src="../img/equity.png">
            <h5>Equity</h5>
            <p>Get information about investing in or running an equity campaign</p>
            <a href="">View All</a>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="help-cards pink-link">
            <img class="help-img" src="../img/profile.png">
            <h5>Profile</h5>
            <p>Build and customize your Indiegogo profile</p>
            <a href="">View All</a>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="help-footer">
      <h1>Still can't find what you need?</h1>
      <a class="btn btn-rosa1" href="" >CONTACT SUPPORT</a>
    </div>
    <hr>

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