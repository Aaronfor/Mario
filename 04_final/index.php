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
        <h3>Menú</h3>
          <p></p>
      </div>
      <table>
        <tr>
          <!--se mostraran 2 opciones en donde sera el menu donde hay para alumno y maestro y cada uno contiene o realizar un registro o ver una lista de registros-->
          <td style="border: solid;color: green;"><h1><a href="alumnomenu.php">Alumno</a></h1></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td style="border: solid;color: green;"><h1><a href="maestromenu.php">Maestro</a></h1></td>
        </tr>
      </table>

    </div>
    <?php require_once('footer.php'); ?>
</body>
</html>