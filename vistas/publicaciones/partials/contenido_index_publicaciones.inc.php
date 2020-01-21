      <div class="row mt-2">
        <div class="col-md-12">

          <nav id="nav-busqueda" class="fondo-traslucido navbar navbar-dark navbar-expand mb-3">
             
            <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="navbar-toggler-icon"></span>
            </button>-->


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

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

                  
                  <input id="titulo" name="titulo" class="form-control mr-sm-2" type="text" value="" /> 
                
                </div>

                
                <!--Precio-->
                
                <div class="input-group mr-3 my-3">

                  <span class="navbar-text mr-3">Precio:</span>

                  
                  <input id="precio_desde" name="precio_desde" class="form-control mr-sm-2" type="text" value="" /> 

                  <span class="navbar-text mx-3">-</span>
                  
                  
                  <input id="precio_hasta" name="precio_hasta" class="form-control mr-sm-2" type="text" value="" />
                
                </div>

                <!--Fecha-->

                <div class="input-group mr-3 my-3">
                  <span class="navbar-text mr-3">Fecha:</span>              

                  
                  <input id="fecha_desde" name="fecha_desde" class="form-control mr-sm-2" type="date" value="" /> 

                  <span class="navbar-text mx-3">-</span>
                  
                  
                  <input  id="fecha_hasta" name="fecha_hasta" class="form-control mr-sm-2" type="date" value="" />
                </div>

                
                
                <div class="input-group mr-3 my-3">

                  <!-- Criterio de ordenacion -->
                  <span class="navbar-text mx-3">Ordenar por</span>

                  <div class="input-group ml-3">

                    <select name= "criterio_order" class="custom-select" id="inputGroupSelect01">
                      
                      <option value="0"  selected >Precio</option>
                      <option value="1"  >Fecha</option>  
                    <option value="2"  >Titulo</option>   

                    </select>

                  </div>


                  <!-- Tipo de ordenacion -->

                  
                  <div class="input-group ml-3">

                    <select name= "tipo_order" class="custom-select" id="inputGroupSelect01">
                      <option value="0"  selected >Ascendente</option>
                      <option value="1"   >Descendente</option>              
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
  </div>



<section id="resultado-container">
  <div class="container">
    <div class="row">

      
      <?php 

        $accion = "listado";

        if ( isset($_GET["a"]) ){
          $accion = $_GET["a"];
        }

        switch ($accion) {
          case 'listado':
            include "contenido_index_listado_pub.inc.php";

            break;

           case 'mostrarpub':
              include "contenido_index_detalle_pub.inc.php";

              break;
          
          default:
            include "contenido_index_listado_pub.inc.php";
            break;
        }
        
      ?>

      </div>
    </div>
  </section>  