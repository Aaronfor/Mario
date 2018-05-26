
<section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">Iniciar Sesión
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" method="post">

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="emailaddress">Correo</label>
                                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="1530000@upv.mx">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <a href="#" class="text-muted pull-right font-14">¿Olvidaste tu contraseña?</a>
                                                <label for="password">Contraseña</label>
                                                <input class="form-control" type="password" required="" id="password" placeholder="password">
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- end card-box-->

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
<?php
	
	$ingreso = new MvcController();
	$ingreso -> ingresoUsuarioController();

	if(isset($_GET["action"])){

		if($_GET["action"] == "fallo"){

			echo "Fallo al ingresar";
		
		}

	}

?>