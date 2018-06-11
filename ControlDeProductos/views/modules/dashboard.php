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
            <div class="small-box bg-purple">
              <div class="inner">
                <h3><?php
                    //Creacion del objeto y llamado a sus metodos
                    $trans = new MvcController();
                    $trans->contarController(5);
                ?></h3>

                <p>Total de Tiendas</p>
              </div>
              <div class="icon">
                <i class="fa  fa-building-o"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php
                  //Creacion del objeto y llamado a sus metodos
                    $usuarios = new MvcController();
                    $usuarios->contarController(3);
                ?></h3>
                <p>Total de Usuarios</p>
              </div>
              <div class="icon">
                <i class="fa fa-street-view"></i>
              </div>
            </div>
          </div>

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
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php
                    //Creacion del objeto y llamado a sus metodos
                    $categoria = new MvcController();
                    $categoria->contarController(2);
                ?><sup style="font-size: 20px"></sup></h3>

                <p>Total de Categorías</p>
              </div>
              <div class="icon">
                <i class="ion ion-pricetags"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          
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

                <p>Total de Transacciones</p>
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