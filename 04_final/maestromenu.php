<!DOCTYPE html>
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
      <div>
        <h3>Opciones</h3>
          <p></p>
      </div>
      <!--muestra las opciones que tiene el usuario en donde hay de 2 sopas o 
        ver los registros o agregar registros de maestros-->
      <h1><a href="maestro.php">Registro Maestro</a></h1>
      <h1><a href="maestrolista.php">Lista de Maestros</a></h1>


    </div>
    <?php require_once('footer.php'); ?>
</body>
</html>