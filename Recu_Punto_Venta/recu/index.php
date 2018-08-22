<?php
#se agregan los archivos que ocuparemos
require_once "models/enlaces.php";
require_once "controllers/controller.php";
require_once "models/model.php";
//Para poder ver el template se hace la petición mediante un controlador.
//creamos el objeto:
$mvc = new Controller();
//muestra el metodo "pagina" que se encuentra en controlles/controller.php
$mvc -> pagina();

?>
