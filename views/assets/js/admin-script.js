$(document).ready(function(){

	//Control de imagenes
	$("#user-img").change(function( ) {
		image = this.files[0];

		//Control de tamaño de imagen
		if (Number(image.size) < 2000000){
			//Control de tipo de imagen
			if (image.type == "image/jpeg" || image.type == "image/png"){
				let datos = new FormData();
				$datos.append("imagen", image);
				$.ajax({
					url        :"",
					method     : "POST",
					data       : datos,
					cache      : false,
					contentType: false,
					processData: false,
					beforeSend : function(){

					},
					success    : function($response){
						 
					}
				});

			}
			else{
				alert("Tipo de archivo no valido");
			}
		}
		else{
			alert("Imagen demasiado grande");
		}
	});
});