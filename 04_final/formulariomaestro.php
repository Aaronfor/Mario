<?php 
#son captados los datos que fueron enviados por 
#maestro.php con el metodo post y son asignados a diferentes variables
	$empleado=filter_input(INPUT_POST,'empleado');
	$nombre=filter_input(INPUT_POST,'nombre');
	$carrera=filter_input(INPUT_POST,'carrera');
	$tel=filter_input(INPUT_POST,'tel');

#se evalua si hay un archivo anteriormente creado y no no se crea un archivo nuevo
	if(is_file("maestro.txt")){
		$cadena ="\n$empleado|$nombre|$carrera|$tel";//si ya existe uno
	}else{
		$cadena ="$empleado|$nombre|$carrera|$tel";// se crea por primera vez o si no existe
	}
	//cada registro sera una nueva linea

	#se abre el archivo o lo crea
    $archivo=fopen("maestro.txt","a+");
    #se escribe en el archivo txt
    fwrite($archivo, $cadena);
    #se cierra el archivo
    fclose($archivo);

    #despues de la creacion se envia a la lista de registros
     header("Location: maestrolista.php");
?>