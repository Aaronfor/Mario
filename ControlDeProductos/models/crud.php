<?php

require_once("conexion.php");


Class Datos extends Conexion{

	#obtencion de datos para saber si se encuentra el usuario
	public function ingresoUsuarioModel($datosModel, $tabla){
		#consulta a la BD
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE usuario = :user AND pass = :pass");	
		#asignacion de los valores
		$stmt->bindParam(":user", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":pass", $datosModel["password"], PDO::PARAM_STR);
		$stmt->execute();
		#se envian los resultados
		return $stmt->fetch();

		$stmt->close();
	}


	#obtiene los datos de dicha tabla
	public function tablaModel($tabla){
		#se hace la consulta
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt->execute();
		#se envian los datos
		return $stmt->fetchAll();
		$stmt->close();
	}

	#Obtener el nombre de la categoria por el id
	public function nombreCategoriaModel($id){
		#se hace la consulta 
		$stmt = Conexion::conectar()->prepare("SELECT * FROM categorias WHERE id_categoria=:id");
		#asignacion de los valores
		$stmt->bindParam(":id", $id, PDO::PARAM_STR);
		#se ejecuta
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();		
	}




}



?>
