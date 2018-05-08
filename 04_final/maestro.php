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
    <h2>Formulario Maestro</h2>
    <!-- formulario para agregar nuevo maestro  donde se encuentran No empleado, nombre, carrera y telefono
      -se envian los datos por metodo post y se envian a un archivo llamado formulariomaestro donde seran captados esos datos-->

    <form method="post" action="formulariomaestro.php" accept-charset="utf-8">
      No Empleado: <input type="text" name="empleado" required="required">

      <br>
      Nombre: <input type="text" name="nombre" required="required">

      <br>
      Carrera: <input type="text" name="carrera" required="required">

      <br>
      Teléfono: <input type="text" name="tel" required="required">

      <input type="submit" name="submit" value="Submit">
    </form>

  </div>
    <?php require_once('footer.php'); ?>
</body>
</html>