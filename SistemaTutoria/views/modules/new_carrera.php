<?php

session_start();

if(!$_SESSION["validar"]){

  header("location:index.php?action=login");

  exit();

}
include "menu.php";

?>
<form method="post"> 
  <div class="col-md-6">
    <h4 class="m-b-20 header-title">Agregar Carrera</h4>
    <form class="form-horizontal" role="form">
        
        <div class="form-group">
          <label class="col-md-2 control-label">Nombre</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="nombre">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-10">
            <button class="btn btn-lg btn-primary btn-block" value="agregar" name="agregar" type="submit">Agregar</button>
          </div>
        </div>

      </form>
    </div>
  </form>

<?php

$registro = new MvcController();
$registro ->agregarCarreraController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>