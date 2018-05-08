<?php
#se abre el archivo alumnos donde estan todos los registros
$archivo=fopen('alumnos.txt','r');
#con el metodo get se obtiene el id que seria la matricula del estudiante
$id = $_GET['id'];
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

        <h3>Manejo de arreglos</h3>
          <p>Elemento de un arreglo</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <ul class="pricing-table">
                <li class="title">Detalle de indice</li>

                <?php 
                #a continuacion se buscara en un ciclo while que la matricula coincida con la del archivo y asi a continuacion poder imprimir sus datos
                  $loop=0;
                  while (!feof($archivo)){
                    $loop++;
                    $traer=fgets($archivo);#captura de dato
                    $field[$loop] = explode ('|', $traer);#division de cadena
                    if($field[$loop][0]==$id){ ?><!--evaluacion-->
                      <li class="description"><?php echo $field[$loop][0]; ?></li>
                      <li class="description"><?php echo $field[$loop][1];  ?></li>
                      <li class="description"><?php echo $field[$loop][2];  ?></li>
                      <li class="description"><?php echo $field[$loop][3];  ?></li>
                  <?php
                  }} 
                  fclose($archivo);
                  ?>
                
              </ul>
            </div>
          </section>
        </div>
      </div>
    </div>
     
    <?php require_once('footer.php'); ?>