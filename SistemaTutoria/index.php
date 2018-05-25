<?php
	#se incluyen los archivos que se ocuparan
	require_once "models/enlaces.php";
	require_once "models/crud.php";
	require_once "controllers/controller.php";

	#se crea un nuevo objeto 
	$mvc = new MvcController();
	#se manda a llamar a su metodo llamado pagina
	$mvc->pagina();
	

?>