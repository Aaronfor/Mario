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
        <br>
        <?php include_once ('header.php'); ?>

        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
                <h3 style="text-align: center;">Sistema de Ventas</h3>
              </div>
              <table>
                <thead>
                  <tr>
                    <th width="200">Total ganado</th>
                    <th width="250">Promedio</th>
                    <th width="250">Fecha</th>
                    <th width="250"></th>
                  </tr>
                </thead>

                <tbody>
                  
                </tbody>
              </table>
            </div>



          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>