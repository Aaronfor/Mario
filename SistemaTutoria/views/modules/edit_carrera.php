<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:index.php?action=login");

	exit();

}
include "menu.php";
?>

<form method="post">
	
	<?php

	$editarMaestro = new MvcController();
	$editarMaestro -> editCarrerasController();
	$editarMaestro -> updateCarrerasController();

	?>

</form>
