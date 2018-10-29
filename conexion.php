<?php
	try {
	$conexion = new PDO('mysql:host=ec2-23-23-80-20.compute-1.amazonaws.com; dbname='dbklflrv2svhm0', 'ddnevyqejzwovs', '56e88593f53d4bc88f19e95bd92ac95a8e05918939246126739ea266c0374115'); 
	$conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET utf8");

	
	} catch (PDOException $e){
		echo $e->getMessage();
	}
?>
