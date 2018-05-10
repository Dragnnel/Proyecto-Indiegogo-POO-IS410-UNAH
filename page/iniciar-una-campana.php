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
    <title>Iniciar una campaña- Indiegogo IS-POO-2018</title>

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

    <main role="main">

	<!-- Comienzo del contenido de pagina -->


    	<div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1>Comienza una campaña  </h1>
            <h5>Recauda fondos para un proyecto creativo, empresarial u otro proyecto inspirador</h5>
            

              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                    <input type="text" class="form-control" id="text_monto" placeholder="$">

                
                <div class="btn-group" role="group">

                   <select class="custom-select custom-select-sm">
                    <option value="1">USD</option>
                    <option value="2">EUR</option>
                    <option value="3">GBP</option>
                    <option value="4">CAD</option>
                     <option value="4">AUD</option>
                  </select>

                </div>

            </div>
            <p>¿Cuál es el título de tu campaña?</p> 
                <input type="text" id="txt-titulo-campana" placeholder="El titulo de mi campaña...." class="input-group mb-2">
                <button class="btn btn-rosa1  "><a href="mi-titulo-de-la-campana.php" style="color: #fff"> CREAR MI CAMPAÑA</a></button>

          </div>

          
        </div> <!--FIN DEL ROW -->
      </div> <!-- fin del conteiner-->


      <!-- Comienzo del pie de pagina-->
      <?php include("footer.html"); ?>

      </main>

   <!--Posterior uso JS, Popper.js y jQuery -->
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

     <!--Controlador para gestionar la pagina-->
    <script type="text/javascript" src="../js/controlador.js"></script>


  


  </body>
</html>