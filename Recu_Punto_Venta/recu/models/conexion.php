<?php
#se crea una clase la cual hara la conexion con la base de datos
class Conexion{
	public static function conectar(){
		//Realiza la conexion con la base de datos
    	date_default_timezone_set('America/Mexico_City');#ajustar la hora del servidor 

		#$link = new PDO("mysql:host=localhost;dbname=mydb","root","root", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));

		$link = new PDO('mysql:host=localhost;dbname=mydb;port=3307','root','usbw', 
			array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
		
		return $link;
	}
}

?>
