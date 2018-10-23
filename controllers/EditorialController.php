<?php
##create editorial
	class EditorialController{
		#insertar editorial
		public function store (){
			

			

			$request=array("editorial-name"    => $_POST["editorial-name"],

						   "editorial-address" => $_POST["editorial-address"]);
						  	 
			$response = EditorialModel::storeModel($request); 

			if ($response){
				echo "Datos guardados";
			}
			else{
				echo "error";
			}		
		}

#ver editoriales
		/*public function create(){
			$response = EditorialModel::creadeModel("editorial"); 
			
			return $response;
			
			
		}*/
	}

?>