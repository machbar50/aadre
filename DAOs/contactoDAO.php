<?php

	function guardarContacto(){
		$conexion = new mysqli("localhost", "root", "", "aadre");

		$conexion->set_charset("utf8");

		$consulta = "INSERT INTO contacto (nombre, localidad, email, comentario) VALUES (";

		$consulta .= "'" . $_GET['nombre'] . "', ";

		$consulta .= "'" . $_GET['localidad'] . "', ";

		$consulta .= "'" . $_GET['email'] . "', ";

		$consulta .= "'" . $_GET['comentario'] . "') ";

		$conexion->query($consulta);
	}