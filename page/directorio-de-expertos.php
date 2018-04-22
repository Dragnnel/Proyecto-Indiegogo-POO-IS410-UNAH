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
    <title>Directorio de expertos - Indiegogo IS-POO-2018</title>

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

    <main role="main">

<!-- Comienzo del contenido de pagina -->

      
            
<!-- Comienzo del contenido de pagina -->
        <div class="container">
          <div class="row">
            <div class="col-xl-12"  style="background-image: url(../img/IGG_Education-center-header_1440x226.png); background-repeat: no-repeat;background-size: cover; background-position: 50%;position: relative; height: 375px;">
            
              
              <h1 class="titulo-cuadrado" style="color: #ffffff;">Experts Directory</h1> 
              <p style="color: #ffffff;">Launch your campaign, grow your business, and take your product to market with this select group of quality companies. These experts are vetted by Indiegogo and highly recommended by campaigners and staff.</p>

              

                <form class="form">
                    <div class="form-group">
                      <div class="row">

                        <div class="col-xl-2 col-md-2">
                         
                        </div>
 
                        <div class="col-xl-8 col-md-8">
                          <input type="text" class="form-control " id="txt-busqueda" placeholder="Realisar una busqueda de expertos"> <button type="submit" class="btn btn-rosa1 ">Busqueda</button>
                        </div>
                        <div class="col-xl-2 col-md-2">
                        </div>
                      </div>           
                    </div>                 
              </form>
         </div>
       </div>
     </div>


         <hr>
          <div class="container">
            <div class="row">
               <div class="col-xl-12">
                      <div class="col-xl-12">
                          <h2 class="">Categories</h2>
                       </div>               
                  </div>
              <div class="col-xl-3">
                <div class="help-cards pink-link">
                  <img class="help-img" src="../img/creative.png">
                  <h5>Creative Services</h5>
                  <p>Create an engaging pitch video and visual design with these top experts to drive loyal backers to your campaign or business. </p>
                  <a href="">View All</a>
                </div>
              </div>
              <div class="col-xl-3">
                <div class="help-cards pink-link">
                  <img class="help-img" src="../img/entrepreneur.png">
                  <h5>Packaging & Fulfillment</h5>
                  <p>Get assistance managing your supply chain and delivering to backers. </p>
                  <a href="">View All</a>
                </div>
              </div>
              <div class="col-xl-3">
                <div class="help-cards pink-link">
                  <img class="help-img" src="../img/marketing.png">
                  <h5>Marketing</h5>
                  <p>Expand your reach and build an audience with these agencies offering digital marketing services and more. </p>
                  <a href="">View All</a>
                </div>
              </div>
              <div class="col-xl-3">
                <div class="help-cards pink-link">
                  <img class="help-img" src="../img/prototyping.png">
                  <h5>Prototyping & Production</h5>
                  <p>Make your product development seamless and cost-efficient with these resources for prototyping, procurement, 3D printing, and more.</p>
                  <a href="">View All</a>
                </div>
              </div>
              <div class="col-xl-3">
                <div class="help-cards pink-link" >
                  <img class="help-img" src="../img/marketplace.jpg">
                  <h5>Retail, Licensing & Distribution</h5>
                  <p>Plot your retail strategy and get your product out of the warehouse and into stores with these leading brands and agencies.  </p>
                  <a href="">View All</a>
                </div>
              </div>

              </div>
            </div>
          </div>
          <hr>

          <div class="container">
           <div class="row">

              <div class="col-xl-12">
                <h1>Featured Indiegogo Experts</h1>
              </div>
                
                    <div class="col-xl-6"  style="background-image: url(../img/Baseball-Card.png); background-repeat: no-repeat;background-size: cover; background-position: 50%;position: relative; height: 320px;">>
                      
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="help-cards pink-link div-sombreado-negro">
                        <p class="elemento">Marketing</p>
                        <h1 class="elemento"><a href="">The Crowdfunding Formula</a></h1>

                        <p class="elemento">The Crowdfunding Formula is a team of Champion-Minded experts and Growth-Hackers who help campaigns achieve 6-7 figure goals. </p>

                        <a href="">View Profile</a>


                      </div>
                    </div>
                    
            
            </div>
          </div>


         

    <div class="row" style="background-color: #2a2a2a;;">
              <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <form >
                  <div class="form-row">
                    <h1 class="elemento">Join our entrepreneur community!</h1>
                    <h5 class="elemento">
                      Sign up now and get access to the latest campaign resources,business opportunities and expert advice sent directly to your inbox.
                    </h5>
                    <div class="form-group col-md-6">
                      <label class="elemento">Nombres*</label>
                      <input type="text" class="form-control" id="txt-nombre" placeholder="Introduzca sus Nombres">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="elemento" >Apellidos*</label>
                      <input type="text" class="form-control" id="text-apellido" placeholder="Introduzca sus Apellidos">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="elemento">Email*</label>
                    <input type="text" class="form-control" id="text-email" placeholder="Introduzca su correo electronico">
                  </div>
                  
                    <div class="form-group ">
                       <button type="button" class="btn btn-rosa1">SIGNP UP NOW</button>
                    </div>
                </form>

            </div>

        

    
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