<?php
#conexion con archivo para el html
include_once('utilities.php');
//conexión con las funciones
include_once('db/database_utilities.php');
$id;
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Práctica 09</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
    <script LANGUAGE="JavaScript">
function confirmDel(){
//funcion que ayudara a confirmar si se desea eliminar el usuario
if (confirm("¿Realmente desea eliminarlo?"))
    return true; //con esto se ejecuta el href de link
else
    return false ;//en caso de que no, no pasara nada
}
</script>
  </head>
  <body> 
    <div class="row">
 
      <div class="large-12 columns">
        <br>
        <!-- botones los cuales seran el menu y tendran agregar nuevo usuario o ir al menu de su seccion-->
        <a href="sistema_bas.php" class="button radius tiny primary">Home</a>
        <a href="newuser.php" class="button radius tiny secondary">Nuevo</a>

        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
                <h3 style="text-align: center;">Sistema de Basquetbol UPV</h3>
              </div>
              <table>
                <thead>
                  <tr>
                    <th width="200">ID</th>
                    <th width="250">Nombre</th>
                    <th width="250">Posición</th>
                    <th width="250">Carrera</th>
                    <th width="250">Email</th>
                    <th width="250"></th>
                  </tr>
                </thead>

                <tbody>
                  <?php 
                  #se llama a la funcion la cual traera la consulta de solo los basquetbolistas de la base de datos
                  $stmt=run_query(2);
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
                    <td style="text-align: center;"><?php echo $r['posicion']; ?></td>
                    <td style="text-align: center;"><?php echo $r['carrera']; ?></td>
                    <td style="text-align: center;"><?php echo $r['email']; ?></td>
                    <td style="text-align: center;">
                       <!-- botones lo cuales podran modificar o aliminar al usuario-->
                      <a href="details.php?id=<?php echo $r['id']; ?> " class="button tiny secondary">Detalles</a>
                      <!--en este se llama a la funcion antes mencionada la cual eliminara al usuario mientras confirem-->
                     <a href="delete.php?id= <?php echo $r['id']; ?>&tipo=2" class="button tiny alert" onclick="if(confirmDel() == false){return false;}">ELIMINAR</a>
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