<?php
	include("../conexion.php");
	try {
	
	$registros=$conexion->prepare("SELECT * FROM sugerenciaa ORDER BY Total DESC");
	$registros->execute();
	$registros=$registros->fetchAll();

	$totalReg=$conexion->query("SELECT  FOUND_ROWS() as Total");
	$totalReg=$totalReg->fetch()['Total'];

	$users=$conexion->prepare("SELECT * FROM usuarios");
	$users->execute();
	$users=$users->fetchAll();

	$tusers=$conexion->query("SELECT  FOUND_ROWS() as Total");
	$tusers=$tusers->fetch()['Total'];	
	
	
	} catch (PDOException $e){
		echo $e->getMessage();
	}
?>