<?php

class Paginas{
	public static function enlacesPaginasModel($enlaces){
		if($enlaces == "clientes"	|| $enlaces == "dashboard" || $enlaces == "datos_clientes"
			|| $enlaces == "articulos" || $enlaces == "datos_articulos"|| $enlaces == "inventario" || 
			$enlaces == "datos_inventario"){
			$module =  "views/modules/".$enlaces.".php";
		}else if($enlaces == "index"){
			$module =  "views/modules/dashboard.php";
		} else {
			$module =  "views/modules/dashboard.php";
		}
		return $module;

	}

}

?>
