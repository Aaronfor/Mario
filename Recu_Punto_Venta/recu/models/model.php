<?php
#agregamos el archivo donde tenemos la conexion a la base de datos
require_once "conexion.php";
class Datos{

  #funcion la cual sera llamada para mostrar los datos de una tabla de la base de datos
  public static function VerTablas($tabla){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
    $stmt->execute();
    #fetchAll(): Obtiene todas las filas de un conjunto de resultados
    return $stmt->fetchAll();
    $stmt->close();
  }

  #funcion que agrega los datos del formulario de nuevo cliente
  public static function registroClientes($datosModel){
      //prepara la conexion a la base de datos y prepara la entencia SQL
    $stmt = Conexion::conectar()->PREPARE("INSERT INTO clientes (clave, correo, representante, nombre, rfc, curp, telefono, celular, comentario, cp, domicilio)
     VALUES (:clave, :correo, :representante, :nombre, :rfc, :curp, :telefono, :celular, :comentario, :cp, :domicilio)");
    #los datos obtenidos del formulario estan en el array el cual cada datos se asignara 
    $stmt->bindParam(":clave", $datosModel["clave"], PDO::PARAM_STR);
    $stmt->bindParam(":correo", $datosModel["correo"], PDO::PARAM_STR);
    $stmt->bindParam(":representante", $datosModel["representante"], PDO::PARAM_INT);
    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_INT);
    $stmt->bindParam(":rfc", $datosModel["rfc"], PDO::PARAM_INT);
    $stmt->bindParam(":curp", $datosModel["curp"], PDO::PARAM_INT);
    $stmt->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_INT);
    $stmt->bindParam(":celular", $datosModel["celular"], PDO::PARAM_INT);
    $stmt->bindParam(":comentario", $datosModel["comentario"], PDO::PARAM_INT);
    $stmt->bindParam(":cp", $datosModel["cp"], PDO::PARAM_INT);
    $stmt->bindParam(":domicilio", $datosModel["domicilio"], PDO::PARAM_INT);

    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    $stmt->close();
  }

  #funcion la cual sera llamada para mostrar los datos de una tabla de la base de datos
  public static function VerDatosEspecific($datosModel,$tabla){
    #dependiendo de la tabla es el id que seleccionara
    switch ($tabla) {
      case "clientes":
        $id="id_cliente";
        break;
      case "articulos":
        $id="id_articulo";
        break;
      case "categorias":
        $id="id_categoria";
        break;
      case "departamentos":
        $id="id_departamento";
        break;
      case "unidad_compra":
        $id="id_unidad";
        break;
      case "inventario":
        $id="id";
        break;
    }
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $id=:id");

    $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_STR);
    $stmt->execute();
    #fetchAll(): Obtiene todas las filas de un conjunto de resultados
    return $stmt->fetch();
    $stmt->close();
  }

  #funcion que actualizara al cliente con dicha id
  public static function editarCliente($datosModel,$id){
    $stmt = Conexion::conectar()->prepare("UPDATE clientes set clave =:clave, correo=:correo, representante=:representante, nombre =:nombre,rfc =:rfc, curp =:curp,telefono =:telefono, celular =:celular, comentario =:comentario, cp =:cp, domicilio =:domicilio WHERE id_cliente=$id");
    #los datos obtenidos del formulario estan en el array el cual cada datos se asignara 
    $stmt->bindParam(":clave", $datosModel["clave"], PDO::PARAM_STR);
    $stmt->bindParam(":correo", $datosModel["correo"], PDO::PARAM_STR);
    $stmt->bindParam(":representante", $datosModel["representante"], PDO::PARAM_INT);
    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_INT);
    $stmt->bindParam(":rfc", $datosModel["rfc"], PDO::PARAM_INT);
    $stmt->bindParam(":curp", $datosModel["curp"], PDO::PARAM_INT);
    $stmt->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_INT);
    $stmt->bindParam(":celular", $datosModel["celular"], PDO::PARAM_INT);
    $stmt->bindParam(":comentario", $datosModel["comentario"], PDO::PARAM_INT);
    $stmt->bindParam(":cp", $datosModel["cp"], PDO::PARAM_INT);
    $stmt->bindParam(":domicilio", $datosModel["domicilio"], PDO::PARAM_INT);

    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    $stmt->close();
    
  }

  #funcion que elimina registro con id dada y de dicha tabla
  public static function borrarDatosID($datosModel, $tabla){
    #dependiendo de la tabla es el id que seleccionara
    switch ($tabla) {
      case "clientes":
        $id="id_cliente";
        break;
      case "articulos":
        $id="id_articulo";
        break;
    }
    #se elimina el registro con dicha id y con la tabla enviada
    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE $id = :id");
    $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);
    if($stmt->execute()){
      return "success";
    }else{
      return "error";
    }
    $stmt->close();
  }

  #obtiene los datos de dicha tabla
  public static function tablaModel($tabla){
    #se hace la consulta
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
    $stmt->execute();
    #se envian los datos
    return $stmt->fetchAll();
    $stmt->close();
  }

  #funcion que agrega los datos del formulario de nuevo cliente
  public static function registroArticulos($datosModel){
      //prepara la conexion a la base de datos y prepara la entencia SQL
    $stmt = Conexion::conectar()->PREPARE("INSERT INTO articulos (clave, nombre, descripcion, precio, id_categoria, id_departamento, id_unidad)
     VALUES (:clave, :nombre, :descripcion, :precio, :id_categoria, :id_departamento, :id_unidad)");
    #los datos obtenidos del formulario estan en el array el cual cada datos se asignara 
    $stmt->bindParam(":clave", $datosModel["clave"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
    $stmt->bindParam(":precio", $datosModel["precio"], PDO::PARAM_INT);
    $stmt->bindParam(":id_categoria", $datosModel["categoria"], PDO::PARAM_INT);
    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_INT);
    $stmt->bindParam(":id_departamento", $datosModel["departamento"], PDO::PARAM_INT);
    $stmt->bindParam(":id_unidad", $datosModel["unidad_compra"], PDO::PARAM_INT);

    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    $stmt->close();
  }

  #funcion que actualizara al cliente con dicha id
  public static function editarArticulo($datosModel,$id){
    $stmt = Conexion::conectar()->prepare("UPDATE articulos set clave =:clave, id_categoria=:categoria, nombre=:nombre, precio =:precio, id_departamento =:departamento, id_unidad =:unidad_compra,descripcion =:descripcion WHERE id_articulo=$id");
    #los datos obtenidos del formulario estan en el array el cual cada datos se asignara 
    $stmt->bindParam(":clave", $datosModel["clave"], PDO::PARAM_STR);
    $stmt->bindParam(":categoria", $datosModel["categoria"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_INT);
    $stmt->bindParam(":precio", $datosModel["precio"], PDO::PARAM_INT);
    $stmt->bindParam(":departamento", $datosModel["departamento"], PDO::PARAM_INT);
    $stmt->bindParam(":unidad_compra", $datosModel["unidad_compra"], PDO::PARAM_INT);
    $stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_INT);

    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    $stmt->close();
    
  }

    #funcion que agrega los datos del formulario de nuevo cliente
  public static function registroInventario($datosModel){
      //prepara la conexion a la base de datos y prepara la entencia SQL
    $stmt = Conexion::conectar()->PREPARE("INSERT INTO inventario (actual, nueva , id_articulo)
     VALUES (:inicio, :inicio, :articulo)");
    #los datos obtenidos del formulario estan en el array el cual cada datos se asignara 
    $stmt->bindParam(":articulo", $datosModel["articulo"], PDO::PARAM_STR);
    $stmt->bindParam(":inicio", $datosModel["inicio"], PDO::PARAM_STR);

    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    $stmt->close();
  }

    #funcion que actualizara al cliente con dicha id
  public static function editarInventario($datosModel){
    $sum=$datosModel["nueva"]-$datosModel["actual"];
    $stmt = Conexion::conectar()->prepare("UPDATE inventario set nueva =:nueva, diferencia=$sum WHERE id=:id");
    #los datos obtenidos del formulario estan en el array el cual cada datos se asignara 
    $stmt->bindParam(":nueva", $datosModel["nueva"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_STR);

    

    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    $stmt->close();
    
  }























    
  public function VerTablaDatos($tabla,$datosModel){
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla
                                            WHERE id = :id");
      $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_STR);
      $stmt->execute();
      #fetch(): Obtiene una fila de un conjunto de resultados asociado
      # al objeto PDOStatement.
      return $stmt->fetch();
      $stmt->close();

	   }
  //-------------------------------

   public function VerDatosTempo($tabla,$datosModel){
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla
                                            WHERE matricula = :matricula");
      $stmt->bindParam(":matricula", $datosModel["matricula"], PDO::PARAM_STR);
      $stmt->execute();
      #fetch(): Obtiene una fila de un conjunto de resultados asociado
      # al objeto PDOStatement.
      return $stmt->fetch();
      $stmt->close();

	   }
  //----------------------
  public function borrarDatosModel($datosModel, $tabla){
    /**Hace un delete a la registro de la tabla que se envia a travez de
    los parametros, asi tambien el id que se va elimiar se envia a  traves de los
    parametros**/
    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
    $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);
    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    $stmt->close();
  }

  #REGISTROS
  #-------------------------------------
	public function registroMaestros($datosModel, $tabla){
		//prepara la conexion a la base de datos y prepara ls entencia SQL
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id, nombre, apellido, tipo, password, status)
		 VALUES (:id,:nombre,:apellido, :tipo, :password,:status)");
		//Inserta los valores del array en las varaibles que se utlizan para hacer la inserccion y se ejecuta la
		$stmt->bindParam(":apellido", $datosModel["apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo", $datosModel["tipo"], PDO::PARAM_INT);
		$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
		$stmt->bindParam(":status", $datosModel["status"], PDO::PARAM_INT);
		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
	}
  
  public function registroGrupos($datosModel, $tabla){
      //prepara la conexion a la base de datos y prepara ls entencia SQL
      $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id, nombre, nivel, maestro)
       VALUES (:id,:nombre,:nivel, :maestro)");
      //Inserta los valores del array en las varaibles que se utlizan para hacer la inserccion y se ejecuta la
      $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
      $stmt->bindParam(":nivel", $datosModel["nivel"], PDO::PARAM_INT);
      $stmt->bindParam(":maestro", $datosModel["maestro"], PDO::PARAM_INT);
      $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
      if($stmt->execute()){
        return "success";
      }
      else{
        return "error";
      }
      $stmt->close();
  }
  
  public function editarDatos($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

	}
  public function editarDatos2($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);	
		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

	}
  public function registroVistasTemp($datosModel, $tabla){
      //prepara la conexion a la base de datos y prepara ls entencia SQL
      $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id, matricula, actividad, fecha)
       VALUES (:id,:matricula,:actividad, :fecha)");
      //Inserta los valores del array en las varaibles que se utlizan para hacer la inserccion y se ejecuta la
      $stmt->bindParam(":matricula", $datosModel["matricula"], PDO::PARAM_INT);
      $stmt->bindParam(":actividad", $datosModel["actividad"], PDO::PARAM_STR);
      $stmt->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
      $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
      echo $datosModel["id"];
      if($stmt->execute()){
        return "success";
      }
      else{
        return "error";
      }
      $stmt->close();
  }
 public function updateGrupos($datos){
//   echo "<script>alert(".$datos["id"].");</script>";
    $stmt = Conexion::conectar()->prepare("UPDATE grupos set nombre =:nombre, nivel=:nivel, maestro=:maestro WHERE id=:id");
    $stmt->bindParam(':id',$datos['id'], PDO::PARAM_INT);
    $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
    $stmt->bindParam(':nivel',$datos['nivel'], PDO::PARAM_INT);
    $stmt->bindParam(':maestro',$datos['maestro'], PDO::PARAM_STR);
    if($stmt->execute()){
        return "success";
      }
      else{
        return "error";
      }
      $stmt->close();
    
  }
  
  public function updateAlumnos($datos){
    //echo "<script>alert(".$datos["grupo"].");</script>";   
    $stmt = Conexion::conectar()->prepare("UPDATE alumnos set nombre =:nombre, apellido=:apellido, grupo=:grupo, carrera=:carrera, status=1 WHERE matricula = :matricula");
    $stmt->bindParam(':nombre',$datos['nombre'],PDO::PARAM_STR);
    $stmt->bindParam(':apellido',$datos['apellido'],PDO::PARAM_STR);
    $stmt->bindParam(':grupo',$datos['grupo'],PDO::PARAM_INT);
    $stmt->bindParam(':carrera',$datos['carrera'],PDO::PARAM_INT);
   // $stmt->bindParam(':status',$datos['status'],PDO::PARAM_INT);
    $stmt->bindParam(':matricula',$datos['matricula'],PDO::PARAM_INT);
    if($stmt->execute()){
        return "success";
      }
      else{
        return "error";
        echo "<script>alert(error);</script>";   
      }
      $stmt->close();
  
  }
  
  public function updateMaestros($datos){
    
    $stmt = Conexion::conectar()->prepare("UPDATE maestros set nombre=:nombre, apellido=:apellido,tipo=:tipo, password=:password, status=1 WHERE id=:id");
    echo "<script>alert(".$datos["nombre"].");</script>"; 
    $stmt->bindParam(':nombre',$datos['nombre'],PDO::PARAM_STR);
    $stmt->bindParam(':apellido',$datos['apellido'],PDO::PARAM_STR);
    $stmt->bindParam(':tipo',$datos['tipo'],PDO::PARAM_INT);
    $stmt->bindParam(':password',$datos['password'],PDO::PARAM_STR);
   // $stmt->bindParam(':status',$datos['status'],PDO::PARAM_INT);
    $stmt->bindParam(':id',$datos['id'],PDO::PARAM_STR);
    if($stmt->execute()){
        return "success";
      }
      else{
        return "error";
      }
      $stmt->close();
  
  }
}
  



  







?>
