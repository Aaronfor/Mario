<!doctype html>
<html lang="en">
  <head>
    <!-- Importo el js y css para la vista de la pagina-->
      <meta charset="utf-8" />
      <title>Sistema de Tutorias</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
      <meta content="Coderthemes" name="author" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <!-- Bootstrap core CSS -->
      <link href="views/css/bootstrap.min.css" rel="stylesheet">
      <!-- MetisMenu CSS -->
      <link href="views/css/metisMenu.min.css" rel="stylesheet">
      <!-- Icons CSS -->
      <link href="views/css/icons.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="views/css/style.css" rel="stylesheet">
  </head>

  <body>
    <br>

      <br>
      <?php
        $mvc = new MvcController();
        $mvc->enlacesPaginasController();
      ?> 

      <!-- END HOME -->
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="views/js/jquery-2.1.4.min.js"></script>
        <script src="views/js/bootstrap.min.js"></script>
        <script src="js/metisMenu.min.js"></script>
        <script src="views/js/jquery.slimscroll.min.js"></script>
        <!-- App Js -->
        <script src="views/js/jquery.app.js"></script>

  </body>
</html>