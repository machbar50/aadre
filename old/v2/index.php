<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AADRE</title>
    
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand|Open+Sans:300,400" rel="stylesheet">

    <!--<link rel="stylesheet" href="css/styles-merged.css">-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <video id="video-fondo" src="videos/fondo.mp4" autoplay loop></video>

  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="index.html" class="probootstrap-logo">AADRE</a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="active"><a href="index.html">Inicio</a></li>
            <li><a href="gallery.html">Quienes somos?</a></li>
            <li><a href="contact.html">Contacto</a></li>
          </ul>
          <div class="extra-text visible-xs"> 
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>


  <div class="row">
    <div class="col-md-12">
      <nav class="navbar navbar-expand navbar-light bg-light mb-3">
         
       

        <div  id="bs-example-navbar-collapse-1">

          <form class="form-inline">
            
            <!-- mr- es margin-right... ml-, mt-, mb- -->
            <!-- mx- es el ml- + mr-.... my- es mt-, mb- -->
            <!-- m- todos -->
            <!-- cambiando m por p, es padding -->
            <!-- despues del guion va un numero entre 1 y 5 -->

            <!--<div class="input-group mr-3 my-3">

              <select class="custom-select" id="inputGroupSelect01">
                <option value="0">Todas</option>
                <option value="1">Libros</option>
                <option value="2">Revistas</option>
                <option value="3">Diarios</option>
              </select>

            </div>-->

            <!-- Titulo -->

            <div class="input-group mr-3 my-3">

              <span class="navbar-text mr-3">Título:</span>

              <?php $titulo = isset($_GET["titulo"])? $_GET["titulo"] : "";  ?>

              <input id="titulo" name="titulo" class="form-control mr-sm-2" type="text" value="<?= $titulo ?>" /> 
            
            </div>

            
            <!--Precio-->
            
            <div class="input-group mr-3 my-3">

              <span class="navbar-text mr-3">Precio:</span>

              <?php $precio_desde = isset($_GET["precio_desde"])? $_GET["precio_desde"] : "";  ?>

              <input id="precio_desde" name="precio_desde" class="form-control mr-sm-2" type="text" value="<?= $precio_desde ?>" /> 

              <span class="navbar-text mx-3">-</span>
              
              <?php $precio_hasta = isset($_GET["precio_hasta"])? $_GET["precio_hasta"] : "";  ?>

              <input id="precio_hasta" name="precio_hasta" class="form-control mr-sm-2" type="text" value="<?= $precio_hasta ?>" />
            
            </div>

            <!--Fecha-->

            <div class="input-group mr-3 my-3">
              <span class="navbar-text mr-3">Fecha:</span>              

              <?php $fecha_desde = isset($_GET["fecha_desde"])? $_GET["fecha_desde"] : "";  ?>

              <input id="fecha_desde" name="fecha_desde" class="form-control mr-sm-2" type="date" value="<?= $fecha_desde ?>" /> 

              <span class="navbar-text mx-3">-</span>
              
              <?php $fecha_hasta = isset($_GET["fecha_hasta"])? $_GET["fecha_hasta"] : "";  ?>

              <input  id="fecha_hasta" name="fecha_hasta" class="form-control mr-sm-2" type="date" value="<?= $fecha_hasta ?>" />
            </div>

            
            <?php
              $criterio_order = 0;

              if (  isset( $_GET["criterio_order"] ) && $_GET["criterio_order"] != ''  ) {
                $criterio_order = $_GET["criterio_order"];
              }
            ?>

            <div class="input-group mr-3 my-3">

              <!-- Criterio de ordenacion -->
              <span class="navbar-text mx-3">Ordenar por</span>

              <div class="input-group ml-3">

                <select name= "criterio_order" class="custom-select" id="inputGroupSelect01">
                  
                  <option value="0"  <?= $criterio_order==0?"selected":"" ?> >Precio</option>
                  <option value="1" <?= $criterio_order==1?"selected":"" ?> >Fecha</option> 
                <option value="2" <?= $criterio_order==2?"selected":"" ?> >Titulo</option>    

                </select>

              </div>


              <!-- Tipo de ordenacion -->

              <?php
                $tipo_order = 0;

                if (  isset( $_GET["tipo_order"] )  ) {
                  $tipo_order = $_GET["tipo_order"];  
                }
              ?>

              <div class="input-group ml-3">

                <select name= "tipo_order" class="custom-select" id="inputGroupSelect01">
                  <option value="0"  <?= $tipo_order==0?"selected":"" ?> >Ascendente</option>
                  <option value="1"  <?= $tipo_order==1?"selected":"" ?> >Descendente</option>               
                </select>

              </div>
            </div>

            <div class="input-group ml-3">

              <button class="btn btn-primary my-2 my-sm-0 ml-3" type="submit">
                Buscar
              </button>

              <a href="#" onclick="limpiar();" class="btn btn-success my-2 my-sm-0 ml-3">
                Limpiar
              </a>


            </div>


          
          </form>

          
        </div>
      </nav>
    </div>
  </div>


  </header>
  <!-- END: header -->


  <!-- START: slider  -->


<section class="probootstrap-section">
  <div class="container">
    <div class="row">

      <?php

      include('DAOs/publicacionesDAO.php');

      $resultado = obtenerPublicaciones(1, 1, 6);

      $numCol = 1;

      while( $publicacion = $resultado->fetch_assoc() )
      {

          $nombreArchivo = "tapas/" . $publicacion["publ"] . $publicacion["edic"] . ".jpg";


      ?>


        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate" data-animate-effect="fadeIn">
          <div class="product-item">
            <figure><img src="<?= $nombreArchivo?>" alt="Free Template by uicookies.com" class="img-responsive"></figure>
            <div class="text">
              <h2 class="heading"><?=$publicacion["titulo"]?></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div>

        
       

        <?php 
            if ( $numCol == 3 ) {
              echo '<div class="clearfix visible-lg-block visible-md-block"></div>';
              $numCol=1;
            }
            else
            {
              $numCol++;
            }

          } ?>

      </div>
    </div>
  </section>  

<!--   <section class="probootstrap-section probootstrap-bg" style="background-image: url(img/slider_2.jpg);">
    <div class="container text-center">
      <h2 class="heading probootstrap-animate" data-animate-effect="fadeIn">Fresh &amp; Non-GMO Products</h2>
      <p class="sub-heading probootstrap-animate" data-animate-effect="fadeIn">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>
  </section> -->

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-leaf"></i></div>
            <h2 class="heading">Fresh Veggies &amp; Fruits</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-hand"></i></div>
            <h2 class="heading">Locally Grown Vegetables</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-tree"></i></div>
            <h2 class="heading">Natural As It's In Nature</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="clearfix visible-lg-block visible-md-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-location"></i></div>
            <h2 class="heading">From Country Side</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-water"></i></div>
            <h2 class="heading">Alkaline Water</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-air"></i></div>
            <h2 class="heading">Fresh Air</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="clearfix visible-lg-block visible-md-block"></div>
      </div>
    </div>
  </section>

  <footer class="probootstrap-footer probootstrap-bg" style="background-image: url(img/slider_3.jpg)">
    <div class="container">
      <div class="row mb60">
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">About Our Farm</h4>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            <p><a href="#">Read more...</a></p>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">Quick Links</h4>
            <ul class="stack-link">
              <li><a href="#">Organic Fruits</a></li>
              <li><a href="#">Organic Vegeables</a></li>
              <li><a href="#">Non-GMO Products</a></li>
              <li><a href="#">Locally Grown Products</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">Products</h4>
            <ul class="stack-link">
              <li><a href="#">Organic Fruits</a></li>
              <li><a href="#">Organic Vegeables</a></li>
              <li><a href="#">Non-GMO Products</a></li>
              <li><a href="#">Locally Grown Products</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">Subscribe</h4>
            <p>Far far away behind the word mountains far from.</p>
            <form action="#">
              <div class="form-field">
                <input type="text" class="form-control" placeholder="Enter your email">
                <button class="btn btn-subscribe"><i class="icon-arrow-long-right"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row copyright">
        <div class="col-md-6">
          <div class="probootstrap-footer-widget">
            <p>&copy; 2017 <a href="https://uicookies.com/">uiCookies:Green</a>. Designed by <a href="https://uicookies.com/">uicookies.com</a></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="probootstrap-footer-widget right">
            <ul class="probootstrap-footer-social">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  

  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>


  </body>
</html>