<?php

    include('DAOs/publicacionesDAO.php');

    $cantidad = 8;

    if ( isset($_GET["titulo"]) ){
      $cantidad = 120;
    }


    $resultado = obtenerPublicaciones(1, 1, $cantidad);

    $numCol = 1;

    while( $publicacion = $resultado->fetch_assoc() )
    {

        $nombreArchivo = "tapas/" . $publicacion["publ"] . $publicacion["edic"] . ".jpg";


    ?>


      <div class="col-md-3">
        <div class="card">
          <a href="index.php?m=publicaciones&a=mostrarpub&claedi=<?=$publicacion['claedi']?>" >
            <img class="card-img-top" alt="Bootstrap Thumbnail First" src="<?= $nombreArchivo?>" />
           
            <div class="card-block">
              <h5 class="card-title mt-2">


                <?=$publicacion["titulo"]?>
              </h5>
            </a>
          </div>

        </div>
      </div>       

      <?php 
          if ( $numCol == 4 ) {
            echo '<div class="clearfix visible-lg-block visible-md-block"></div>';
            $numCol=1;
          }
          else
          {
            $numCol++;
          }

        } ?>
