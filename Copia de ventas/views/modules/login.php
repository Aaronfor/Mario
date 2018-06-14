<div class="row">
    <div class="col-xs-8">
    </div>
    <div class="col-xs-4">
        <?php  
        if(isset($_GET["action"])){
            if($_GET["action"] == "fallo"){
                echo "<div class=\"alert alert-danger alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    <h4><i class=\"icon fa fa-ban\"></i>Error</h4>
                    Usuario o contraseña incorecto.";

            }
        }
        ?>
    </div>
</div>
<div class="login-box">
      <!-- /.login-logo -->
    <div class="box box-info">
        <div class="login-box-body">
            <h1 class="login-box-msg">Iniciar Sesión</h1>
            <form method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Usuario" required="required" name="usuario">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Contraseña" name="password" required="required">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Entrar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                    </div>
                    <a href="#">Olvide mi contraseña</a><br>
                </div>
            </form>
        </div>
<!-- /.login-box-body -->
    </div>
</div>
<!-- /.login-box -->

<?php
$ingreso = new MvcController();
$ingreso -> ingresoUsuarioController();

?>