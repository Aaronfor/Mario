<h4 class="header-title">Inventario</h4>

<!-- boton que invoca el formulario para agregar un nuevo articulo a la base de datos-->
<button class="btn btn-icon btn-success" data-toggle="modal" data-target="#con-close-modal">
  <i class="mdi mdi-lock-plus"> Agregar Inventario</i>
</button>

<!-- Muestra los datos de la tabla de los clientes -->
<div class="row p-t-50">
  <div class="col-sm-12">
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" 
    width="100%">
    <thead>
      <tr>
        <th>Clave</th>
        <th>Nombre</th>
        <th>Nueva Existencia</th>
        <th>Existencia Actual</th>
        <th>Diferencia</th>
        <th>Actualizar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $form = new Controller();
      $form -> VistaInventario();
      ?>
    </tbody>
  </table>
</div>
</div>

<!--Formulario del nuevo cliente -->
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" role="form" method="post">

        <H3 class="header-title">Inventario</H3>

        <div class="form-group">
          <label class="col-md-2 control-label">*Artículo:</label>
          <div class="col-md-10">
            <select class="form-control select2" name="articulo">
              <?php
              $inven = new Controller();
              $inven -> selectController("articulos");
              ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">*Cantidad Inicial:</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="inicio" required>
          </div>
        </div>
        <p>*requerido</p>

        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Salir</button>
          <input type="submit" class="btn btn-info waves-effect waves-light" name="submit" value="Registrar"><!--/button-->
        </div>
      </form>
    </div>
  </div>
</div>

<?php
  $crud=new Controller();
  $crud->updateInventarioController(1,0);    
?>

