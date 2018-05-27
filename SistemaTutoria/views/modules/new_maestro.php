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
    <h4 class="m-b-20 header-title">Agregar Maestro</h4>
    <form class="form-horizontal" role="form">
      <div class="form-group">
        <label class="col-md-2 control-label">Matricula</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="id_maestro">
        </div>
        
        <div class="form-group">
          <label class="col-md-2 control-label">Nombre</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="nombre">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label" for="example-email">Email</label>
          <div class="col-md-10">
            <input type="email"class="form-control"  name="email">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Password</label>
          <div class="col-md-10">
            <input type="password" class="form-control" name="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Carrera</label>
          <div class="col-md-10">
            <select name="carrera">
              <?php 
              $carreras = new MvcController();
              $carreras -> CarrerasController();
              ?>
            </select>
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
$registro ->agregarMaestrosController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>