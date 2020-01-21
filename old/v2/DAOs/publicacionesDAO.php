<?php

function obtenerPublicaciones( $criterio_order, $tipo_order, $cantidad ){
	$conexion = new mysqli("localhost", "root", "", "aadre");

	$precio_desde = 0;

	if (  isset( $_GET["precio_desde"] ) && $_GET["precio_desde"] != ''  ) {
		$precio_desde = $_GET["precio_desde"];
	}


	$consulta = "SELECT titulo, precio,fanun, publ, edic, claedi FROM publi WHERE precio >= $precio_desde";


	if (  isset( $_GET["precio_hasta"] ) && $_GET["precio_hasta"] != ''  ) {
		$precio_hasta = $_GET["precio_hasta"];
		$consulta .=  " AND precio <= $precio_hasta"; // .= es lo mismo que $consulta = $consulta . "....."
	}

	if (  isset( $_GET["fecha_desde"] ) && $_GET["fecha_desde"] != ''  ) {
		$fecha_desde = $_GET["fecha_desde"];
		$consulta .=  " AND fanun >= '$fecha_desde'"; // .= es lo mismo que $consulta = $consulta . "....."
	}

	if (  isset( $_GET["fecha_hasta"] ) && $_GET["fecha_hasta"] != ''  ) {
		$fecha_hasta = $_GET["fecha_hasta"];
		$consulta .=  " AND fanun <= '$fecha_hasta'"; // .= es lo mismo que $consulta = $consulta . "....."
	}

	if (  isset( $_GET["titulo"] ) && $_GET["titulo"] != ''  ) {
		$titulo = $_GET["titulo"];
		$consulta .=  " AND titulo LIKE '%$titulo%'"; // .= es lo mismo que $consulta = $consulta . "....."
	}

	$consulta .= " ORDER BY ";



	switch ($criterio_order) {
		case 0:
			$consulta .= "precio";
			break;
		case 1:
			$consulta .= "fanun";
			break;
		case 2:
			$consulta .= "titulo";
			break;		
	}



	if( $tipo_order == 0 ){
			$consulta .=  " ASC";
		}
		else{
			$consulta .=  " DESC";
		}

	$consulta .= " LIMIT " . $cantidad;

	$resultado = $conexion->query($consulta);

	return $resultado;
}