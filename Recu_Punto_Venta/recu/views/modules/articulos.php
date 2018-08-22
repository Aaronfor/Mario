<h4 class="header-title">Artículos</h4>

<!-- boton que invoca el formulario para agregar un nuevo articulo a la base de datos-->
<button class="btn btn-icon btn-success" data-toggle="modal" data-target="#con-close-modal">
  <i class="mdi mdi-lock-plus">  Nuevo Artículo</i>
</button>
<!-- boton que invoca el formulario para agregar un nueva categoria a la base de datos-->
<button class="btn btn-icon btn-success" data-toggle="modal" data-target="#con-close-modal">
  <i class="mdi mdi-tag-multiple">  Nueva Categoría</i>
</button>
<!-- boton que invoca el formulario para agregar un nuevo departamento a la base de datos-->
<button class="btn btn-icon btn-success" data-toggle="modal" data-target="#con-close-modal">
  <i class="mdi mdi-clipboard-text">  Nuevo Departamento</i>
</button>
<!-- boton que invoca el formulario para agregar un nueva unidad de compra a la base de datos-->
<button class="btn btn-icon btn-success" data-toggle="modal" data-target="#con-close-modal">
  <i class="mdi mdi-library-plus">  Nueva Unidad de Compra</i>
</button>

<!-- Muestra los datos de la tabla de los clientes -->
<div class="row p-t-50">
  <div class="col-sm-12">
    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Clave</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Descripción</th>
          <th>Detalles</th>
          <th>Borrar</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $form = new Controller();
        $form -> VistaArticulo();
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

        <H3 class="header-title">Nuevo Artículo</H3>

        <div class="form-group">
          <label class="col-md-2 control-label">*Clave:</label>
          <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Clave" name="clave" required>
          </div>
          <label class="col-md-2 control-label">*Nombre:</label>
          <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">*Precio:</label>
          <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Precio" name="precio" required>
          </div>
          <label class="col-md-2 control-label">*Categoría:</label>
          <div class="col-md-4">
            <select class="form-control select2" name="categoria">
              <?php
              $form = new Controller();
              $form -> selectController("categorias");
              ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          
          <label class="col-md-3 control-label">*Departamento:</label>
          <div class="col-md-3">
            <select class="form-control select2" name="departamento">
              <?php
              $form = new Controller();
              $form -> selectController("departamentos");
              ?>
            </select>
          </div>
          <label class="col-md-3 control-label">*Unidad Compra:</label>
          <div class="col-md-3">
            <select class="form-control select2" name="unidad_compra">
              <?php
              $form = new Controller();
              $form -> selectController("unidad_compra");
              ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">*Descripción:</label>
          <div class="col-md-10">
            <textarea class="form-control" rows="5" name="descripcion" required></textarea>
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
  $crud->registroArticuloController(1,0);
  $crud->borrarID(2);       
?>