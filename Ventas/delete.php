<?php
#conexion con archivo para el html
include_once('utilities.php');
//conexión con las funciones
include_once('db/database_utilities.php');


//Se pasa el siguiente parametro ($id) junto con el tipo de cual es si futbolista o basquetbolista por la URL en index.php para ejecutar la eliminación:
$id = isset( $_GET['id'] ) ? $_GET['id'] : '';
$tipo = isset( $_GET['tipo'] ) ? $_GET['tipo'] :'';
//función de eliminación en database_utilities.php

delete( $id,$tipo);