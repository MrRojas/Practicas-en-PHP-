
<h1> Uso de Compact </h1>
<?php 

	// comprime las variables en un array 

	$gato = "123";
	$perro = "456";

	$array = compact("gato", "perro");

	echo 'Transformar la variable $gato y $perro a un array con key gato y perro '."<br>";
	echo '$gato = '.$gato."<br>";
	echo '$array[gato] = '.$array['gato'];
 ?>

 <br>
 <br>

 <h3> Uso de Compacto con Array que lleva todos los nombre de las variables a comprimir</h3>

 <?php 

 	$list = array(  

 		"gato" , "perro"
 	);

 
 	var_dump(

 		compact($list)
 	);




  ?>