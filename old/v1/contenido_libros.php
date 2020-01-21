<h1 class="my-3">Consulta de publicaciones</h1>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button>

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
</div>

<?php

include('DAOs/publicacionesDAO.php');

obtenerPublicaciones();

?>

<table class="table">

<?php
while( $publicacion = $resultado->fetch_assoc() )
{

	$nombreArchivo = "images/tapas/" . $publicacion["publ"] . $publicacion["edic"] . ".jpg";

	echo "<tr><td><a href=\"detalle_publicacion.php?claedi=" . $publicacion['claedi'] . "\"><img class=\"tapa-miniatura\" src=\"$nombreArchivo\" alt=\"\"></a></td><td>" . $publicacion["titulo"] . "</td><td>" . $publicacion["fanun"] . "</td><td>$ " . $publicacion["precio"] . "</td></tr>";
}

?>

</table>