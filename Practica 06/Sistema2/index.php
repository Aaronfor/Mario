<?php
#conexion con archivo para el html

include_once('utilities.php');

//conexión con las funciones

include_once('db/database_utilities.php');
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body ">
     
    <div class="row">
 
      <div class="large-12 columns">
        <h2 style="text-align: center;">Sistema de Control</h2>
        <br>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div style="text-align: center;">

                <!-- links para ir al meno de cada deporte como el de futbol o el de basquetbol-->

                <a href="sistema_fut.php"><p style="font-size: 250%; color: red">Sistema de<br>Futbolistas</p></a>
                <a href="sistema_bas.php"><p style="font-size: 250%;">Sistema de<br>Basquetbolistas</p></a>

              </div>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>