<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Importando publicaciones</title>
	</head>

	<body>
		<h1>Importando...</h1>
	</body>

</html>
<?php

include ("funciones_csv.php");

echo "Importando tipopubl.csv";

	$nom_campos = "id_tipo, id_subtipo, descripcion_tipo, descripcion_subtipo,baja";

	importarCSV("data/tipopubl.csv", "tipopubl", $nom_campos, 0);


echo "Importando comtema.csv";

	$nom_campos = "id_tema, descripcion_tema, id_subtema, descripcion_subtema";

	importarCSV("data/comtema.csv", "comtema", $nom_campos, 0);


echo "Importando publi.csv";


	$nom_campos = "claedi, publ, edic, fanun, tipsal, titulo, obsedi, precio,  "
			. "pordis, tippub, subpub, forpag, diacons, repres, editor, "
			. "period, tema, subtema, agrpub, pais, publico, idioma, fecpag, "
			. "fecdev, tampaq, codbar, indbaj, candev, genero, subgen, titesp, " 
			. "lugsto, verbar, impsiva, impdiva, predisiva, impdidiva, "
			. "altanuncio, fecanuncio, titcorto, titcompl";

	importarCSV("data/publi.csv", "publi", $nom_campos, 5);

echo "Importando pizde.csv";


	$nom_campos = "sistema, usuario, codmov, genmov, ensaer, fecbol, claedi, secbol, secpiz, tippiz, tipsec";

	importarCSV("data/pizde.csv", "pizde", $nom_campos, 0);

?>