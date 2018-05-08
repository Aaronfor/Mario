<?php
#el archivo txt es abierto para su lectura
$archivo=fopen('alumnos.txt','r');
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
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Ejemplos de listado en array</h3>
          <p>Listado</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>

              <table>
                <thead>
                  <tr>
                    <th width="200">Matricula</th>
                    <th width="250">Nombre</th>
                    <th width="250">Carrera</th>
                    <th width="250">Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  #variable sum la cual será el numero de registros 
                  $sum = 0;
                  #un ciclo while donde iterara mientras contenga registros
                  while (!feof($archivo)){
                    #variable sum donde aumenta su contador
                    $sum++;
                    #se obtienen los datos del archivo txt
                    $traer=fgets($archivo);
                    #como se guarda en el txt como cadena se dividira en secciones donde se guardaran en un array
                    $field[$sum] = explode ('|', $traer);?>
                  <tr>
                    <!--a continuacion se imrimiran los valores de cada seccion-->
                    <td><?php echo $field[$sum][0]; ?></td>
                    <td><?php echo $field[$sum][1]; ?></td>
                    <td><?php echo $field[$sum][2]; ?></td>
                    <!--se enviara la matricula por medio del metodo get a un archivo llamado key.php-->
                    <td><a href="./key.php?id=<?php echo $field[$sum][0];?>" class="button radius tiny secondary">Ver detalles</a></td>
                  </tr>
                  <?php
                  } 
                  #se cierra el archivo anteriormete abierto
                  fclose($archivo);
                  ?>
                  <tr>
                    <!--imprime el numero total de registros-->
                    <td colspan="4"><b>Total de registros:<?php echo $sum ?> </b></td>
                  </tr>
                </tbody>
              </table>
 
            </div>
          </section>
        </div>
      </div>

    </div>
    

    <?php require_once('footer.php'); ?>
    