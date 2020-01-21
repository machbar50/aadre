<?php

function importarCSV($archivo, $nom_tabla, $nom_campos, $indice_primer_campo){

	$archivo = fopen($archivo, "r");

	if ( $archivo !== FALSE) {

		$conexion = new mysqli("localhost", "root", "", "aadre" );

	    while (($linea = fgetcsv($archivo, 500, ",")) !== FALSE) {

	        $cant_campos = count($linea);

	        for ($campo = 0; $campo < $cant_campos; $campo++) {

				$sql = "INSERT INTO " . $nom_tabla  
						. " (" . $nom_campos . ") "
						. "VALUES (";
				
				for($i=$indice_primer_campo; $i<=$cant_campos-2; $i++)
				{
					 $sql.= "'" . $linea[$i] . "', ";
					 
				}

				if ($i < sizeof($linea)){
					$sql .= "'" . $linea[$i] . "');";
					
				}

				$conexion->query($sql);


	        }

	    }

	    fclose($archivo);

	    echo "fin de la importacion";
	}

}