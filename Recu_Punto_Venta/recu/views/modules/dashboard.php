<div class="row p-t-50">
  <div class="col-sm-12">

    <div class="col-sm-12">
      <div class="card-box widget-inline">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="widget-inline-box text-center">
              <h3 class="m-t-10"><i class="text-primary mdi mdi-account-circle"></i> <b data-plugin="counterup"> 
                  <?php 
                    $cuenta = new Controller();
                    $cuenta->contarController(1);
                  ?></b></h3>
              <p class="text-muted">Clientes</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6">
            <div class="widget-inline-box text-center">
              <h3 class="m-t-10"><i class="text-custom mdi mdi-basket"></i> <b data-plugin="counterup">
                <?php 
                    $cuenta = new Controller();
                    $cuenta->contarController(2);
                  ?></b></h3>
              <p class="text-muted">Artículos</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6">
            <div class="widget-inline-box text-center">
              <h3 class="m-t-10"><i class="text-info mdi mdi-cart-plus"></i> <b data-plugin="counterup">
                <?php 
                    $cuenta = new Controller();
                    $cuenta->contarController(3);
                  ?></b></h3>
              <p class="text-muted">Pedidos</p>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6">
            <div class="widget-inline-box text-center b-0">
              <h3 class="m-t-10"><i class="text-danger mdi mdi-basket-unfill"></i> <b data-plugin="counterup"><?php 
                    $cuenta = new Controller();
                    $cuenta->contarController(4);
                  ?>
                  </b></h3>
              <p class="text-muted">Ventas</p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" 
    width="100%">
    <thead>
      <tr>
        <th>Nivel</th>
        <th>Nombre alumno</th>
        <th>Nombre Profesor</th>
        <th>Actividad</th>
        <th>Hora entrada</th>
        <th>Hora Salida</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $form = new Controller();
      $form -> VistaVisita();

      ?>
    </tbody>
  </table>
</div>
</div>
