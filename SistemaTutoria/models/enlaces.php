<?php

	class Paginas{
		
		public function enlacesPaginasModel($enlaces){

			if($enlaces == "login" || $enlaces == "maestros" || $enlaces == "salir"|| $enlaces == "new_maestro" || $enlaces == "edit_maestro" || $enlaces == "delete_maestro" || $enlaces == "alumnos" || $enlaces == "new_alumno" || $enlaces == "edit_alumno" || $enlaces == "delete_alumno" || $enlaces == "carreras" ||
				 $enlaces == "new_carrera" || $enlaces == "edit_carrera" || $enlaces == "delete_carrera"){
                
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
