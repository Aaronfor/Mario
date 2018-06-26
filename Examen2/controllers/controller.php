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
	//Funcion que muestra las filas de la tabla de todos los pagos realizados
	public function vistaAlumnasController(){
		//Se ejecuta un modelo que obtiene todos los pagos almacenados en la base de datos
		$respuesta = Datos::tablaModel("pagos");
		//Si el modelo se ejecuta correctamente se imprime cada registro en forma de fila de una tabla
		if($respuesta){
			//Ciclo que recorre cada registro e imprime su informacion
			foreach ($respuesta as $row => $item) {
				//Modelo que busca la informacion de una alumna en particular
				$alumna = Datos::AlumnaModel($item["id_alumna"],1);
				//Modelo que busca la informacion de un grupo en particular
				$grupo = Datos::AlumnaModel($item["id_grupo"],2);
				//Se imprimen los datos en forma de fila
				echo '<tr>
						<td>'.$item["id_pago"].'</td>
						<td>'.$alumna["nombre_alumna"].'</td>
						<td>'.$grupo["nombre_grupo"].'</td>
						<td>'.$item["nom_mama"].'</td>
						<td>'.$item["fecha_pago"].'</td>
						<td>'.$item["fecha_envio"].'</td>
					</tr>';
			}
		}
	}
#---------------------------------------------------------------------------------------------------------
	//Funcion que imprime los grupos en un select2
	public function GruposController(){
		$respuesta = Datos::tablaModel("grupos");
		if($respuesta){
			foreach ($respuesta as $row => $item) {
				echo '<option value="'.$item["id_grupo"].'">'.$item["nombre_grupo"].'</option>';
			}
		}
	}
#---------------------------------------------------------------------------------------------------------
	//Funcion que imprime los grupos en un select2
	public function AlumnasController(){
		$respuesta = Datos::tablaModel("alumnas");
		if($respuesta){
			foreach ($respuesta as $row => $item) {
				echo '<option value="'.$item["id_alumna"].'">'.$item["nombre_alumna"].'</option>';
			}
		}
	}
#---------------------------------------------------------------------------------------------------------
	//Funcion que registra un pago a la base de datos
	public function PagoController(){
		//Se comprueba que el boton acepta se haya seleccionado
		if(isset($_POST["registrar"])){
			$fecha_hora = date("d-m-Y H:i:s");
				$grupo = $_POST["grupoAlu"];
				$alumna = $_POST["alumna"];
				$nMa = $_POST["madre"];
				$fecha_pago = $_POST["fechaPago"];
				$img = "ruta url";
				$folio = $_POST["folio"];
				$fecha_envio = date("d-m-Y H:i:s");
				$respuesta = Datos::registrarPagoModel($grupo,$alumna,$nMa,$fecha_pago,$img,$folio,$fecha_envio);
				if($respuesta){
					echo"<script language='javascript'>window.location='index.php?action=alumnas';</script>";
				}
			#}

		}

	}






}

?>
