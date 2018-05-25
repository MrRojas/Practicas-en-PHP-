<?php 
	/*Ejemplo de una Plantill en PHP */

	# asignamos un array
	$registro = array( 1 , 2 ,3 ,4,5, 6, 7);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title> :: Practica :: </title>
 	
 </head>
 <body>

 	<h1> Uso de PHP para generar vistas Dinamicas </h1>


 	<ul>
 		<?php foreach ($registro as $value): ?>
 			
 		<li> <?= $value  ?></li>

 		<?php endforeach ?>
 	</ul>
 	
 </body>
 </html>