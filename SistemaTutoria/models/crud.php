<?php

require_once("conexion.php");


Class Datos extends Conexion{


	public function ingresoUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT email, password FROM $tabla WHERE email = :email");	
		$stmt->bindParam(":email", $datosModel["correo"], PDO::PARAM_STR);
		$stmt->execute();

		#fetch(): Obtiene una fila de un conjunto de resultados asociado al objeto PDOStatement. 
		return $stmt->fetch();

		$stmt->close();

	}
	#muestra la tabla
	public function vistaMaestrosModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla inner join carreras on $tabla.id_carrera = carreras.id_carrera");

		$stmt->execute();

		$results = $stmt->fetchAll();

		return $results;


		$stmt->close();

	}

	public function selectCarrerasModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id_carrera,nombre FROM $tabla");	
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function agregarMaestroModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_maestro,id_carrera,name,email,password) VALUES (:id_maestro,:carrera,:nombre,:email,:password)");	

		$stmt->bindParam(":id_maestro", $datosModel["id_maestro"]);
		$stmt->bindParam(":carrera", $datosModel["carrera"]);
		$stmt->bindParam(":nombre", $datosModel["nombre"]);	
		$stmt->bindParam(":email", $datosModel["email"]);	
		$stmt->bindParam(":password", $datosModel["password"]);			


		if($stmt->execute()){

			return "success";

		}else{
			return "error";

		}

		$stmt->close();

	}

	public function editMaestroModel($datosModel, $tabla){


		$stmt = Conexion::conectar()->prepare("SELECT *, carreras.nombre as carr, $tabla.name, $tabla.email, $tabla.password FROM $tabla inner join carreras on $tabla.id_carrera = carreras.id_carrera WHERE id_maestro = :id_maestro");
		$stmt->bindParam(":id_maestro", $datosModel, PDO::PARAM_INT);	
		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

	}

	public function updateMaestroModel($datosModel, $tabla){


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET name = :name, email = :email, password = :password, id_carrera = :id_carrera WHERE id_maestro = :id_maestro");

		$stmt->bindParam(":id_maestro", $datosModel["id_maestro"]);
		$stmt->bindParam(":name", $datosModel["name"]);
		$stmt->bindParam("id_carrera", $datosModel["id_carrera"]);
		$stmt->bindParam(":email", $datosModel["email"]);
		$stmt->bindParam(":password", $datosModel["password"]);

		if($stmt->execute()){

			return "success";

		}else{

			return "error";

		}

		$stmt->close();

	}

	public function deleteMaestroModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_maestro = :id_maestro");
		$stmt->bindParam(":id_maestro", $datosModel, PDO::PARAM_INT);

		echo $tabla;

		if($stmt->execute()){

			return "success";

		}else{

			return "error";

		}

		$stmt->close();

	}

	public function vistaAlumnosModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT *, alumno.matricula as mat, alumno.nombre as alu, carreras.nombre as carr, maestros.name as mae  FROM $tabla inner join carreras on $tabla.id_carrera = carreras.id_carrera inner join maestros on $tabla.id_tutor = maestros.id_maestro");

		$stmt->execute();

		$results = $stmt->fetchAll();


		return $results;


		$stmt->close();

	}

	public function selectTutoresModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id_maestro,name FROM $tabla");	
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function agregarAlumnoModel($datosModel, $tabla){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (matricula,nombre,id_carrera,id_tutor) VALUES (:matricula,:nombre,:id_carrera,:id_tutor)");	

		$stmt->bindParam(":matricula", $datosModel["matricula"]);
		$stmt->bindParam(":nombre", $datosModel["nombre"]);
		$stmt->bindParam(":id_carrera", $datosModel["carrera"]);	
		$stmt->bindParam(":id_tutor", $datosModel["tutor"]);		


		if($stmt->execute()){

			return "success";

		}else{
			return "error";

		}

		$stmt->close();

	}

	public function editAlumnoModel($datosModel, $tabla){


		$stmt = Conexion::conectar()->prepare("SELECT *, $tabla.nombre as alum, $tabla.matricula as matt FROM $tabla inner join carreras on $tabla.id_carrera = carreras.id_carrera inner join maestros on $tabla.id_tutor = maestros.id_maestro WHERE matricula = :matricula");
		$stmt->bindParam(":matricula", $datosModel, PDO::PARAM_INT);	
		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

	}

	public function updateAlumnoModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, id_tutor = :tutor, id_carrera = :id_carrera WHERE matricula = :matricula");

		$stmt->bindParam(":matricula", $datosModel["matricula"]);
		$stmt->bindParam(":nombre", $datosModel["nombre"]);
		$stmt->bindParam("id_carrera", $datosModel["id_carrera"]);
		$stmt->bindParam(":tutor", $datosModel["tutor"]);

		if($stmt->execute()){

			return "success";

		}else{

			return "error";

		}

		$stmt->close();

	}

	public function deleteAlumnoModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE matricula = :matricula");
		$stmt->bindParam(":matricula", $datosModel, PDO::PARAM_INT);

		echo $tabla;

		if($stmt->execute()){

			return "success";

		}else{

			return "error";

		}

		$stmt->close();

	}

	public function vistaCarrerasModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt->execute();

		$results = $stmt->fetchAll();

		return $results;


		$stmt->close();

	}

	public function agregarCarreraModel($datosModel, $tabla){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_carrera,nombre) VALUES (null,:nombre)");	

		$stmt->bindParam(":nombre", $datosModel["nombre"]);	


		if($stmt->execute()){

			return "success";

		}else{
			return "error";

		}

		$stmt->close();

	}

	public function editCarrerasModel($datosModel, $tabla){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_carrera = :id_carrera");
		$stmt->bindParam(":id_carrera", $datosModel, PDO::PARAM_INT);	
		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

	}

	public function updateCarrerasModel($datosModel, $tabla){


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre WHERE id_carrera = :id_carrera");

		$stmt->bindParam(":id_carrera", $datosModel["id_carrera"]);
		$stmt->bindParam(":nombre", $datosModel["nombre"]);

		if($stmt->execute()){

			return "success";

		}else{

			return "error";

		}

		$stmt->close();

	}

	public function deleteCarrerasModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_carrera = :id_carreras");
		$stmt->bindParam(":id_carreras", $datosModel, PDO::PARAM_INT);

		echo $tabla;

		if($stmt->execute()){

			return "success";

		}else{

			return "error";

		}

		$stmt->close();

	}







}



?>
