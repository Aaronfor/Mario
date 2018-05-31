<?php

session_start();


if(!$_SESSION["validar"]){

  header("location:index.php?action=login");

  exit();

}

?>
<div id="page-right-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<a href="index.php?action=new_maestro" class="button radius tiny"><button class="button">Agregar Maestro
				</button></a>

				<div class="table-responsive m-b-20">
					<h5><b>Tabla de Maestros</b></h5>

					<table id="datatable-buttons" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Carrera</th>
								<th>Nombre</th>
								<th>Correo</th>
								<th>Modificar</th>
								<th>Eliminar</th>
							</tr>
						</thead>


						<tbody>
							<?php  

							$vistaMaestros = new MvcController();
							$vistaMaestros -> vistaMaestrosController();

							?>

						</tbody>
					</table>
				</div>
			</div>
		</div>

<?php

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>