<?php	

	include "DAOs/contactoDAO.php";

	$accion = "nuevo";

	if ( isset($_GET["a"]) ){
		$accion = $_GET["a"];
	}
	
	switch ( $accion ) {
		case 'guardar':
			
			//Codigo parar guardar
			guardarContacto();

			header("Location: index.php?m=contactos&g=true");

			break;

		case 'listar':
				//Codigo parar listar
				echo "Listar los datos del contacto";
			break;	

		case 'nuevo':
			$contenido = "vistas/contactos/partials/contenido_index_contactos.inc.php";
			$seccion_activa = "contactos";
			include "vistas/common/base.php";

			break;
	}
	
