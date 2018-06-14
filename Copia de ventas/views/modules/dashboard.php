 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Inicio</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>
                  <?php
                    //Creacion del objeto y llamado a sus metodos
                    $productos = new MvcController();
                    $productos->contarController(1);
                ?>
                </h3>
                <p>Total de productos</p>
              </div>
              <div class="icon">
                <i class="fa fa-dropbox"></i>
              </div>
            </div>
          </div>

          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-maroon">
              <div class="inner">
                <h3><?php
                    //Creacion del objeto y llamado a sus metodos
                    $trans = new MvcController();
                    $trans->contarController(4);
                ?></h3>

                <p>Total de Ventas</p>
              </div>
              <div class="icon">
                <i class="fa fa-shopping-cart"></i>
              </div>
            </div>
          </div>

         
          <!-- ./col -->
          </div>

    </section>

  </div>