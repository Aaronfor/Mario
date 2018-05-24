<?php

class MvcControllerProducto{

	#LLAMADA A LA PLANTILLA
	#-------------------------------------

	public function pagina(){	
		
		include "views/template.php";
	
	}

	#ENLACES
	#-------------------------------------

	public function enlacesPaginasController(){

		if(isset( $_GET['action'])){
			
			$enlaces = $_GET['action'];
		
		}

		else{

			$enlaces = "index";
		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;

	}

	#REGISTRO DE USUARIOS
	#------------------------------------
	public function registroProductoController(){

		if(isset($_POST["productoRegistro"])){
			//Recibe a traves del método POST el name (html) de usuario, password y email, se almacenan los datos en una variable de tipo array con sus respectivas propiedades (usuario, password y email):
			$datosController = array( "nombre"=>$_POST["namepro"], 
								      "desc"=>$_POST["descripcionpro"],
								      "pricebuy"=>$_POST["compra"],
								      "pricesale"=>$_POST["venta"],
								      "price"=>$_POST["descuento"]);

			//Se le dice al modelo models/crud.php (Datos::registroUsuarioModel),que en la clase "Datos", la funcion "registroUsuarioModel" reciba en sus 2 parametros los valores "$datosController" y el nombre de la tabla a conectarnos la cual es "usuarios":
			$respuesta = DatosProductos::registroProductoModel($datosController, "products");

			//se imprime la respuesta en la vista 
			if($respuesta == "success"){

				header("location:index.php?action=ok");

			}

			else{

				header("location:index.php");
			}

		}

	}

	#INGRESO DE PRODUCTOS
	#------------------------------------
	public function ingresoUsuarioController(){

		if(isset($_POST["usuarioIngreso"])){

			$datosController = array( "usuario"=>$_POST["usuarioIngreso"], 
								      "password"=>$_POST["passwordIngreso"]);

			$respuesta = DatosProductos::ingresoUsuarioModel($datosController, "usuarios");
			//Valiación de la respuesta del modelo para ver si es un usuario correcto.
			if($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]){

				session_start();

				$_SESSION["validar"] = true;

				header("location:index.php?action=usuarios");

			}

			else{

				header("location:index.php?action=fallo");

			}

		}	

	}

	#VISTA DE PRODUCTOS
	#------------------------------------

	public function vistaProductosController(){

		$respuesta = DatosProductos::vistaProductossModel("products");

		#El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada.

		foreach($respuesta as $row => $item){
		echo'<tr>
				<td>'.$item["id"].'</td>
				<td>'.$item["nombre"].'</td>
				<td>'.$item["descripcion"].'</td>
				<td>'.$item["compra"].'</td>
				<td>'.$item["venta"].'</td>
				<td>'.$item["descuento"].'</td>
			</tr>';

		}

	}
}






////
?>