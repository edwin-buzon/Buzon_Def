<?php
	include("../conexion.php");
	try {
	
	$sql = $conexion->prepare("INSERT INTO sugerenciaa(Titulo, Detalle,Total,Tipo) VALUES (:titu, :detall,0,0)");
	$sql ->bindParam(':titu', $_POST["titulo"]);
	$sql ->bindParam(':detall', $_POST["message"]);
	$sql ->execute();

	header("location: modal.html");
	
	} catch (PDOException $e){
		echo $e->getMessage();
	}
?>