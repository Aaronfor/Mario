<?php
	session_start();
	if(!$_SESSION["validar"]){
		header("location:index.php?action=ingresar");
		exit();
	}
?>
<h1>REGISTRO DE PRODUCTOS</h1>

<form method="post">
	<input type="text" placeholder="Nombre de Producto" name="namepro" required>
	<input type="text" placeholder="Descripción" name="descripcionpro" required>
	<input type="text" placeholder="Precio de Compra" name="compra" required>
	<input type="text" placeholder="Precio de Venta" name="venta" required>
	<input type="text" placeholder="Descuento para el compi" name="descuento" required>
	<input type="submit" value="Enviar" class="button tiny" name="productoRegistro">
</form>

<?php
//Enviar los datos al controlador MvcController (es la clase principal de controller.php)
$registro = new MvcControllerProducto();
//se invoca la función registroProductosController de la clase MvcController:
$registro -> registroProductoController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>
