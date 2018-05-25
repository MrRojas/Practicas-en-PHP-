<?php 
	
	/* Uso de JSON ENCODE y DECODE */
	$registro = [

		'id' => 1234567 ,
		'user' => "Armando Rojas"
	];


	// tranforma un array en un String JSON 
	$stringJSON = json_encode($registro);
 	echo "Cadena JSON --> ".	$stringJSON ;

 	// Convierte una cadena JSON a un Objecto 
 	$objectoJSON = json_decode($stringJSON);

 	echo "<br>";

 	echo "objecto JSON --> ". $objectoJSON->user;

  ?>