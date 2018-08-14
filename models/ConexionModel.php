<?php  
	
	class ConexionModel{

		public function conect(){
			$link = new PDO("mysql:host=localhost;dbname=me-library", "root", "");
			return $link;
		}
	}
?>