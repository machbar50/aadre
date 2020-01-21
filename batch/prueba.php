<?php

	include ("funciones_csv.php");

	$nom_campos = "claedi, publ, edic, fanun, tipsal, titulo, obsedi, precio,  "
			. "pordis, tippub, subpub, forpag, diacons, repres, editor, "
			. "period, tema, subtema, agrpub, pais, publico, idioma, fecpag, "
			. "fecdev, tampaq, codbar, indbaj, candev, genero, subgen, titesp, " 
			. "lugsto, verbar, impsiva, impdiva, predisiva, impdidiva, "
			. "altanuncio, fecanuncio, titcorto, titcompl";

	importarCSV("data/prueba.csv", "publi", $nom_campos, 5);
