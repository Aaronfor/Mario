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
    <h2>Formulario Alumno</h2>
    <!-- formulario para agregar nuevo alumno  donde se encuentran matricula, nombre, carrera, email y telefono
      -se envian los datos por metodo post y se envian a un archivo llamado formulario donde seran captados esos datos-->
    <form method="post" action="formulario.php" accept-charset="utf-8">
      Matricula: <input type="text" name="matricula" required="required">

      <br>
      Nombre: <input type="text" name="nombre" required="required">

      <br>
      Carrera: <input type="text" name="carrera" required="required">

      <br>
      E-mail: <input type="email" name="email" required="required">

      <br>
      Teléfono: <input type="text" name="tel" required="required">

      <input type="submit" name="submit" value="Submit">
    </form>

  </div>
    <?php require_once('footer.php'); ?>
</body>
</html>