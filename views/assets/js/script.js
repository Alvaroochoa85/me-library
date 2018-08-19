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

	$("#login").click(function(){
		console.log("Se hizo click");
	})
});