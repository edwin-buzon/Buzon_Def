<?php
	try {
	$conexion = new PDO('mysql:host=localhost; dbname=sesion', 'root', ''); 
	$conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET utf8");

	
	} catch (PDOException $e){
		echo $e->getMessage();
	}
?>