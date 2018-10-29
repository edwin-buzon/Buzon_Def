// JavaScript Document
function validaDatos(){
	var n=document.getElementById("nombreU").value;
	var c=document.getElementById("micorreo").value;
	var con=document.getElementById("micontra").value;
	var con2=document.getElementById("micontra2").value;


//-----------------------------------------------------------	
	if(n==""){
		
		document.getElementById("campo").innerHTML="Te falta ingresar un nombre de usuario";
		return false;
	}
	else if(c==""){
		
		document.getElementById("campo").innerHTML="Te falta ingresar un correo";
		return false;
	}
	else if (/^\w+([\.-]?\w+)*@itesa.edu.mx$/.test(c)) {
 
        } else {
                   
		document.getElementById("campo").innerHTML="Dominio incorrecto";
		return false;
         }
	if(con==""){
		document.getElementById("campo").innerHTML="Te falta ingresar una contraseña";
		return false;

	}
	else if(con2==""){
		document.getElementById("campo").innerHTML="Te falta confirmar contraseña";
		return false;

	}else if(con!=con2){
		document.getElementById("campo").innerHTML="La contraseña no es igual";
		return false;

	}
	else{
		document.getElementById("campo").innerHTML="";
		return enviar();
		
	}
	
}
function enviar(){
document.getElementById("conex").action="elRegistro.php";

}