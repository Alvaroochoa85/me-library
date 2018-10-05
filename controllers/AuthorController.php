<?php 

	class AuthorController{
		
		public function store(){
			$request = array("autor-name"     => $_POST["autor-name"],
						  	 "autor-lastname" => $_POST["autor-lastname"],
						  	 "dni"            => 33493684);

			$response = AuthorModel::storeModel($request);
			if ($response){
				echo "Datos guardados";
			}
			else{
				echo "error";
			}
		}
	}
?>