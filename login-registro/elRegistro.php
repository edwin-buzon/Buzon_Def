<html >
<head>
<title>Documento sin título</title>
</head>

<body>
<?php
	try{
		
		include("../conexion.php");
		
		$sql=$conexion->prepare("INSERT INTO usuarios(nombre, correo,contrase ) VALUES (:minombre, :micorreo, :micontrase)");
		
		
	$sql->bindParam(':minombre',$_POST['nombre']);
	$sql->bindParam(':micorreo',$_POST['email']);
    $sql->bindParam(':micontrase',$_POST['password']);
	$sql->execute();

	
	header('Location: exito.html');

	}catch(Exception $e){
		die ('Error'.$e->GetMessage());
	}
    ?>
</body>
</html>