<!DOCTYPE html>

<?php
	include("surgeren.php");
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sugerencias</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    .panel-title .glyphicon{
        font-size: 14px;
    }
</style>
<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.in").each(function(){
        	$(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
        });
    });
</script>
</head>

<body>
<!--Boton actualizar-->
<div  align="right">
<button type="button" class="btn btn-primary" onclick="location.reload();">Actualizar</button>
</div>
<!--Fin boton-->
<!--Acordeon-->
<div class="bs-example">
<?php if($totalReg>=1): foreach($registros as $reg): ?>
    <form action="update.php" method="POST">
<!---->    
    <div class="panel-group" id="accordion">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="<?php echo '#collapse'.$reg['ID']; ?>"><span class="glyphicon glyphicon-plus">					                  	</span>  <?php echo $reg['Titulo'].$reg['Tipo']; ?></a>
                    
                </h4>
                <!--Barra progreso--> 
                <div class="progress progress-striped active">
		            <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="<?php echo $tusers; ?>" style="width:<?php echo round((($reg['Total']/$tusers)*100),2).'%'; ?>">
			                 <?php echo round((($reg['Total']/$tusers)*100),2).'%'; ?>
		            </div>
                </div>
                <!--Fin Barra progreso-->
            </div>
            <div id="<?php echo 'collapse'.$reg['ID']; ?>" class="panel-collapse collapse">
                <div class="panel-body">
                    <p><?php echo $reg['Detalle']; ?></p>
                    <input type="hidden" value="<?php echo $reg['ID']; ?>" name="titlee">
                    <button type="submit" class="btn btn-primary">Votar</button>
                </div>
            </div>
        </div>
</form>
    <?php  endforeach; else:?>
        
    <?php endif; ?>

    </div>	<!--Fin pane-group--> 
</div>

<!--Fin Acordeon-->
</body>
</html>                                		                                		                            