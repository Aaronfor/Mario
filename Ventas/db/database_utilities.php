<?php
//Funcionalidad para la bd
require_once('database_credentials.php');

#retorna todos los usuarios dependiendo de su tipo
function run_query($num){
	global $pdo;
	if ($num==1) {
		#en caso de ser futbolista
		$stmt=$pdo->prepare('SELECT * FROM producto');
	}elseif ($num==2) {
		#en caso de ser basquetbolista
		$stmt=$pdo->prepare('SELECT * FROM jugadores WHERE tipo=2');
	}
	#se envia todos los usuarios de ese tipo a el sistema definido
	return $stmt;

}

//functión que se implmenta en el archivo new_user.php o newuer.php
function addproducto( $name, $precio)
{
	global $pdo;
	#se ejecuta la sentencia
		$stmt=$pdo->prepare("INSERT INTO producto (id, nombre, precio) VALUES (null, '{$name}','{$precio}' )");
		$stmt->execute();

}

function folio()
{
	global $pdo;
	#se ejecuta la sentencia
		$stmt=$pdo->prepare('SELECT count(*) as total_ventas FROM venta');
		$stmt->execute();#una vez se ejecuta
		$res=$stmt->fetchAll();#obtiene todo las filas
		$total=$res[0]['total_ventas'];#los resultados los asigna a una variable
		
		return $total;
}



function addventa( $name, $precio)
{
	global $pdo;
	#se ejecuta la sentencia
		$stmt=$pdo->prepare("INSERT INTO venta (id, nombre, precio) VALUES (null, '{$name}','{$precio}' )");
		$stmt->execute();

}


//función a utilizar en el archivo delete.php
function delete( $id, $tipo)
{
	global $pdo;
	//funcionalidad para eliminar
	$sql = "DELETE FROM jugadores WHERE id = {$id}";
	//ejecutamos la funcionalidad de eliminación
	$stmt=$pdo->prepare($sql);
	$stmt->execute();
	#dependiendo del tipo a donde se redirigiran
	if ($tipo==1) {
		#en caso de ser futbolistas
		header('Location: sistema_fut.php');
	}else{
		#en caso de ser basquetbolistas
		header('Location: sistema_bas.php');
	}
	
}

//PARA MODIFICAR hay que obtener el usuario por id
function get_user_by_id( $id )
{
	global $pdo;
	#se asigna el estring el cual tiene la consulta
	$sql = "SELECT * FROM jugadores WHERE id = {$id}";
	//ejecutamos la consulta
	$stmt=$pdo->prepare($sql);
	#se ejecuta la consulta deseada 
	$stmt->execute();
	#se regresa una fila con todos los datos del jugador con ese id
	return $stmt->fetch(PDO::FETCH_ASSOC);

}

//funcion para editar registros
function update( $id, $name,$posicion,$carrera,$email,$num )
{
	global $pdo;
	#se asigna el estring el cual tiene la consulta
	$sql = "UPDATE jugadores SET nombre = '{$name}', posicion = '{$posicion}', carrera = '{$carrera}',email ='{$email}' WHERE id = {$id} and tipo={$num} ";
	//ejecutamos la consulta
	$stmt=$pdo->prepare($sql);
	#se ejecuta la consulta deseada 
	$stmt->execute();
}
