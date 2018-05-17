<?php
#conexion con archivo para el html
include_once('utilities.php');
//conexión con las funciones
include_once('db/database_utilities.php');

#cuando se oprime el boton de agregar entraria al if ya que se utilizo el metodo post
if( $_POST )
{
  #una ves que se haya  agregado el usuario se enviara a la pagina de inicio donde estan los registros
  header('Location: sistema_bas.php');
  #se capturan todos los input los cuales tienen los datos del jugador
  $id = isset( $_POST['id'] ) ? $_POST['id'] : '';
  $name = isset( $_POST['name'] ) ? $_POST['name'] : '';
  $posicion = isset( $_POST['posicion'] ) ? $_POST['posicion'] : '';
  $carrera = isset( $_POST['carrera'] ) ? $_POST['carrera'] : '';
  $email = isset( $_POST['email'] ) ? $_POST['email'] : '';


  //llamamos a la funcion la cual agregara al nuevo jugador y le enviamos los parametros que serian sus datos y ademas el tipo de usuario que es en este caso 2 seria basquetbolista
  add( $id, $name,$posicion,$carrera,$email,2);
  //Terminamos la ejecución de los parametros
  die();

}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
     
    <div class="row">
 
      <div class="large-12 columns">
        <br>
        <!-- botones los cuales seran el menu y tendran agregar nuevo usuario o ir al menu de su seccion-->
        <a href="sistema_bas.php" class="button radius tiny primary">Home</a>
        <a href="newuser.php" class="button radius tiny secondary">Nuevo</a>
        <h3>Nuevo basquetbolista</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <!-- formulario el cual usa el metodo post -->
              <form method="post">

                <!-- se agregan inputs los cuales tomaran los datos del nuevo jugador que sera agregado-->
                <div class="row">
                  <div class="large-4 columns">
                    <label>Número de Jugador
                      <input type="text" name="id" placeholder="" />
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="large-7 columns">
                    <label>Nombre
                      <input type="text" name="name" placeholder="" />
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="large-7 columns">
                    <label>Posición
                      <input type="text" name="posicion" placeholder="" />
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="large-7 columns">
                    <label>Carrera
                      <input type="text" name="carrera" placeholder="" />
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="large-7 columns">
                    <label>Email
                      <input type="text" name="email" placeholder="" />
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="large-4 columns">
                    <label>
                      <!-- por el metodo post al oprimir se dirigira al if el cual llamara a la funcion add-->
                      <input type="submit" class="button success" value="AGREGAR" />
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>