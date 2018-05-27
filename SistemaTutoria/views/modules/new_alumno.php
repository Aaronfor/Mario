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
    <h4 class="m-b-20 header-title">Agregar Alumno</h4>
    <form class="form-horizontal" role="form">
      <div class="form-group">
        <label class="col-md-2 control-label">Matricula</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="matricula">
        </div>
        
        <div class="form-group">
          <label class="col-md-2 control-label">Nombre</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="nombre">
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
          <label class="col-md-2 control-label">Tutor</label>
          <div class="col-md-5">
            <select name="tutor">
              <?php 
              $tutor = new MvcController();
              $tutor -> tutoresController();
              ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-10">
            <button class="btn btn-lg btn-primary btn-block" value="agregar" name="agregar" type="submit">Agregar alumno</button>
          </div>
        </div>

      </form>
    </div>
  </form>

<?php
echo "fu";
$registro = new MvcController();
$registro->agregarAlumnoController();
echo "nop";

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>