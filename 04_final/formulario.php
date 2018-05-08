<?php 
#son captados los datos que fueron enviados por 
#alumno.php con el metodo post y son asignados a diferentes variables
	$matricula=filter_input(INPUT_POST,'matricula');
	$nombre=filter_input(INPUT_POST,'nombre');
	$carrera=filter_input(INPUT_POST,'carrera');
	$email=filter_input(INPUT_POST,'email');
	$tel=filter_input(INPUT_POST,'tel');

#se evalua si hay un archivo anteriormente creado y no no se crea un archivo nuevo
	if(is_file("alumnos.txt")){
		#se guardan todos los datos en una cadena
		$cadena ="\n$matricula|$nombre|$carrera|$email|$tel";//si ya existe uno
	}else{
		$cadena ="$matricula|$nombre|$carrera|$email|$tel";// se crea por primera vez o si no existe
	}
	//cada registro sera una nueva linea

	#se abre el archivo o lo crea
    $archivo=fopen("alumnos.txt","a+");
    #se escribe en el archivo txt
    fwrite($archivo, $cadena);
    #se cierra el archivo
    fclose($archivo);


	#despues de la creacion se envia a la lista de registros
    header("Location: alumnolista.php");
?>