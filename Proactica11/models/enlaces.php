<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){


		if($enlaces == "re"){

			$module =  "views/modules/".$enlaces.".php";
		
		}

		else {

			$module =  "views/modules/index.php";
		
		}


		
		return $module;

	}

}

?>