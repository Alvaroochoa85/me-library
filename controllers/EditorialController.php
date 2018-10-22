<?php
##create editorial
	class EditorialController{
		#insertar editorial
		public function store (){
			
<<<<<<< HEAD
			$request=array("editorial-name"  => $_POST["editorial-name"],
=======
			$request=array("editorial-name"    => $_POST["editorial-name"],
>>>>>>> da4dc582f39aaf7e6571f2d69e4ff937b39c1c58
						   "editorial-address" => $_POST["editorial-address"]);
						  	 
			$response = EditorialModel::storeModel($request); 

			if ($response){
				echo "Datos guardados";
			}
			else{
				echo "error";
			}
		}
	}
?>