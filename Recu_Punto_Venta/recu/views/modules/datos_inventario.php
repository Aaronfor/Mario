<div class="row">
	<div class="col-md-12">
		<h4 class="header-title">Inventario de Artículo</h4>
		<?php
			if(isset($_GET["id_edit"])){
				$caso=2;
				$id=$_GET["id_edit"];
			}else{
				$caso=1;
				$id=$_GET["id"];
			}
			$datosArticulo = new Controller();
			$datosArticulo -> obtenerDatosInventario($id,$caso);
			if(isset($_POST["submit"])){
				$crud=new Controller();
  				$crud->updateInventarioController2($id);
			}
			if(isset($_POST["cancelar"])){
				echo '<script>location.href="index.php?action=datos_inventario&id='.$id .'";</script>';
			}
			if(isset($_POST["regresar"])){
				echo '<script>location.href="index.php?action=inventario";</script>';
			}        
		?>
	</div>
</div>
