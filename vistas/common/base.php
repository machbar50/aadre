<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>AADRE</title>

  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="vendor/owl/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="vendor/owl/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">

</head>

<body>

<div class="container-fluid">

  <video id="video-fondo" src="videos/fondo.mp4" autoplay loop muted></video>

  <div class="row">
    
    <div class="col-12">
      
      <header>

        <nav id="navbar-principal" class="fondo-traslucido navbar navbar-dark navbar-expand-lg ">
          
          <a class="navbar-brand" href="index.php">
            AADRE
          </a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

              <li class="nav-item">
                <?php 
                    if ( $seccion_activa == "publicaciones" ) {
                ?>
                      <a class="nav-link item-activo" href="index.php?m=publicaciones">Publicaciones</a>
                <?php 
                    }
                    else{
                ?>
                      <a class="nav-link" href="index.php?m=publicaciones">Publicaciones</a>
                <?php } ?>
                  
              </li>

              <li class="nav-item">
                 <?php 
                    if ( $seccion_activa == "devoluciones" ) {
                ?>
                      <a class="nav-link item-activo" href="index.php?m=devoluciones">Devoluciones</a>
                <?php 
                    }
                    else{
                ?>
                      <a class="nav-link" href="index.php?m=devoluciones">Devoluciones</a>
                <?php } ?>
                  
              </li>
              
              <li class="nav-item">
                 <?php 
                    if ( $seccion_activa == "nosotros" ) {
                ?>
                      <a class="nav-link item-activo" href="index.php?m=nosotros">Quienes somos</a>
                <?php 
                    }
                    else{
                ?>
                      <a class="nav-link" href="index.php?m=nosotros">Quienes somos</a>
                <?php } ?>
                  
              </li>
            
              <li class="nav-item">
                 <?php 
                    if ( $seccion_activa == "contactos" ) {
                ?>
                      <a class="nav-link item-activo" href="index.php?m=contactos">Contacto</a>
                <?php 
                    }
                    else{
                ?>
                      <a class="nav-link" href="index.php?m=contactos">Contacto</a>
                <?php } ?>
                  
              </li>


              <?php 

                if ( isset($_SESSION["usuario"])  ){
              ?>
                <li class="nav-item dropdown">
                
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION["usuario"]; ?>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Favoritos</a>
                    <a class="dropdown-item" href="logout.php">Salir</a>
                  </div>

                </li>
              <?php
                }
                else{
              ?>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Ingresar</a>
                </li>
              <?php
                }
              ?>
                    
            </ul>
            
          </div>
        
        </nav>

    </header>


    <?php
      if ( isset( $_GET["e"] ) ){
    ?>
      <div class="mt-4 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Usuario y/o Contraseña Incorrecta</strong>
              <a data-toggle="modal" data-target="#exampleModal" href="#">Intente Nuevamente</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php } ?>

    <?php 
      include $contenido; 
    ?>

    <footer>
          <div class="row copyright">
            <div class="col-md-12">              
                <p>Asociación Argentina Distribuidores Representantes de Editoriales</p>             
            </div>
          
          </div>
        </div>
      </div>
    </footer>


  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          

          <form action="login.php">
            <div class="form-group">
              <label for="user">Nombre de usuario</label> 
              <input id="user" name="user" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label> 
              <input id="password" name="password" type="text" class="form-control">
            </div> 
            <div class="form-group">
              <button name="submit" type="submit" class="btn btn-primary">Ingresar</button>
              <a href="index.php?m=registro" class="btn btn-outline-secondary">Registrar</a>
            </div>
          </form>

        </div>

      </div>
    </div>
  </div>
    
  <script src="vendor/jquery/jquery-3.4.1.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/lightbox2/js/lightbox.min.js"></script>

  </body>
</html>