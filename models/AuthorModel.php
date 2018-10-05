<?php 
	require_once "ConexionModel.php";
	
	class AuthorModel{

		public function storeModel($request){
			$query = ConexionModel::conect()->prepare("INSERT INTO autor (dni, nombre, apellido) VALUES (:dni, :name, :lastname)");
			
			//Enlaces de parametros
			$query -> bindParam(":dni", $request["dni"], PDO::PARAM_INT);
			$query -> bindParam(":name", $request["autor-name"], PDO::PARAM_STR);
			$query -> bindParam(":lastname", $request["autor-lastname"], PDO::PARAM_STR);
			
			if($query -> execute()){
				return true;
			}
			else{
				return false;
			}
			
			$query -> close();

		}
	}
