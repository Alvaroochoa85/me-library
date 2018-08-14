<?php 
	
	class AuthController{
		
		public function login(){
			if (!isset($_POST["admin"])) {
				$_POST["admin"] = "off";
			}
			$request = array("mail"     => $_POST["email"],
						  	 "password" => $_POST["password"],
						  	 "admin"    => $_POST["admin"]);
			$response = AuthModels::loginModel($request);

			if($response["mail"] == $_POST["email"] && $response["password"] == $_POST["password"]){
				if ($_POST["admin"] == "on"){
					echo("Location:views/modules/admin/index.php");
				}
				else{
					echo("Location:views/modules/admin/index.php");
				}
			}
			else{
				echo("Location:views/modules/admin/index.php");
			}		
		}
	}

?>