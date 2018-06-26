<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
        <title>Sistema de Alumnas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="views/assets/images/favicon.ico">

        <!-- Plugins css-->
        <link href="views/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link rel="stylesheet" href="views/assets/plugins/switchery/switchery.min.css">
        <link href="views/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="views/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="views/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="views/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="views/assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="views/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Summernote css -->
        <link href="views/assets/plugins/summernote/summernote.css" rel="stylesheet" />

        <!-- Bootstrap core CSS -->
        <link href="views/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="views/assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="views/assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="views/assets/css/style.css" rel="stylesheet">

</head>


<body>
        <?php
        //se validan los tipos de action que hay ya que existen dos menus de navegacion diferentes
        if(isset($_GET["action"]) && $_GET["action"]!="salir" && $_GET["action"]!="error"){
              if($_GET["action"]=="pagos" || $_GET["action"]=="alumnas"){
                  include("modules/menu.php");
              }else{
                if($_GET["action"]!="login" && $_GET["action"]!="fallo"){
                  #include("modules/navegacion2.php");
                }
              }
        }else{
          include("modules/menu.php");
        }
      ?>

<?php
        //Se crea una instancia del controlador
        $mvc = new MvcController();
        //Se manda a llamar el controlador de las paginas
        $mvc->enlacesPaginasController();
        
?>
 <!-- js placed at the end of the document so the pages load faster -->
        <script src="views/assets/js/jquery-2.1.4.min.js"></script>
        <script src="views/assets/js/bootstrap.min.js"></script>
        <script src="views/assets/js/metisMenu.min.js"></script>
        <script src="views/assets/js/jquery.slimscroll.min.js"></script>

        <script src="views/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="views/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="views/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="views/assets/plugins/switchery/switchery.min.js"></script>
        <script type="text/javascript" src="views/assets/plugins/parsleyjs/parsley.min.js"></script>

        <script src="views/assets/plugins/moment/moment.js"></script>
        <script src="views/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="views/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="views/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="views/assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="views/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="views/assets/plugins/summernote/summernote.min.js"></script>

        <!-- form advanced init js -->
        <script src="views/assets/pages/jquery.form-advanced.init.js"></script>

        <!-- App Js -->
        <script src="views/assets/js/jquery.app.js"></script>


</body>
</html>
