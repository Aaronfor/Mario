<?php

	class Paginas{
		
		public function enlacesPaginasModel($enlaces){

			if($enlaces == "login" || $enlaces == "menu"){
                
				$module =  "views/modules/".$enlaces.".php";
                
			}else if($enlaces == "index"){
                
				$module =  "views/modules/login.php";
                
            } else {

				$module =  "views/modules/login.php";

			}

			return $module;
		}
	}
?>
