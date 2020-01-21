<?php

	session_start();


	$modulo = "publicaciones";

	if (isset($_GET["m"])){

		switch ( $_GET["m"] ) {
			case 'publicaciones':
				$modulo = "publicaciones";

				break;

			case 'registro':
				$modulo = "registro";

				break;

			case 'devoluciones':
				$modulo = "devoluciones";

				break;

			case 'nosotros':
				$modulo = "nosotros";

				break;

			case 'contactos':
				$modulo = "contactos";

				break;

			default:
				$modulo = "publicaciones";
				break;
		}
	}

	include "vistas/" . $modulo . "/index.php";

