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
    utilizara en el sitio web-->
    <link rel="stylesheet" type="text/css" href="css/estilosConSASS.css">
    
  </head>
  <!--Fin del encabezado -->



<!--Inicio del body -->
  <body>

  <!--Inicio de la barra de menu -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark 
         col-xl-12 "> <!-- elimine el atributo fixet top-->
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="img-fluid"></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-angle-down"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="page/explorar.php" id="btn-explorar">Explorar&nbsp;<i class="fas fa-angle-down"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="page/lo-que-hacemos.php">Lo que hacemos.</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-search fa-lg" style="color: gray;"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-envelope fa-lg"></i>&nbsp;Newsletter</a>
              </li>
            </ul>
            <a href="page/para-emprendedores.php" class="nav-link">Para emprendedores</a>
            <a href="page/comienza-una-campania.php" class="nav-link">Comienza una campaña</a>
            <div class="barra-vertical"></div>
              <a href="#" class="nav-link" data-toggle="modal" id="div-nombre-i" data-target="#modal-LogIn">Iniciar Sesión</a>
              <a href="#" class="nav-link"  data-toggle="modal" id="div-i" data-target="#modal-SignUp">Regístrate</a>
          </div>
        </nav>

        <!--Desplegable de explorar-->
       <div class="container-explorar" id="div-explorar" tabindex="0">
        <div class="row explorar-header">
          <div class="col-xl-2">
            <div style="background-image: url(https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1525994596/vcohtaxfbobynytduzv0.jpg); background-size: cover; " class="explorar-header-item"></div>
          </div>
          <div class="col-xl-2">
            <div style="background-image: url(https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1525994596/vcohtaxfbobynytduzv0.jpg); background-size: cover; " class="explorar-header-item"></div>
          </div>
          <div class="col-xl-2">
            <div style="background-image: url(https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1525711166/lf7kkhrzqrdtcg1xi2ya.jpg); background-size: cover; " class="explorar-header-item"></div>
          </div>
          <div class="col-xl-2">
            <div style="background-image: url(https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1525989352/qt9v2neniadvmx5k8ijl.jpg); background-size: cover; " class="explorar-header-item"></div>
          </div>
          <div class="col-xl-2">
            <div style="background-image: url(https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1525911918/lzitwjsllzlilakbhk91.png); background-size: cover; " class="explorar-header-item"></div>
          </div>
          <div class="col-xl-2">
            <div style="background-image: url(https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/f_auto/v1525994596/vcohtaxfbobynytduzv0.jpg); background-size: cover; " class="explorar-header-item">
              
            </div>
          </div>
        </div>
        <div class="row explorar-footer">
          <div class="col-xl-4">
            <div class="row">
              <div class="col-xl-12">
                <p>Tecnología e innovación<p>
              </div>
              <div class="col-xl-6">
                <a href="page/explorar.php"> Audio</a><br>
              <a href="page/explorar.php"> Accesorios para cámaras</a><br>
              <a href="page/explorar.php"> Energía y tecnología ecológica</a><br>
              <a href="page/explorar.php"> Moda y dispositivos portátiles</a><br>
              <a href="page/explorar.php"> Alimentos y bebidas</a><br>
              <a href="page/explorar.php"> Salud y actividad física</a>
              </div>
              <div class="col-xl-6">
                <a href="page/explorar.php"> Inicio</a><br>
             <a href="page/explorar.php">  Teléfonos y accesorios</a><br>
              <a href="page/explorar.php"> Productividad</a><br>
              <a href="page/explorar.php"> Transporte</a><br>
              <a href="page/explorar.php"> Viajes y vida al aire libre</a>
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="row">
              <div class="col-xl-12">
                <p>Trabajos creativos<p>
              </div>
              <div class="col-xl-6">
              <a href="page/explorar.php"> Arte</a><br>
              <a href="page/explorar.php"> Cómics</a><br>
              <a href="page/explorar.php"> Danza y teatro</a><br>
              <a href="page/explorar.php"> Película</a><br>
              <a href="page/explorar.php"> Música</a><br>
              <a href="page/explorar.php"> Fotografía</a>
              </div>
              <div class="col-xl-6">
              <a href="page/explorar.php"> Podcasts, blogs y vlogs</a><br>
              <a href="page/explorar.php"> Juegos de mesa</a><br>
              <a href="page/explorar.php"> Videojuegos</a><br>
              <a href="page/explorar.php"> Series web y programas de TV</a><br>
              <a href="page/explorar.php"> Escritura y edición</a> 
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="row">
              <div class="col-xl-12">
                <p>Proyectos comunitarios<p>
              </div>
              <div class="col-xl-6">
              <a href="page/explorar.php">Derechos de los animales</a><br>
              <a href="page/explorar.php">Cultura</a><br>
              <a href="page/explorar.php">Educación</a><br>
              <a href="page/explorar.php">Medio ambiente</a><br>
              <a href="page/explorar.php">Derechos humanos</a><br>
              <a href="page/explorar.php">Empresas locales</a> 
              </div>
              <div class="col-xl-6">
                <a href="page/explorar.php">Espiritualidad</a><br>
              <a href="page/explorar.php">Bienestar </a>
              </div>
            </div>
          </div>
        </div>
       </div>
       <!--Fin de Desplegable de explorar-->

        
      </header>

       <!-- Modal Sign Up - Regístrate -->
    <div class="modal fade" id="modal-SignUp">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Regístrate</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <a class="btn btn-facebook btn-lg btn-block" href="https://www.facebook.com/login.php?skip_api_login=1&api_key=2392863781&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv2.8%2Fdialog%2Foauth%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.indiegogo.com%252Faccounts%252Fauth%252Ffacebook%252Fcallback%26state%3Dde07f2bc1862a7a28160642234cabc89bd531aa022d89ee2%26scope%3Demail%252Cuser_friends%252Cpublic_profile%26response_type%3Dcode%26client_id%3D2392863781%26ret%3Dlogin%26logger_id%3D8a7143cf-e047-642d-28b3-a478dfee8bd6&cancel_url=https%3A%2F%2Fwww.indiegogo.com%2Faccounts%2Fauth%2Ffacebook%2Fcallback%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Dde07f2bc1862a7a28160642234cabc89bd531aa022d89ee2%23_%3D_&display=page&locale=es_ES&logger_id=8a7143cf-e047-642d-28b3-a478dfee8bd6"> CONTINUAR CON FACEBOOK </a>
          
            <p>Sin publicaciones sin su permiso.</p>
            <hr> 
            <h6>O regístrate con el correo electrónico</h6>
              <div class="form-group">
                 <input type="text" class="form-control" id="txt-nombre-index" placeholder="Introduzca sus nombre">
                 <div class="invalid-feedback">Campo obligatorio</div>
              </div>
             <div class="form-group">
                  <input type="text" class="form-control" id="txt-apellido-index" placeholder="Introduzca sus apellido">
                  <div class="invalid-feedback">Campo obligatorio</div>
              </div>
              <div class="form-group">
                 <input type="email" class="form-control" id="txt-email-index"  placeholder="Introduzca su correo electrónico" onkeydown="validarEmail(this);">
                  <div class="invalid-feedback">Email inválido</div>
              </div>
             <div class="form-group">
                 <input type="password" class="form-control" id="txt-password-index" placeholder="Introduzca su contraseña" onkeydown="validarContrasena(this);">
                 <div class="invalid-feedback">Mínimo 6 carácteres</div>
             </div>
              <div class="form-check">
                 <label class="form-check-label" for="checkNotificar"><input type="checkbox" class="form-check-input" id="checkNotificar-index">Regístrate en el boletín semanal</label>
              </div>
             <button type="submit" id="btn-guardar-index" onclick="guardarUsuarioIndex();" class="btn btn-rosa1">Crear una cuenta</button>
          </div>
        </div>
      </div>
    </div>


          <!-- Modal log in - iniciar sesión -->
    <div class="modal fade" id="modal-LogIn">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Iniciar Sesión</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <a class="btn btn-facebook btn-lg btn-block" href="https://www.facebook.com/login.php?skip_api_login=1&api_key=2392863781&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv2.8%2Fdialog%2Foauth%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.indiegogo.com%252Faccounts%252Fauth%252Ffacebook%252Fcallback%26state%3Dde07f2bc1862a7a28160642234cabc89bd531aa022d89ee2%26scope%3Demail%252Cuser_friends%252Cpublic_profile%26response_type%3Dcode%26client_id%3D2392863781%26ret%3Dlogin%26logger_id%3D8a7143cf-e047-642d-28b3-a478dfee8bd6&cancel_url=https%3A%2F%2Fwww.indiegogo.com%2Faccounts%2Fauth%2Ffacebook%2Fcallback%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Dde07f2bc1862a7a28160642234cabc89bd531aa022d89ee2%23_%3D_&display=page&locale=es_ES&logger_id=8a7143cf-e047-642d-28b3-a478dfee8bd6">INICIAR CON FACEBOOK</a>
            <p>Sin publicaciones sin su permiso.</p>
            <hr> 
            <h6>O ingresa con el correo electrónico</h6>
              <div class="form-group">
                  <input type="email" class="form-control" id="txt-email"  placeholder="Introduzca su correo electrónico" onkeydown="validarEmail(this);">
                  <div class="invalid-feedback">Email inválido</div>
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" id="txt-password" placeholder="Introduzca su contraseña" onkeydown="validarContrasena(this);">
                  <div class="invalid-feedback">Mínimo 6 carácteres</div>
              </div>
              <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="checkRecordar">
                  <label class="form-check-label" for="checkRecordar">Recuérdame</label>
              </div>
              <button type="button" onclick="iniciarSesion();" class="btn btn-rosa1">Iniciar Sección</button>
          </div>
        </div>
      </div>
    </div>

    <!--Fin de los modales de log in y de sing up -->

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
                  <a href="page/explorar.php" >Destacado</a>
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
                        <a class="btn btn-rosa1" href="page/log-in-sign-up.php" >REGÍSTRATE</a>
                        <a class="btn btn-rosa2" href="page/lo-que-hacemos.php">MÁS INFORMACIÓN</a>
                      </div>
                </div>
        </div>
      </div><!--fin de la parte por enciama del carousel -->
   </div> <!--fin del Carousel -->

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <!-- Inicio de todo el contenido -->
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
                <a class="nav-link" href="page/explorar.php" role="button">APOYAR CAMPAÑAS&nbsp;&rsaquo;</a>
              </div>
            
          </div>
          <div class="col-lg-6" style="background-image: url(img/div-markaplace.png);background-size: cover;">
              <div class="fm">
                <h2>Marketplace</h2>
                <div class="obj-market">
                  <i class="fas fa-truck"></i>&nbsp;Envío garantizado
                </div>
                <p>El mercado está cargado con innovación inteligente y sorprendente en tecnología, diseño y más; y la mayoría se envía en pocos días.</p>             
                <a class="nav-link" href="page/explorar.php" role="button">COMPRAR PRODUCTOS&nbsp;&rsaquo;</a>
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
            <a href="page/explorar.php"><img class="img-fluid" src="img/jgvnwpzhceyngzrn0xle.jpg"><p>&rsaquo;</p></a>
          </div>
          <div class="col-xl-6 rsaquo">
            <a href="page/explorar.php"><img class="img-fluid" src="img/xdkbxfxwisosmn6hre1y.jpg"><p>&rsaquo;</p></a>
          </div>
          <div class="col-xl-6 rsaquo">
            <a href="page/explorar.php"><img class="img-fluid" src="img/hqcniubpfmihxzsorfob.jpg"><p>&rsaquo;</p></a>
          </div>
          <div class="col-xl-6 rsaquo">
            <a href="page/explorar.php"><img class="img-fluid" src="img/jiv7uac0yzeej9rfzu2g.jpg"><p>&rsaquo;</p></a>
          </div>
        </div>


        <!--Antes del pie de pagina-->

        <div class="row">
          <div class=" col-xl-12">
            <h3>¿Qué categorías te interesan?</h3>
            <p>Descubre proyectos ideales para ti y obtén grandes recomendaciones cuando seleccionas tus intereses.</p>
            <a href="page/log-in-sign-up.php" class="btn btn-rosa2">REGÍSTRATE Y SELECCIONA LOS INTERESES</a>
            <p>O explora nuestras categorías principales</p>
          </div>
          <div class="recuadros col-xl-2">
            <a href="index.php"><i class="fas fa-home fa-3x"></i><br><p>INICIO</p></a>
          </div>
          <div class="recuadros col-xl-2">
            <a href="page/explorar.php"><i class="fas fa-mobile-alt fa-3x"></i><br><p>TELÉFONOS Y ACCESORIOS</p></a>
          </div>
          <div class="recuadros col-xl-2">
            <a href="page/explorar.php"><i class="fas fa-shopping-bag fa-3x"></i><br><p>VIAJES Y VIDA AL AIRE LIBRE</p></a>
          </div>
          <div class="recuadros col-xl-2">
            <a href="page/explorar.php"><i class="fas fa-heartbeat fa-3x"></i><br><p>SALUD Y ACTIVIDAD FÍSICA</p></a>
          </div>
          <div class="recuadros col-xl-2">
            <a href="page/explorar.php"><i class="fas fa-music fa-3x"></i><br><p>AUDIO</p></a>
          </div>
          <div class="recuadros col-xl-2">
            <a href="page/explorar.php"><i class="fas fa-video fa-3x"></i><br><p>PELÍCULA</p></a>
          </div>
          <div class=" col-xl-12">
            <h3>De la revista</h3>
            <p>Tu visión detrás de escena de las personas y las historias detrás de los proyectos de Indiegogo.</p>
          </div>
          <div class="imgs col-xl-4">
            <a href="#"><img class="img-fluid" src="img/jhnigkgxljjtottk4ogm.jpg"><p>LEER AHORA&nbsp;&rsaquo;</p></a>
          </div>
          <div class="imgs col-xl-4">
            <a href="#"><img class="img-fluid" src="img/uqow4uz5mh87ph2xceme.jpg"><p>LEER AHORA&nbsp;&rsaquo;</p></a>
          </div>
          <div class="imgs col-xl-4">
            <a href="#"><img class="img-fluid" src="img/cewq6wrzbibc94uf6g2p.jpg"><p>LEER AHORA&nbsp;&rsaquo;</p></a>
          </div>
          <div class=" col-xl-12">
            <h1>Cosas Inteligentes Para Seres Humanos Curiosos <br> Curious Humans ™</h1>
            <p>No hay un mejor lugar para encontrar algo nuevo y especial. Comienza en Indiegogo para encontrar cosas inteligentes y poco convencionales que solucionen los problemas importantes y no tan importantes de todos los días.</p>
          </div>
          <div class="col-xl-3"><img src="img/crowdfunding-crowdsurfing_base.svg">
          </div>
          <div class="col-xl-6">
            <a class="btn btn-rosa1" href="page/log-in-sign-up.php" >REGÍSTRATE</a>
            <a class="btn btn-rosa2" href="page/lo-que-hacemos.php" >MÁS INFORMACIÓN</a>
          </div>
        </div>


    <br>
      </div><!-- /.container -->

      <!-- Comienzo del pie de pagina -->
      <footer class="col-xl-12">

        <div class="container  col-xl-12">
            <div class="row">
              <div class="col-xl-2">
                <br>
                <h5>EXPLORAR</h5> 
                  <a href="page/lo-que-hacemos.php">Lo que hacemos </a><br>
                  <a href="page/explorar.php">Financiamiento</a><br>
                  <a href="page/explorar.php">Marketplace</a><br>
                  <a href="page/explorar.php">Invertir</a><br>
                  <a href="https://www.generosity.com/" target="_blank">Generosity</a><br>

              </div>
              <div class="col-xl-2">
                 <br>
                <h5>ACERCA DE</h5> 
                  <a href="page/sobre-nosotros.php">Sobre nosotros</a><br>
                  <a href="https://es.go.indiegogo.com/blog" target="_blank">Blog</a><br>
                  <a href="page/confianza-seguridad.php">Confianza y seguridad</a><br>
                  <a href="page/ayuda.php">Ayuda y servicio técnico</a><br>
                  <a href="">Prensa</a><br>
                  <a href="">Carreras</a><br>
                  <a href="page/contacto.php">Contacto</a><br>
              </div>
              <div class="col-xl-2" >
                 <br>
                <h5>EMPRENDEDORES</h5> 
                  <a href="page/para-emprendedores.php">Cómo funciona</a><br>
                  <a href="page/indiegogo-vs-kickstarter.php">Indiegogo vs. Kickstarter</a><br>
                  <a href="page/centro-de-educacion.php">Centro de educación</a><br>
                  <a href="page/directorio-de-expertos.php">Directorio de expertos</a><br>
                  <a href="page/tarifas.php">Tarifas</a><br>
                  <a href="page/programa.php">Programa</a><br>
              </div>
              <div class="col-xl-2">
                 <br>
                <h5>IDIOMA</h5>
                <select class="custom-select custom-select-sm">
                    <option value="1" selected>Español</option>
                    <option value="2">English</option>
                    <option value="3">Frances</option>
                    <option value="4">Deutsch</option>
                  </select>
              </div>
              <div class="col-xl-4">
                <img src=""> 
                <i class="fas fa-envelope-open fa-3x"></i>
                <p><b>Lo encontrará primero en Indiegogo</b></p>
                <form>
                  <p>Descubre productos nuevos e inteligentes en el boletín de Indiegogo</p>
                <input type="email" name="txt-email-footer" class="form-control" placeholder="Tu dirección de correo aqui">
              
                <button type="submit" class="btn btn-rosa1 btn-lg btn-block ">Registrarme</button>
                </form>
              </div>
            </div>
            <hr>

                   <!-- FOOTER -->
        <div class="container  col-xl-12 ">
            <div class="row">
              <div class="col-xl-2">
                <p style=" font-size: 12px;">&copy; Indiegogo,Inc. IS-POO-2018. &middot;</p>

              </div>
              <div class="col-xl-8">
                
              <a href="page/terminos-de-uso.php">Términos De Uso </a>&nbsp 
              <a href="page/politica-de-privacidad.php">Política De Privacidad</a>&nbsp 
              <a href="page/politica-de-cookies.php">Política De Cookies </a>&nbsp 
              <a href="page/terminos-de-socio.php">Términos De Los Socios</a> 

              </div>

              <div class="col-xl-2">
                <!--Fuentes que son utilizado como iconos con la libreria de font awesome -->
                  <a href="#"><i class="fab fa-facebook-square"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-linkedin"></i> </a>
              </div>
            </div>
          </div>
        </div>
      </footer> 
    </main>





  <!--Posterior uso JS, Popper.js y jQuery -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

     <!--Controlador para gestionar la pagina-->
    <script type="text/javascript" src="js/controlador.js"></script>


   



  </body>
</html>
