<html >
<head>
<title>Documento sin título</title>
</head>

<body>
<?php
	try{
		
		include("../conexion.php");
		
		$sql="SELECT nombre, correo, contrase FROM usuarios WHERE correo= ? AND contrase= ? ";
		
		
		$resultado=$conexion->prepare($sql);
		
	
	$correo=$_POST['email'];
	$contra=$_POST['password'];
	

		$resultado->execute(array($correo, $contra));
		if($registro=$resultado->fetch(PDO::FETCH_ASSOC)   ){
			echo $registro['nombre'];
			header('Location: ../index.php?opcion='.$registro['nombre'].'&dentro=ok');
			
		}else{
		
		   header('Location: login.html');
		
		}
		


	}catch(Exception $e){
		die ('Error'.$e->GetMessage());
	}
    ?>
    
    
</body>
</html>