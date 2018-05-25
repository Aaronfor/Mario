<?php
	#se crea una clase la cual ara la conexion con la la base de datos 
	class Conexion{
		public function conectar(){
			#se utiliza el meetodo pdo los cuales se le envian los parametros de host, nombre base de datos, el usuarios de la BD y la contraseña de la BD.
			$pdo = new PDO("mysql:host=localhost;dbname=controlaron","root","");
			return $pdo;
		}
	}


?>