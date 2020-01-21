<?php

$revistas[] = array(
				   'claedi'  => '1156789',
				   'titulo'  => 'revista1',
	               'edicion' => '156',
	               'salida'  => '11-09-2019',
	               'precio'  => '105',
	               'editor'  => 'editor1');

$revistas[] = array(
				   'claedi'  => '1156790',
				   'titulo'  => 'revista2',
	               'edicion' => '31',
	               'salida'  => '20-04-2019',
	               'precio'  => '200',
	               'editor'  => 'editor3');

echo json_encode($revistas);

