<h4 class="header-title">Clientes</h4>

<!-- boton que invoca el formulario para agregar un nuevo cliente a la base de datos-->
<button class="btn btn-icon btn-success" data-toggle="modal" data-target="#con-close-modal">
  <i class="mdi mdi-account-plus">  Nuevo Cliente</i>
</button>

<!-- Muestra los datos de la tabla de los clientes -->
<div class="row p-t-50">
  <div class="col-sm-12">
    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Clave</th>
          <th>Nombre</th>
          <th>Teléfono</th>
          <th>Representante</th>
          <th>Correo</th>
          <th>Detalles</th>
          <th>Borrar</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $form = new Controller();
        $form -> VistaCliente();
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

        <H3 class="header-title">Nuevo Cliente</H3>

        <div class="form-group">
          <label class="col-md-2 control-label">*Clave:</label>
          <div class="col-md-2">
            <input type="text" class="form-control" placeholder="Clave" name="clave" required>
          </div>
          <label class="col-md-2 control-label">*Correo:</label>
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Correo" name="correo" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">*Representante:</label>
          <div class="col-md-9">
            <input type="text" class="form-control" placeholder="Representante" name="representante" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">*Nombre:</label>
          <div class="col-md-10">
            <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-1 control-label">RFC:</label>
          <div class="col-md-5">
            <input type="text" class="form-control" placeholder="RFC" name="rfc">
          </div>
          <label class="col-md-1 control-label">CURP:</label>
          <div class="col-md-5">
            <input type="text" class="form-control" placeholder="CURP" name="curp">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">*Teléfono:</label>
          <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Teléfono" name="telefono" required>
          </div>
          <label class="col-md-2 control-label">Celular:</label>
          <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Celular" name="celular">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">*Domicilio:</label>
          <div class="col-md-7">
            <input type="text" class="form-control" placeholder="Domicilio" name="domicilio" required>
          </div>
          <label class="col-md-1 control-label">*CP:</label>
          <div class="col-md-2">
            <input type="text" class="form-control" placeholder="CP" name="cp" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Comentario:</label>
          <div class="col-md-10">
            <textarea class="form-control" rows="5" name="comentario"></textarea>
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
  $crud->registroClienteController(1,0);
  $crud->borrarID(1);       
?>