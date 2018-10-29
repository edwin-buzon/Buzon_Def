<?php
include("../conexion.php");
	try {
	
	$upda = $conexion->prepare("UPDATE sugerenciaa SET Total=Total+1 WHERE ID=:tit");
	$upda -> bindParam(':tit', $_POST["titlee"]);
	$upda -> execute();
	
	header("location: acordeon.php");
	
	} catch (PDOException $e){
		echo $e->getMessage();
	}
?>