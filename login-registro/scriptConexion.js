// JavaScript Document
function validaDatos(){
	var c=document.getElementById("inputEmail").value;
	var con=document.getElementById("inputPassword").value;
var valor = document.getElementById("inputEmail").value;


//-----------------------------------------------------------	
	if(c==""){
		
		document.getElementById("campo").innerHTML="Te falta ingresar un correo";
		return false;
	}
	else if (/^\w+([\.-]?\w+)*@itesa.edu.mx$/.test(valor)) {
 
        } else {
                   
		document.getElementById("campo").innerHTML="Dominio incorrecto";
		return false;
         }
	if(con==""){
		document.getElementById("campo").innerHTML="Te falta ingresar una contraseña";
		return false;

	}else{
		
		document.getElementById("campo").innerHTML="";
		return enviar();
		
	}
	
}
function enviar(){
document.getElementById("conex").action="laConexion.php";

}

