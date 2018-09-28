$(document).ready(function(){

	$(function () {
  		$('[data-toggle="tooltip"]').tooltip();
	});

	$( function(){
    	$( "#datepicker" ).datepicker();
  	});


	//Chosen: tags style select
	$('.select-autor').chosen({
		no_results_text: "Autor no registrado"
	});

	$('.select-editorial').chosen({
		no_results_text: "Editorial no registrado"
	});

	function validateLogin() {
		let expresion = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
		if(!expresion.test($("#username-login").val()) || !expresion.test($("#password-login").val())){
			return false;
		}
		else{
			return true;
		}
	}

});