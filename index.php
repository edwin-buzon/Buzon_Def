<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="estilo.css" rel="stylesheet"  />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="header.js"></script> 



</head>

<body>

	<header class="header">
		<div class="wrapper1">
			<div class="logo">Buzón  Sugerencias</div>
			
			<nav>
				<a id="objetivo" href="#" >Objetivo</a>
				<a id="agregar" href="#">Agregar sugerencias</a>
				<a id="sugerencia" href="#" >Sugerencias</a>
				<a id="inicio" href="login-registro/login.html" name="prueba"  >
				<?php

				if(isset($_GET['opcion'])){
				$op=3;
				$op=$_GET['opcion'];
				//Coloca el nombre del usuario
				if($op==1){
					echo $op;
				
				}else{
					echo $op;
				
                	}
				}else{
				//No se ha iniciado sesion, solo coloca inicio
					echo "Inicio";
				
                }
		?>
                </a>
			</nav>
		</div>
	</header>
    
   
    
    <!--Contenido-->
    <section class="contenido wrapper1">

	<div class="div-objetivo">
    	<h1 class="titulo" align="center"> Objetivo </h1> <br />
        <hr  noshade="noshade" size="2" color="#f56f3a" />
        
  			<p style="font-size:1.5em; margin-bottom:50px;" ALIGN="center">Proporcionar un medio por el cual los estudiantes 				   			puedan presentar sus propuestas, <br /> recomendaciones e ideas que consideren oportunas para la institución.</p>
	</div>
    <!-- Agregar-->
    <div class="div-agregar">
    <h1 class="titulo" align="center"> Agregar Sugerencia </h1> <br />
    <hr  noshade="noshade" size="2" color="#f56f3a" />
      <!--Una vez que se inicia sesion/ Ventana para agregar sugerencias-->
    <?php

				if(isset($_GET['dentro'])){
				$op=3;
				$op=$_GET['dentro'];
				if($op=='ok'){
		?>	
        	 <div align="center"><iframe src="modal/modal.html" width=99% height=735 frameborder=1 
    style="border:solid #003b4a 2px; margin-bottom:5%;"></iframe></div> 		
	<!--Cuando no se inicia sesion/ ventana por defecto/ ventana que dice que debes iniciar sesion/Agregar-->
     <?php			
				}else{
	?>
					<div align="center"><iframe src="agregar-iniciesesion.html" width=99% height=735 frameborder=1 
    style="border:solid #003b4a 2px; margin-bottom:5%;"></iframe></div> 
	<?php			
                	}
				}else{
  ?>
  
				 <div align="center"><iframe src="agregar-iniciesesion.html" width=99% height=735 frameborder=1 
    style="border:solid #003b4a 2px; margin-bottom:5%;"></iframe></div> 		
	
	
	<?php			
                }
	?>
	</div>
    <!-- Votar-->
    
    <div class="div-sugerencia">
     <h1 class="titulo" align="center"> Sugerencias </h1> <br />
    <hr  noshade="noshade" size="2" color="#f56f3a" />
     <?php

				if(isset($_GET['dentro'])){
				$op=3;
				$op=$_GET['dentro'];
				if($op=='ok'){
		?>	
        	 <div align="center"><iframe src="acordeon/acordeon.php" width=99% height=500 frameborder=1 
    style="border:solid #003b4a 2px; margin-bottom:5%;"></iframe></div>		
	<!--Cuando no se inicia sesion/ ventana por defecto/ ventana que dice que debes iniciar sesion/Votar-->
     <?php			
				}else{
	?>
					<div align="center"><iframe src="votar-iniciesesion .html" width=99% height=735 frameborder=1 
    style="border:solid #003b4a 2px; margin-bottom:5%;"></iframe></div> 
	<?php			
                	}
				}else{
  ?>
  
				 <div align="center"><iframe src="votar-iniciesesion .html" width=99% height=500 frameborder=1 
    style="border:solid #003b4a 2px; margin-bottom:5%;"></iframe></div>		
	
	<?php			
                }
	?>
    
	</div>
    
  
    </section>
</body>
</html>
