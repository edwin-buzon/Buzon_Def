// JavaScript Document
///-----------Efecto barra menu-----------------------------
$(document).ready(function(){
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('header').addClass('header2');
		} else {
			$('header').removeClass('header2');
		}
	});
 
});
///-----------Efecto click menu----------------------------------------------
$(document).ready(function(){
	
	$('#objetivo').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
		
		
	});
	
});
$(document).ready(function(){
	
	$('#agregar').click(function(){
		$('body, html').animate({
			scrollTop: '100px'
		}, 300);
		
		
	});
	
});
$(document).ready(function(){
	
	$('#sugerencia').click(function(){
		$('body, html').animate({
			scrollTop: '1000px'
		}, 300);
		
		
	});
	
});
//-------------------------------
