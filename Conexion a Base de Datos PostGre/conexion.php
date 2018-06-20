<?php 
 const USER = "roots";
 const PASS = "123";
 const HOST = "localhost";
 const DATABASE = "prueba";

	

	$conexion=new PDO("pgsql:host=".HOST."; dbname=".DATABASE,USER,PASS);
			//Aquí establecemos el modo error en el modo que necesitemos
	$conexion->setAttribute(PDO::ATTR_ERRMODE, $conexion::ERRMODE_WARNING);
 ?>


