<h1>Uso de Extract = para convertir todos los key de una array en variables</h1>

<?php 

	function arreglo(){

		$gato = "123";
		$perro = "456";

		return compact("gato", "perro");
	}

	extract(arreglo());

	echo '$gato = '.$gato;

 ?>