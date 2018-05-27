<!doctype html>
<html>
  <head>
    <!-- Importo el js y css para la vista de la pagina-->
    <meta charset="utf-8"/>
    <title>Sistema de Tutorias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="views/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="views/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

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
        <script src="views/js/metisMenu.min.js"></script>
        <script src="views/js/jquery.slimscroll.min.js"></script>
        <!-- App Js -->
        <script src="views/js/jquery.app.js"></script>
        <!-- init -->
        <script src="views/pages/jquery.datatables.init.js"></script>
        <!-- Datatable js -->
        <script src="views/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="views/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="views/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="views/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="views/plugins/datatables/jszip.min.js"></script>
        <script src="views/plugins/datatables/pdfmake.min.js"></script>
        <script src="views/plugins/datatables/vfs_fonts.js"></script>
        <script src="views/plugins/datatables/buttons.html5.min.js"></script>
        <script src="views/plugins/datatables/buttons.print.min.js"></script>
        <script src="views/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="views/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="views/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="views/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="views/plugins/datatables/dataTables.colVis.js"></script>
        <script src="views/plugins/datatables/dataTables.fixedColumns.min.js"></script>

  </body>
</html>