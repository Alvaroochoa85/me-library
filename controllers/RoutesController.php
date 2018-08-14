<?php 
	
	class RoutesController{
		
		public function route(){
			if(isset($_GET["action"])){
				$request = $_GET["action"];
			}
			else{
				$request = "index";
			}
			$response = RoutesModel::route($request);
		}
	}

?>