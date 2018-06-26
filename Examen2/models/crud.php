<?php

require_once("conexion.php");


Class Datos extends Conexion{

	#obtiene los datos de dicha tabla
	public function tablaModel($tabla){
		#se hace la consulta
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt->execute();
		#se envian los datos
		return $stmt->fetchAll();
		$stmt->close();
	}
#---------------------------------------------------------------------------------------------------------
	//Busca un grupo por su id
	public function AlumnaModel($dato,$num){
		switch ($num) {
			case 1:
				$clave="id_alumna";
				$tabla="alumnas";
				break;
			case 2:
				$clave="id_grupo";
				$tabla="grupos";
				break;
		}

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $clave = :dato");

		$stmt->bindParam(":dato", $dato, PDO::PARAM_STR);
		//Se ejecuta la consulta
		$stmt->execute();
		//Se retorna la fila si es que existe
		return $stmt->fetch();
		//se cierra la consulta
		$stmt->close();
	}
#---------------------------------------------------------------------------------------------------------

	//Registra un pago en la base de datos
	public function registrarPagoModel($grupo,$alumna,$nMa,$fecha_pago,$img,$folio,$fecha_envio){
		//Se prepara la consulta
		$stmt = Conexion::conectar()->prepare("INSERT INTO pagos (id_alumna, id_grupo, nom_mama, fecha_pago, fecha_envio, url, folio) VALUES('$alumna', '$grupo','$nMa','$fecha_pago','$fecha_envio','$img','$folio')");
		//Se ejecuta la consulta
		return $stmt->execute();
		//Se cierra la consulta
		$stmt->close();

	}


}
?>
