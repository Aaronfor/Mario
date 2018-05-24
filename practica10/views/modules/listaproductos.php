<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:index.php?action=ingresar");

	exit();

}

?>

<h1>Productos</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Precio Compra</th>
				<th>Precio Venta</th>
				<th>Descuento</th>

			</tr>

		</thead>

		<tbody>
			
			<?php

			$vistaProducto = new MvcControllerProducto();
			$vistaProducto -> vistaProductosController();
			#$vistaProducto -> borrarUsuarioController();

			?>

		</tbody>

	</table>

<?php

if(isset($_GET["action"])){

	if($_GET["action"] == "cambio"){

		echo "Cambio Exitoso";
	
	}

}

?>




