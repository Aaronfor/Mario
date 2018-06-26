<?php

	class Paginas{
		
		public function enlacesPaginasModel($enlaces){

			if($enlaces == "alumnas"|| $enlaces == "pagos"|| $enlaces == "login"){
                
				$module =  "views/modules/".$enlaces.".php";
                
			}else if($enlaces == "index"){
                
				$module =  "views/modules/alumnas.php";
                
            } else {

				$module =  "views/modules/alumnas.php";

			}

			return $module;
		}
	}
?>
