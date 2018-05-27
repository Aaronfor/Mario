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

	public function ingresoUsuarioController(){
        if(isset($_POST["email"])){
			$datosController = array( "correo"=>$_POST["email"], 
								      "password"=>$_POST["password"]);
			$respuesta = Datos::ingresoUsuarioModel($datosController, "maestros");

			if($respuesta["email"] == $_POST["email"] && $respuesta["password"] == $_POST["password"]){
				session_start();
				$_SESSION["validar"] = true;
				header("location:index.php?action=maestros");
			}else{
				header("location:index.php?action=fallo");
			}
		}	
	}

	public function vistaMaestrosController(){

		$respuesta = Datos::vistaMaestrosModel("maestros");

		foreach($respuesta as $row => $item){
		echo'<tr>
				<td>'.$item["id_maestro"].'</td>
				<td>'.$item["nombre"].'</td>
				<td>'.$item["name"].'</td>
				<td>'.$item["email"].'</td>
				<td><a href="index.php?action=edit_maestro&id='.$item["id_maestro"].'"><button class="button" >Modificar</button></a></td>
				<td><a href="index.php?action=delete_maestro&id='.$item["id_maestro"].'"><button class="button">Eliminar</button></a></td>
			</tr>';

		}

	}

	public function CarrerasController(){

		$respuesta = Datos::selectCarrerasModel("carreras");

		foreach($respuesta as $row => $item){

		echo '<option value='.$item["id_carrera"].'>'.$item["nombre"].'</option>';

		}

	}

	public function agregarMaestrosController(){

		if(isset($_POST["agregar"])){
			
				$datosController = array( "id_maestro"=>$_POST["id_maestro"],
										  "carrera"=>$_POST["carrera"],
										  "nombre_ma"=>$_POST["nombre"],
										  "email"=>$_POST["email"],
										  "password"=>$_POST["password"]);
			
			$respuesta = Datos::agregarMaestroModel($datosController, "maestros");

			if($respuesta == "success"){

				header("location:index.php?action=maestros");

			}else{

				header("location:index.php?action=fallo");
			}

		}

	}

	public function editMaestroController(){

		$carrera_ma = Datos::selectCarrerasModel("carreras");

		$datosController = $_GET["id"];

		$respuesta = Datos::editMaestroModel($datosController, "maestros");

		echo'
		<form class="form-horizontal" role="form">
		<div class="form-group">
		<label class="col-md-2 control-label">Matricula</label>
		<div class="col-md-10">
		<input type="text" class="form-control" name="id_maestro" value="'.$respuesta["id_maestro"].'">
		</div>

		<div class="form-group">
		<label class="col-md-2 control-label">Nombre</label>
		<div class="col-md-10">
		<input type="text" class="form-control" name="name" value="'.$respuesta["name"].'">
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 control-label" for="example-email">Email</label>
		<div class="col-md-10">
		<input type="email"class="form-control"  name="email" value="'.$respuesta["email"].'">
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 control-label">Password</label>
		<div class="col-md-10">
		<input type="password" class="form-control" name="password" value="'.$respuesta["password"].'">
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 control-label">Carrera</label>
		<div class="col-md-10">
		<select name="carrera">';
		foreach($carrera_ma as $row => $item){

			if ($item["id_carrera"] == $respuesta["id_carrera"]) {
				echo '<option value='.$item["id_carrera"].' selected>'.$item["nombre"].'</option>';
			}else{
				echo '<option value='.$item["id_carrera"].'>'.$item["nombre"].'</option>';
			}
		}
		echo'</select>
		</div>
		</div>
		<div class="form-group">
		<div class="col-md-10">
		<button class="btn btn-lg btn-primary btn-block" value="Actualizar" name="Actualizar" type="submit">Agregar</button>
		</div>
		</div>
		</form>
		</div>';
	}

	public function updateMaestroController(){


		if(isset($_POST["Actualizar"])){

			$datosController = array( "id_maestro"=>$_POST["id_maestro"],
							          "id_carrera"=>$_POST["carrera"],
							      	  "name"=>$_POST["name"],
							      	  "email"=>$_POST["email"],
							      	  "password"=>$_POST["password"]);
			
			$respuesta = Datos::updateMaestroModel($datosController, "maestros");

			if($respuesta == "success"){

				header("location:index.php?action=maestros");

			}

			else{

				echo "error";

			}

		}
	
	}

	public function deleteMaestroController(){

		if(isset($_GET["id"])){

			$datosController = $_GET["id"];
			
			$respuesta = Datos::deleteMaestroModel($datosController, "maestros");

			if($respuesta == "success"){

				header("location:index.php?action=maestros");
			
			}

		}

	}

	public function vistaAlumnosController(){

		$respuesta = Datos::vistaAlumnosModel("alumno");

		foreach($respuesta as $row => $item){
		echo'<tr>
				<td>'.$item["mat"].'</td>
				<td>'.$item["alu"].'</td>
				<td>'.$item["carr"].'</td>
				<td>'.$item["mae"].'</td>
				<td><a href="index.php?action=edit_alumno&id='.$item["mat"].'"><button class="button" >Modificar</button></a></td>
				<td><a href="index.php?action=delete_alumno&id='.$item["mat"].'"><button class="button" >Eliminar</button></a></td>
			</tr>';

		}

	}

	public function tutoresController(){

		$respuesta = Datos::selectTutoresModel("maestros");

		foreach($respuesta as $row => $item){

		echo '<option value='.$item["id_maestro"].'>'.$item["name"].'</option>';

		}

	}

	public function agregarAlumnoController(){
		if(isset($_POST["agregar"])){
				$datosController = array( "matricula"=>$_POST["matricula"],
										  "carrera"=>$_POST["carrera"],
										  "nombre"=>$_POST["nombre"],
										  "tutor"=>$_POST["tutor"]);

			
			$respuesta = Datos::agregarAlumnoModel($datosController, "alumno");

			if($respuesta == "success"){

				header("location:index.php?action=alumnos");

				}else{

				header("location:index.php?action=fallo");
			}

		}

	}

	public function editAlumnoController(){

		$carrera_ma = Datos::selectCarrerasModel("carreras");

		$tutoresS = Datos::selectTutoresModel("maestros");

		$datosController = $_GET["id"];

		$respuesta = Datos::editAlumnoModel($datosController, "alumno");

		echo'
		<form class="form-horizontal" role="form">
		<div class="form-group">
		<label class="col-md-2 control-label">Matricula</label>
		<div class="col-md-10">
		<input type="text" class="form-control" name="matricula" value="'.$respuesta["matt"].'">
		</div>

		<div class="form-group">
		<label class="col-md-2 control-label">Nombre</label>
		<div class="col-md-10">
		<input type="text" class="form-control" name="nombre" value="'.$respuesta["alum"].'">
		</div>
		</div>
		
		<div class="form-group">
		<label class="col-md-2 control-label">Carrera</label>
		<div class="col-md-10">
		<select name="carrera">';
		foreach($carrera_ma as $row => $item){

			if ($item["id_carrera"] == $respuesta["id_carrera"]) {
				echo '<option value='.$item["id_carrera"].' selected>'.$item["nombre"].'</option>';
			}else{
				echo '<option value='.$item["id_carrera"].'>'.$item["nombre"].'</option>';
			}
		}
		echo'</select>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 control-label">Tutor</label>
		<div class="col-md-10">
		<select name="tutor">';
		foreach($tutoresS as $row => $item){

			if ($item["id_maestro"] == $respuesta["id_maestro"]) {
				echo '<option value='.$item["id_maestro"].' selected>'.$item["name"].'</option>';
			}else{
				echo '<option value='.$item["id_maestro"].'>'.$item["name"].'</option>';
			}
		}
		echo'</select>
		</div>
		</div>
		<div class="form-group">
		<div class="col-md-10">
		<button class="btn btn-lg btn-primary btn-block" value="Actualizar" name="Actualizar" type="submit">Actualizar</button>
		</div>
		</div>
		</form>
		</div>';
	}

	public function updateAlumnoController(){


		if(isset($_POST["Actualizar"])){

			$datosController = array( "matricula"=>$_POST["matricula"],
							          "id_carrera"=>$_POST["carrera"],
							      	  "nombre"=>$_POST["nombre"],
							      	  "tutor"=>$_POST["tutor"]);

			
			$respuesta = Datos::updateAlumnoModel($datosController, "alumno");

			if($respuesta == "success"){

				header("location:index.php?action=alumnos");

			}else{

				echo "error";

			}

		}
	
	}

	public function deleteAlumnoController(){

		if(isset($_GET["id"])){

			$datosController = $_GET["id"];
			
			$respuesta = Datos::deleteAlumnoModel($datosController, "alumno");

			if($respuesta == "success"){

				header("location:index.php?action=alumnos");
			
			}

		}

	}

	public function vistaCarrerasController(){

		$respuesta = Datos::vistaCarrerasModel("carreras");

		foreach($respuesta as $row => $item){
		echo'<tr>
				<td>'.$item["id_carrera"].'</td>
				<td>'.$item["nombre"].'</td>
				<td><a href="index.php?action=edit_carrera&id='.$item["id_carrera"].'"><button class="button" >Modificar</button></a></td>
				<td><a href="index.php?action=delete_carrera&id='.$item["id_carrera"].'"><button class="button" >Eliminar</button></a></td>
			</tr>';

		}

	}

	public function agregarCarreraController(){
		if(isset($_POST["agregar"])){
				$datosController = array( "nombre"=>$_POST["nombre"]);

			
			$respuesta = Datos::agregarCarreraModel($datosController, "carreras");

			if($respuesta == "success"){

				header("location:index.php?action=carreras");

				}else{

				header("location:index.php?action=fallo");
			}

		}

	}

	public function editCarrerasController(){

		$datosController = $_GET["id"];

		$respuesta = Datos::editCarrerasModel($datosController, "carreras");

		echo'
		<form class="form-horizontal" role="form">
		<div class="form-group">
		<label class="col-md-2 control-label">ID</label>
		<div class="col-md-10">
		<input type="text" class="form-control" name="id_carrera" value="'.$respuesta["id_carrera"].'">
		</div>

		<div class="form-group">
		<label class="col-md-2 control-label">Nombre</label>
		<div class="col-md-10">
		<input type="text" class="form-control" name="nombre" value="'.$respuesta["nombre"].'">
		</div>

		
		<div class="form-group">
		<div class="col-md-10">
		<button class="btn btn-lg btn-primary btn-block" value="Actualizar" name="Actualizar" type="submit">Agregar</button>
		</div>
		</div>
		</form>
		</div>';
	}

	public function deleteCarrerasController(){

		if(isset($_GET["id"])){

			$datosController = $_GET["id"];
			
			$respuesta = Datos::deleteCarrerasModel($datosController, "carreras");

			if($respuesta == "success"){

				header("location:index.php?action=carreras");
			
			}

		}

	}




}

?>
