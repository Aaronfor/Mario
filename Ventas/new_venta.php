<?php
#conexion con archivo para el html
include_once('utilities.php');
//conexión con las funciones
include_once('db/database_utilities.php');
$num=folio();
echo $num;

#cuando se oprime el boton de agregar entraria al if ya que se utilizo el metodo post
if( $_POST )
{
  #una ves que se haya  agregado el usuario se enviara a la pagina de inicio donde estan los registros
  header('Location: new_venta.php');
  #se capturan todos los input los cuales tienen los datos del jugador
  $nombre = isset( $_POST['nombre'] ) ? $_POST['nombre'] : '';
  $precio = isset( $_POST['cantidad'] ) ? $_POST['cantidad'] : '';

  //llamamos a la funcion la cual agregara al nuevo jugador y le enviamos los parametros que serian sus datos y ademas el tipo de usuario que es en este caso 2 seria basquetbolista
  addventa($nombre,$precio);
  //Terminamos la ejecución de los parametros
  die();

}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nuevo Producto</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
     
    <div class="row">
 
      <div class="large-12 columns">
        <br>
        <!-- botones los cuales seran el menu y tendran agregar nuevo usuario o ir al menu de su seccion-->
        <?php include_once ('header.php'); 
        ?>
        <h3>Nueva Venta</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <!-- formulario el cual usa el metodo post -->
              <form method="post">

                <!-- se agregan inputs los cuales tomaran los datos del nuevo jugador que sera agregado-->
                <div class="row">
                  <div class="large-4 columns">
                    <label>Nombre del producto
                      <input type="text" name="nombre" placeholder="" />
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="large-4 columns">
                    <label>Cantidad
                      <input type="text" name="cantidad" placeholder="" />
                    </label>
                  </div>
                </div>

                </div>

                <div class="row">
                  <div class="large-4 columns">
                    <label>
                      <!-- por el metodo post al oprimir se dirigira al if el cual llamara a la funcion add-->
                      <input type="submit" class="button success" value="Agregar Producto" />
                        <a href="venta.php" class="button">Terminar Venta</a>
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>  