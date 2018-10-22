<?php 

	class UserController{
		
		public function store(){
			$request = array("usuario-dni"       => $_POST["usuario-dni"],
						  	 "usuario-name"      => $_POST["usuario-name"],
						  	 "usuario-lastname"  => $_POST["usuario-lastname"],
						  	 "usuario-direccion" => $_POST["usuario-direccion"],
						  	 "usuario-telefono"  => $_POST["usuario-telefono"]);

			$response = UserModel::storeModel($request);
			if ($response){
				echo "Datos guardados";
			}
			else{
				echo "error";
			}
		}
	}
?>