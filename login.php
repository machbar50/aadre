<?php

	session_start();
	
	if ( isset($_GET["user"]) && isset($_GET["password"]) ){

		$conexion = new mysqli("localhost", "root", "", "aadre");

		$sql = "SELECT * FROM `usuarios` WHERE usr_nombre = \"" . $_GET["user"] . "\" AND usr_password = \"" . $_GET["password"] .	"\"";

		$resultado = $conexion->query($sql);

		if( $resultado->num_rows == 1 ){

			$usuario = $resultado->fetch_assoc();

			$_SESSION["usuario"] = $usuario["usr_nombre_real"];

			header("Location: index.php");
		}
		else
		{
			header("Location: index.php?e=true");


		}



	}