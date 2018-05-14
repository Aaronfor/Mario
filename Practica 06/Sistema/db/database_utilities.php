<?php
//Funcionalidad para la bd
require_once('database_credentials.php');


//MOSTRAR LISTADO EN INDEX.PHP - ejecutar una petición a la bd
function run_query($num){
	//tome las variables globales
	global $pdo;
	#se aran las peticiones para cada tabla dependiendo de $num con todos los registros
	if ($num==1) {#usuarios
		$stmt=$pdo->prepare('SELECT * FROM user');
	}elseif ($num==2) {#logeos
		$stmt=$pdo->prepare('SELECT * FROM user_log');
	}elseif ($num==3) {#tipos
		$stmt=$pdo->prepare('SELECT * FROM user_type');
	}elseif ($num==4) {#status
		$stmt=$pdo->prepare('SELECT * FROM status');
	}
	#se enviaran los datos al index
	return $stmt;

}
#funcion que ara el conteo de cada tabla dependiendo de $num 
function countt( $num){
	global $pdo;
	if ($num==1) {#en caso de usuarios
		$stmt=$pdo->prepare('SELECT count(*) as total_user FROM user');
		$stmt->execute();#una vez se ejecuta
		$res=$stmt->fetchAll();#obtiene todo las filas
		$total=$res[0]['total_user'];#los resultados los asigna a una variable
	}elseif ($num==2) {
		$stmt=$pdo->prepare('SELECT count(*) as total_type FROM user_type');
		$stmt->execute();#una vez se ejecuta
		$res=$stmt->fetchAll();#obtiene todo las filas
		$total=$res[0]['total_type'];#los resultados los asigna a una variable
	}elseif ($num==3) {
		$stmt=$pdo->prepare('SELECT count(*) as total_sta FROM status');
		$stmt->execute();#una vez se ejecuta
		$res=$stmt->fetchAll();#obtiene todo las filas
		$total=$res[0]['total_sta'];#los resultados los asigna a una variable
	}elseif ($num==4) {
		$stmt=$pdo->prepare('SELECT count(*) as total_log FROM user_log');
		$stmt->execute();#una vez se ejecuta
		$res=$stmt->fetchAll();#obtiene todo las filas
		$total=$res[0]['total_log'];#los resultados los asigna a una variable
	}elseif ($num==5) {
		$stmt=$pdo->prepare('SELECT count(*) as total_act FROM user WHERE status_id=1');
		$stmt->execute();#una vez se ejecuta
		$res=$stmt->fetchAll();#obtiene todo las filas
		$total=$res[0]['total_act'];#los resultados los asigna a una variable
	}
	elseif ($num==6) {
		$stmt=$pdo->prepare('SELECT count(*) as total_ina FROM user WHERE status_id=2');
		$stmt->execute();#una vez se ejecuta
		$res=$stmt->fetchAll();#obtiene todo las filas
		$total=$res[0]['total_ina'];#los resultados los asigna a una variable
	}
	return $total;
	#se envia el total de cada tabla
}
