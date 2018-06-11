 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categorías
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabla de Categorías</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Fecha de Registro</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      //Creacion del objeto y llamado a sus metodos
                      $vistaCategorias = new MvcController();
                      $vistaCategorias->vistaCategoriaController();
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
      </section>
  </div>
