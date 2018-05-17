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
        <?php include_once ('header.php'); 
        ?>
        
        <a href="new_producto.php" class="button radius tiny secondary">Nuevo Producto</a>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
                <h3 style="text-align: center;">Productos</h3>
              </div>
              <table>
                <thead>
                  <tr>
                    <th width="200">ID</th>
                    <th width="250">Nombre</th>
                    <th width="250">Precio</th>
                    <th width="250"></th>
                  </tr>
                </thead>

                <tbody>
                  <?php 
                  #se llama a la funcion la cual traera la consulta de solo los futbolistas de la base de datos
                  $stmt=run_query(1);
                  #se ejecuta la consulta
                  $stmt->execute();
                  //ciclo que retorna un array asociativo y dara tantas iteraciones como usuarios
                  while($r=$stmt->fetch(PDO::FETCH_ASSOC))
                  {
                  ?>
                  <tr>
                    <!-- se imprime cada usuario -->
                    <td style="text-align: center;"><?php echo $r['id']; ?></td>
                    <td style="text-align: center;"><?php echo $r['nombre']; ?></td>
                    <td style="text-align: center;"><?php echo $r['precio']; ?></td>
                    <td style="text-align: center;">
                      <!-- botones lo cuales podran modificar o aliminar al usuario-->
                      <a href="details.php?id=<?php echo $r['id']; ?> " class="button tiny secondary">Detalles</a>
                      <!--en este se llama a la funcion antes mencionada la cual eliminara al usuario mientras confire-->
                     <a href="delete.php?id= <?php echo $r['id']; ?>&tipo=1" class="button tiny alert" onclick="if(confirmDel() == false){return false;}">ELIMINAR</a>
                    </td>
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