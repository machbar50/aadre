<?php
	$conexion = new mysqli("localhost", "root", "", "aadre");

	$consulta = "SELECT * FROM publi WHERE claedi ='" . $_GET['claedi'] . "'";

	$resultado = $conexion->query($consulta);
	$publicacion = $resultado->fetch_assoc();

	$nombreArchivo = "tapas/" . $publicacion["publ"] . $publicacion["edic"] . ".jpg";

?>

<div class="container">
	<div class="row">
		
		
		<div class="col-md-5 col-12">
		  <a href="<?= $nombreArchivo ?>" data-lightbox="image-1" data-title=" <?= $publicacion ['titulo']; ?>">
			<?php
				echo "<img class=\"tapa-detalle img-fluid\" src=\"$nombreArchivo\" alt=\"\">";
			?>
		  </a>
		</div>

		<div id="detalle-publicacion" class="fondo-traslucido col-md-7 col-12">
			<ul>
				<li><span>Código: </span> <?= $publicacion ['publ']; ?> </li>
				<li><span>Edición: </span> <?= $publicacion ['edic']; ?> </li>
				<li><span>Título: </span>  <?= $publicacion ['titulo']; ?> </li>
				<li><span>Salida: </span>  <?= $publicacion ['fanun']; ?> </li>
				<li><span>Precio: </span>  <?= $publicacion ['precio']; ?> </li>
				<li><span>Editor: </span>  <?= $publicacion ['editor']; ?> </li>
			</ul>			
		</div>

	</div>	
</div>