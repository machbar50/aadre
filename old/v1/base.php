<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Document</title>

	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="vendor/owl/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl/assets/owl.theme.default.min.css">
</head>

<body>

<div class="container">

	<?php

		include("encabezado.php"); 

		include($contenido);

		include("pie.php"); 
	?>

</div>

<script src="vendor/jquery/jquery-3.4.1.min.js"></script>	

<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/owl/owl.carousel.min.js"></script>

<script>
	$(document).ready(function(){
  		$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:true,
	        responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:5
		        }
	    	}
		});
	});
</script>

<script>

	function limpiar(){
		var titulo = document.getElementById("titulo");
		titulo.value = "";
		
		var precio_desde = document.getElementById("precio_desde");
		precio_desde.value = "";

		var precio_hasta = document.getElementById("precio_hasta");
		precio_hasta.value = "";

		var fecha_desde = document.getElementById("fecha_desde");
		fecha_desde.value = "";

		var fecha_hasta = document.getElementById("fecha_hasta");
		fecha_hasta.value = "";
	}

</script>

</body>
</html>