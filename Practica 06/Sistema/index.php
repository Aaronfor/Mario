<?php
#se incluye para el html
include_once('utilities.php');
#se incluye para las funciones
include_once('db/database_utilities.php');

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Práctica 09</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body> 
    <div class="row">
 
      <div class="large-9 columns">
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
                <h3 style="text-align: center;">Informe Total</h3>
              </div>
              <table>
                <thead>
                  <tr>
                    <!-- parte de arriba de la tabla-->
                    <th width="150" style="text-align: center;">Usuarios</th>
                    <th width="150" style="text-align: center;">Tipo</th>
                    <th width="150" style="text-align: center;">Status</th>
                    <th width="150" style="text-align: center;">Accesos</th>
                    <th width="150" style="text-align: center;">Usuarios Activos</th>
                    <th width="150" style="text-align: center;">Usuarios Inactivos</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <!-- se llama a cada funcion la cual contara el numero de todo-->
                    <td style="text-align: center;"><?php echo countt(1); ?></td>
                    <td style="text-align: center;"><?php echo countt(2); ?></td>
                    <td style="text-align: center;"><?php echo countt(3);  ?></td>
                    <td style="text-align: center;"><?php echo countt(4);  ?></td>
                    <td style="text-align: center;"><?php echo countt(5); ?></td>
                    <td style="text-align: center;"><?php echo countt(6); ?></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="content" data-slug="panel1">
              <div class="row">
                <h3>Usuarios</h3>
              </div>
              <table>
                <thead>
                  <tr>
                    <!-- parte de arriba de la tabla-->
                    <th width="150" style="text-align: center;">ID</th>
                    <th width="150" style="text-align: center;">Email</th>
                    <th width="150" style="text-align: center;">Password</th>
                    <th width="150" style="text-align: center;">Status</th>
                    <th width="150" style="text-align: center;">Type</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  #se llama a la funcion con el parametro de dicha tabla
                  $stmt=run_query(1);
                  $stmt->execute();
                  //ciclo que retorna un array asociativo
                  while($r=$stmt->fetch(PDO::FETCH_ASSOC))
                  {
                  ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $r['id']; ?></td>
                    <td style="text-align: center;"><?php echo $r['email']; ?></td>
                    <td style="text-align: center;"><?php echo $r['password']; ?></td>
                    <td style="text-align: center;"><?php echo $r['status_id']; ?></td>
                    <td style="text-align: center;"><?php echo $r['user_type_id']; ?></td>
                  </tr>
                  <?php
                }
                  ?>
                </tbody>
              </table>
            </div>

            <div class="content" data-slug="panel1">
              <div class="row">
                <h3>Accesos de Usuarios</h3>
              </div>
              <table>
                <thead>
                  <tr>
                    <!-- parte de arriba de la tabla-->
                    <th width="150" style="text-align: center;">ID</th>
                    <th width="150" style="text-align: center;">Fecha</th>
                    <th width="150" style="text-align: center;">ID Usuario</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  #se llama a la funcion con el parametro de dicha tabla
                  $stmt=run_query(2);
                  $stmt->execute();
                  //ciclo que retorna un array asociativo
                  while($r=$stmt->fetch(PDO::FETCH_ASSOC))#se imprime cada registro con un while
                  {
                  ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $r['id']; ?></td>
                    <td style="text-align: center;"><?php echo $r['date_logged_in']; ?></td>
                    <td style="text-align: center;"><?php echo $r['user_id']; ?></td>
                  </tr>
                  <?php
                }
                  ?>
                </tbody>
              </table>
            </div>

             <div class="content" data-slug="panel1">
              <div class="row">
                <h3>Tipos de Usuarios</h3>
              </div>
              <table>
                <thead>
                  <tr>
                    <!-- parte de arriba de la tabla-->
                    <th width="150">ID</th>
                    <th width="150">Tipo</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  #se llama a la funcion con el parametro de dicha tabla
                  $stmt=run_query(3);
                  $stmt->execute();
                  //ciclo que retorna un array asociativo
                  while($r=$stmt->fetch(PDO::FETCH_ASSOC))#se imprime cada registro con un while
                  {
                  ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $r['id']; ?></td>
                    <td style="text-align: center;"><?php echo $r['name']; ?></td>
                  </tr>
                  <?php
                }
                  ?>
                </tbody>
              </table>
            </div>

            <div class="content" data-slug="panel1">
              <div class="row">
                <h3>Estado de Usuarios</h3>
              </div>
              <table>
                <thead>
                  <tr>
                    <!-- parte de arriba de la tabla-->
                    <th width="150">ID</th>
                    <th width="150">Estado</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  #se llama a la funcion con el parametro de dicha tabla
                  $stmt=run_query(4);
                  $stmt->execute();
                  //ciclo que retorna un array asociativo
                  while($r=$stmt->fetch(PDO::FETCH_ASSOC))#se imprime cada registro con un while
                  {
                  ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $r['id']; ?></td>
                    <td style="text-align: center;"><?php echo $r['name']; ?></td>
                  </tr>
                  <?php
                }
                  ?>
                </tbody>
              </table>
            </div>

          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>