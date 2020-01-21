<?php

$conexion = new mysqli("localhost", "root", "", "aadre");

$consulta = "SELECT * FROM publi WHERE claedi ='" . $_GET['claedi'] . "'";

$resultado = $conexion->query($consulta);
$publicacion = $resultado->fetch_assoc();

$nombreArchivo = "images/tapas/" . $publicacion["publ"] . $publicacion["edic"] . ".jpg";

echo $publicacion ['publ'];
echo $publicacion ['edic'];
echo $publicacion ['titulo'];
echo $publicacion ['fanun'];
echo $publicacion ['precio'];
echo $publicacion ['editor'];
echo "<img class=\"tapa-detalle\" src=\"$nombreArchivo\" alt=\"\">";


?>