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
    <link rel="icon" href="img/favicon.png">
    <title>Indiegogo IS-POO-2018</title>

	<!-- Importar las librerias de bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Libreria para utilizar font awesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!--Css donde se creara los demas atributos que se
    utilizara en el sitio web -->
    <link rel="stylesheet" type="text/css" href="css/estiloIS.css">
  </head>
  <!--Fin del encabezado -->



<!--Inicio del body -->
  <body>

  <!--Inicio de la barra de menu -->
    <?php include("header.html"); ?>

    <main role="main">

  
<!-- inicio Carousel -->
  
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">  
          <div class="carousel-item active">
            <img class="first-slide" src="img/carousel/1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img class="second-slide" src="img/carousel/2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
               
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img class="second-slide" src="img/carousel/3.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
               
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img class="third-slide" src="img/carousel/4.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
               
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img class="second-slide" src="img/carousel/5.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
               
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img class="second-slide" src="img/carousel/6.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img class="second-slide" src="img/carousel/7.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
               
              </div>
            </div>
          </div>

        </div> <!-- Fin de los item del carousel-->
        
      
        <!--comienzo del la parte por encima de carousel-->
      <div class="carousel slide carousel-inner cariuselCuadroFijo">
            <div class="row">
            <div class="col-lg-2">
              <div class="link-carousel">
                <a href="#" >Destacado</a>
              </div>
              <br>
               <a class="carousel-control-prev indicadores-carousel" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              
               <a class="carousel-control-next indicadores-carousel" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                </span>
                <span class="sr-only">Next</span>
              </a>

            </div>

               <div class="col-lg-4"></div>

               <div class="col-lg-6">
                    <div class="container col-lg-3" id="carousel-CuadroDeRegistro"  >
                      <h1>Encuéntralo primero en Indiegogo.</h1> 
                      <p>Descubre innovaciones en tecnología y diseño antes de que sean masivas, incluso cientos de productos con envío inmediato.</p>
                      <a class="btn btn-rosa1" href="log-in-sign-up.php" >REGÍSTRATE</a>
                      <a class="btn btn-rosa2" href="lo-que-hacemos.php">MÁS INFORMACIÓN</a>
                    </div>
              </div>
      </div>
    </div><!--fin de la parte por enciama del carousel -->
 </div> <!--fin del Carousel -->

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <!-- Inicio de todo el contenido -->
<br>

      <div class="container marketing">

        <!-- Divs de marketing y financiamiento -->

        <div class="row">
          <div class="col-lg-6" style="background-image: url(img/div-financiamiento.png);background-size: cover;">
              <div class="fm">
                <h2>Financiamiento</h2>
                <div class="barra-financiamiento">
                  <div class="barra-rellena"></div>
                </div>
                <p>Las campañas de crowdfunding de Indiegogo y las campañas de InDemand son donde toman vuelo las ideas nuevas y revolucionarias.</p>             
                <a class="nav-link" href="#" role="button">APOYAR CAMPAÑAS&nbsp;&rsaquo;</a>
              </div>
            
          </div>
          <div class="col-lg-6" style="background-image: url(img/div-markaplace.png);background-size: cover;">
              <div class="fm">
                <h2>Marketplace</h2>
                <div class="obj-market">
                  <i class="fas fa-truck"></i>&nbsp;Envío garantizado
                </div>
                <p>El mercado está cargado con innovación inteligente y sorprendente en tecnología, diseño y más; y la mayoría se envía en pocos días.</p>             
                <a class="nav-link" href="#" role="button">COMPRAR PRODUCTOS&nbsp;&rsaquo;</a>
              </div>
          </div>
        </div>
        <!-- Fin de Divs de marketing y financiamiento -->


        <!-- Demás contenido -->

        <div class="row contenido-intermedio">
          <div class="col-xl-4">
            <i class="fas fa-lightbulb fa-3x"></i>
            <h6>La innovación empieza aquí</h6>
            <p>Con campañas de crowdfunding y productos que se envían ahora, Indiegogo es la fuente de productos ingeniosos que ayudan para que tu vida sea más simple.</p>
          </div>
          <div class="col-xl-4">
            <i class="fas fa-key fa-3x"></i>
            <h6>El acceso más temprano</h6>
            <p>Con las campañas de crowdfunding de Indiegogo, descubre y apoya a los productos de diseño y tecnología que dan que hablar antes de que se conviertan en populares.</p>
          </div>
          <div class="col-xl-4">
            <i class="fas fa-certificate fa-3x"></i>
            <h6>Garantía del Marketplace</h6>
            <p>El Marketplace de productos de Indiegogo está repleto de productos inteligentes y no convencionales que están garantizados para ser enviados a tiempo o te devolverán tu dinero.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6 rsaquo">
            <a href="#"><img class="img-fluid" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1520380949/jgvnwpzhceyngzrn0xle.jpg"><p>&rsaquo;</p></a>
          </div>
          <div class="col-xl-6 rsaquo">
            <a href="#"><img class="img-fluid" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1520445115/xdkbxfxwisosmn6hre1y.jpg"><p>&rsaquo;</p></a>
          </div>
          <div class="col-xl-6 rsaquo">
            <a href="#"><img class="img-fluid" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1520380658/hqcniubpfmihxzsorfob.jpg"><p>&rsaquo;</p></a>
          </div>
          <div class="col-xl-6 rsaquo">
            <a href="#"><img class="img-fluid" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1519325889/jiv7uac0yzeej9rfzu2g.jpg"><p>&rsaquo;</p></a>
          </div>
        </div>


        <!--Antes del pie de pagina-->

        <div class="row">
          <div class=" col-xl-12">
            <h3>¿Qué categorías te interesan?</h3>
            <p>Descubre proyectos ideales para ti y obtén grandes recomendaciones cuando seleccionas tus intereses.</p>
            <button type="submit" class="btn btn-light">REGÍSTRATE Y SELECCIONA LOS INTERESES</button>
            <p>O explora nuestras categorías principales</p>
          </div>
          <div class="recuadros col-xl-2">
            <a href="#"><i class="fas fa-home fa-3x"></i><br><p>INICIO</p></a>
          </div>
          <div class="recuadros col-xl-2">
            <a href="#"><i class="fas fa-mobile-alt fa-3x"></i><br><p>TELÉFONOS Y ACCESORIOS</p></a>
          </div>
          <div class="recuadros col-xl-2">
            <a href="#"><i class="fas fa-shopping-bag fa-3x"></i><br><p>VIAJES Y VIDA AL AIRE LIBRE</p></a>
          </div>
          <div class="recuadros col-xl-2">
            <a href="#"><i class="fas fa-heartbeat fa-3x"></i><br><p>SALUD Y ACTIVIDAD FÍSICA</p></a>
          </div>
          <div class="recuadros col-xl-2">
            <a href="#"><i class="fas fa-music fa-3x"></i><br><p>AUDIO</p></a>
          </div>
          <div class="recuadros col-xl-2">
            <a href="#"><i class="fas fa-video fa-3x"></i><br><p>PELÍCULA</p></a>
          </div>
          <div class=" col-xl-12">
            <h3>De la revista</h3>
            <p>Tu visión detrás de escena de las personas y las historias detrás de los proyectos de Indiegogo.</p>
          </div>
          <div class="imgs col-xl-4">
            <a href="#"><img class="img-fluid" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1520385109/jhnigkgxljjtottk4ogm.jpg"><p>LEER AHORA&nbsp;&rsaquo;</p></a>
          </div>
          <div class="imgs col-xl-4">
            <a href="#"><img class="img-fluid" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1519863823/uqow4uz5mh87ph2xceme.jpg"><p>LEER AHORA&nbsp;&rsaquo;</p></a>
          </div>
          <div class="imgs col-xl-4">
            <a href="#"><img class="img-fluid" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1513214770/cewq6wrzbibc94uf6g2p.jpg"><p>LEER AHORA&nbsp;&rsaquo;</p></a>
          </div>
          <div class=" col-xl-12">
            <h1>Cosas Inteligentes Para Seres Humanos Curiosos <br> Curious Humans ™</h1>
            <p>No hay un mejor lugar para encontrar algo nuevo y especial. Comienza en Indiegogo para encontrar cosas inteligentes y poco convencionales que solucionen los problemas importantes y no tan importantes de todos los días.</p>
          </div>
          <div class="col-xl-3"><img src="https://indiegogo-media-prod-cld-res.cloudinary.com/image/upload/homepage/crowdfunding-crowdsurfing_base.svg">
          </div>
          <div class="col-xl-6">
            <a class="btn btn-rosa1" href="log-in-sign-up.php" >REGÍSTRATE</a>
            <a class="btn btn-rosa2" href="lo-que-hacemos.php" >MÁS INFORMACIÓN</a>
          </div>
        </div>



        <!-- Fin de antes del pie de pagina -->

      </div><!-- /.container -->

      <!-- Comienzo del pie de pagina -->
      <?php include("footer.html"); ?>
        
    </main>






    <!--Posterior uso JS, Popper.js y jQuery -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../../assets/js/vendor/holder.min.js"></script>


  </body>
</html>
