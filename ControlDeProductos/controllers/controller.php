<?php

Class MvcController{

	public function pagina(){	
		include "views/template.php";
	}

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
#---------------------------------------------------------------------------------------------------------
#ingreso del login
	public function ingresoUsuarioController(){
		#obtencion de los datos por el metodo post del form del login
		if(isset($_POST["login"])){
			#los valores obtenidos del formulario se guardan en un array
			$datosController = array ("usuario" => $_POST["usuario"],
										"password" => $_POST["password"]);
			#se manda a llamar a CRUD para saber si los datos ingresados son correctos junto con la tabla en la cual buscara
			$respuesta = Datos::ingresoUsuarioModel($datosController, "usuarios");
			#si hay una respuesta entra en el if
			if($respuesta){
				session_start();#se inicia sesion
				#variables de sesion que guardaran datos ya que se pueden enviar entre paginas 
				$_SESSION["validar"] = true;
				$_SESSION["usuario"] = $respuesta["nombre"];
				$_SESSION["id"] = $respuesta["id_usuario"];

				header("location:index.php?action=dashboard");
			}else{
				#en caso de fallar arrojara una alerta
				header("location:index.php?action=fallo");
			}

		}
	}

#---------------------------------------------------------------------------------------------------------

#muestra los datos de las categorias
	public function vistaCategoriaController(){
		#se envia la tabla en la cual buscara 
		$respuesta = Datos::tablaModel("categorias");
		#si hay respuesta se imprimiran en la tabla
		if($respuesta){
			foreach ($respuesta as $row => $item) {
				echo '
				<tr>
					<td>'.$item["nombre_categoria"].'</td>
					<td>'.$item["descripcion_categoria"].'</td>
					<td>'.$item["fecha_agregada"].'</td>
					<td  style="text-align: center;"><a href="index.php?action=edit_categoria&id='.$item["id_categoria"].'" class="btn btn-info"><i class="fa fa-edit"></i> Editar</a></td>
					<td  style="text-align: center;"><a href="index.php?action=delete_categoria&idBorrar='.$item["id_categoria"].'" class="btn btn-danger"><i class="fa fa-times"></i> Eliminar</a></td>
				</tr>';
			}
		}
	}

#---------------------------------------------------------------------------------------------------------
	#muestra los datos de todos los usuarios
	public function vistaUsuarioController(){
		#se envia la tabla en la cual buscara 
		$respuesta = Datos::tablaModel("usuarios");
		#si hay respuesta se imprimiran en la tabla
		if($respuesta){
			foreach ($respuesta as $row => $item) {
				#para que nosalga el usuario que esta en sesion se agrega una condicion
				if ($_SESSION["id"]!=$item["id_usuario"]) {
					echo'<tr>
					<td>'.$item["nombre"].'</td>
					<td>'.$item["usuario"].'</td>
					<td>'.$item["fecha_registro"].'</td>
					<td style="text-align: center;"><a href="index.php?action=edit_usuario&id='.$item["id_usuario"].'" class="btn btn-info"><i class="fa fa-edit"></i> Editar</a></td>
					<td style="text-align: center;"><a href="index.php?action=delete_usuario&idBorrar='.$item["id_usuario"].'" class="btn btn-danger"><i class="fa fa-times"></i> Eliminar</a></td>
					</tr>';
				}
				
			}
		}
	}
#---------------------------------------------------------------------------------------------------------
	//Funcion que muestra todos los productos registrados
	public function vistaInventarioController(){
		//Se manda a llamar el modelo que consulta todos los productos registrados y existentes logicamente
		$respuesta = Datos::tablaModel("productos");
		//Si la consulta en el modelo se ejecuta exitosamente se recorre el array devuelto para imprimirlos
		if($respuesta){
			//Ciclo que recorre el array devuelto
			foreach ($respuesta as $row => $item) {
				//Se llama al modelo que busca la categoria registrada para obtener su nombre
				$nom = Datos::nombreCategoriaModel($item["id_categoria"]);
				//Se imprimen las filas de las tablas
				echo'<tr>
				<td>'.$item["codigo_producto"].'</td>
				<td>'.$item["nombre_producto"].'</td>
				<td>$'.$item["precio"].'</td>
				<td>'.$item["stock"].'</td>
				<td>'.$nom["nombre_categoria"].'</td>
				<td>'.$item["fecha_registro"].'</td>
                <td style="text-align: center;"><a href="index.php?action=stock&id='.$item["id_producto"].'" class="btn btn-success"><i class="fa fa-refresh"></i> Actualizar</a></td>

				<td style="text-align: center;"><a href="index.php?action=edit_producto&id='.$item["id_producto"].'" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a></td>
                
				<td style="text-align: center;"><a href="index.php?action=delete_producto&idBorrar='.$item["id_producto"].'" class="btn btn-danger"><i class="fa fa-times"></i> Eliminar</a></td>
				
				</tr>';
			}
		}
			
	}
#---------------------------------------------------------------------------------------------------------
	#funcion que cuenta el numero total para el dashboard
	public function contarController($num){
		#se selecciona que tabla buscara
		switch ($num) {
			case 1:
				$tabla="productos";
				break;
			case 2:
				$tabla="categorias";
				break;
			case 3:
				$tabla="usuarios";
				break;
			case 4:
				$tabla="historial";
				break;
			case 5:
				$tabla="tiendas";
				break;
		}
		$respuesta = Datos::tablaModel($tabla);
		#teniendo los resultados si hay escribira el numero total

		echo count($respuesta);#trae las filas y las convierte a numero
	}
#---------------------------------------------------------------------------------------------------------
	#muestra los datos de todos los usuarios
	public function vistaTiendasController(){
		#se envia la tabla en la cual buscara 
		$respuesta = Datos::tablaModel("tiendas");
		#si hay respuesta se imprimiran en la tabla
		if($respuesta){
			foreach ($respuesta as $row => $item) {
				echo '
				<tr>
					<td>'.$item["nombre_tienda"].'</td>
					<td>'.$item["telefono_tienda"].'</td>
					<td>'.$item["direccion_tienda"].'</td>
					<td  style="text-align: center;"><a href="index.php?action=entrar_tienda&id='.$item["id_tienda"].'" class="btn btn-success"><i class="fa fa-eye"></i> Entrar</a></td>
					<td  style="text-align: center;"><a href="index.php?action=pause_tienda&id='.$item["id_tienda"].'" class="btn btn-warning"><i class="fa fa-pause"></i> Deshabilitar</a></td>
					<td  style="text-align: center;"><a href="index.php?action=edit_tienda&id='.$item["id_tienda"].'" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a></td>
					<td  style="text-align: center;"><a href="index.php?action=delete_tienda&idBorrar='.$item["id_tienda"].'" class="btn btn-danger"><i class="fa fa-times"></i> Eliminar</a></td>

				</tr>';
			}
		}
	}



}

?>
