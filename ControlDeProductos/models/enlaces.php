<?php

	class Paginas{
		
		public function enlacesPaginasModel($enlaces){

			if($enlaces == "login" || $enlaces == "dashboard" || $enlaces == "categorias" || $enlaces == "usuarios" || 
				$enlaces == "inventario"|| $enlaces == "tiendas"){
                
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
