<?php
#inicializamos las bariables con el host, la base de datos, el usuario del servidor y la contraseña
$host='localhost';
$dbname='sistema';
$user='root';
$pass='';
#se hace una asignacion con algunos datos 
$dsn="mysql:dbname={$dbname};host={$host}";

try{
	#se juntan todos los datos para una consulta pdo
	$pdo = new PDO(	
		$dsn, 
		$user, 
		$pass
);
#en caso de tener algun error
}catch( PDOException $e ){

echo 'Error al conectarnos: ' . $e->getMessage();

}


?>