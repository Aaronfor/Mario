<?php
Class Controller{
  #LLAMADA A LA PLANTILLA
	#-------------------------------------
	public function pagina(){
    include "views/template.php";
  }

  #ENLACES
  #-------------------------------------
  public function enlacesPaginas(){
    //valida si hay un action
  	if(isset( $_GET['action'])){
     $enlaces = $_GET['action'];
   }
    //En caso de no haber un action se re-direcciona al index
   else{
     $enlaces = "index";
   }
    //manda a llamar al modelo que enlaza las Paginas
   $respuesta = Paginas::enlacesPaginasModel($enlaces);
   include $respuesta;
 }

  #-------------------------------------
  public function VistaCliente(){
    #llama a la funcion la cual traera todos los datos de la tabla de los clientes
  $respuesta = Datos::VerTablas("clientes");
    #usamos un ciclo para imprimir todos los registros de la tabla de clientes
    foreach($respuesta as $row => $item){
      echo '
      <td>'.$item["clave"].'</td>
      <td>'.$item["nombre"].'</td>
      <td>'.$item["telefono"].'</td>
      <td>'.$item["representante"].'</td>
      <td>'.$item["correo"].'</td>
      <td style="text-align: center;"><a href="index.php?action=datos_clientes&id='.$item["id_cliente"].'">
      <button class="btn btn-icon btn-primary"> <i class="mdi mdi-magnify-plus"></i> </button></a></td>
      <td style="text-align: center;"><a href="index.php?action=clientes&id_borrar='.$item["id_cliente"].'">
      <button class="btn btn-icon btn-danger"> <i class="fa fa-remove"></i> </button></a></td>';
      echo '</tr>';

    }
  }

  #funcion que obtendra los datos del formulario de nuevo cliente, dependiendo de num es la accion que realizara
  public function registroClienteController($num,$id){
    if(isset($_POST["nombre"])){#verifica que exista la variable
      #los datos enviados por el formulario se hicieron con el metodo post y son insertados en un array
      $datosController = array( "clave"=>$_POST["clave"],
       "correo"=>$_POST["correo"],
       "nombre"=>$_POST["nombre"],
       "representante"=>$_POST["representante"],
       "rfc"=>$_POST["rfc"],
       "curp"=>$_POST["curp"],
       "telefono"=>$_POST["telefono"],
       "celular"=>$_POST["celular"],
       "domicilio"=>$_POST["domicilio"],
       "cp"=>$_POST["cp"],
       "comentario"=>$_POST["comentario"]);
      #se manda a llamar la funcion la cual registrara al nuevo cliente
      if($num==1){
        $respuesta = Datos::registroClientes($datosController);
      }elseif ($num==2) {#en caso de ya existir cliente lo que hara sera editar los datos del cliente
        $respuesta = Datos::editarCliente($datosController,$id);
      }
      //se imprime la respuesta en la vista
      if($respuesta == "success"){
        echo "<script>location.href='index.php?action=clientes';</script>";
      }else{
        echo "<script>location.href='index.php;</script>";
      }
    }
  }

  #funcion que muestra los datos del cliente
  public static function obtenerDatosCliente($id,$valor){
    $datosController = array("id"=>$id);
    #llama a la funcion la cual traera todos los datos de la tabla de los clientes
    $res = Datos::VerDatosEspecific($datosController,"clientes");
    if($valor==1){#el valor 1 significa que no esta en modo edicion asi que se le da la opcion de si desea editar
      echo '
      <a href="index.php?action=datos_clientes&id_edit='.$res["id_cliente"].'">
      <button class="btn btn-icon btn-warning"> <i class="mdi mdi-table-edit">  Editar </i> </button></a>';
    }
    #inicio del formulario en donde si tiene el valor 1 no podra editar y de lo contrario podra editar
    echo '
    <form class="form-horizontal" role="form" method="post">

    <div class="form-group">
    <label class="col-md-5 control-label">Clave:</label>
    <div class="col-md-3">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $res["clave"] . '">';
    }else{
      echo '<input type="text" name="clave" class="form-control" value="' . $res["clave"] . '">';
    }
    echo '
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">Representante:</label>
    <div class="col-md-4">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $res["representante"] . '">';
    }else{
      echo '<input type="text" name="representante" class="form-control" value="' . $res["representante"] . '">';
    }
    echo '
    </div>

    <label class="col-md-1 control-label">Nombre:</label>
    <div class="col-md-5">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $res["nombre"] . '">';
    }else{
      echo '<input type="text" name="nombre" class="form-control" value="' . $res["nombre"] . '">';
    }
    echo '
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">Correo:</label>
    <div class="col-md-4">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $res["correo"] . '">';
    }else{
      echo '<input type="text" name="correo" class="form-control" value="' . $res["correo"] . '">';
    }
    echo '
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">RFC:</label>
    <div class="col-md-4">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $res["rfc"] . '">';
    }else{
      echo '<input type="text" name="rfc" class="form-control" value="' . $res["rfc"] . '">';
    }
    echo '
    </div>

    <label class="col-md-1 control-label">CURP:</label>
    <div class="col-md-5">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $res["curp"] . '">';
    }else{
      echo '<input type="text" name="curp" class="form-control" value="' . $res["curp"] . '">';
    }
    echo '
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">Teléfono:</label>
    <div class="col-md-4">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $res["telefono"] . '">';
    }else{
      echo '<input type="text" name="telefono" class="form-control" value="' . $res["telefono"] . '">';
    }
    echo '
    </div>

    <label class="col-md-1 control-label">Celular:</label>
    <div class="col-md-5">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $res["celular"] . '">';
    }else{
      echo '<input type="text" name="celular" class="form-control" value="' . $res["celular"] . '">';
    }
    echo '
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">CP:</label>
    <div class="col-md-4">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $res["cp"] . '">';
    }else{
      echo '<input type="text" name="cp" class="form-control" value="' . $res["cp"] . '">';
    }
    echo '
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">Domicilio:</label>
    <div class="col-md-9">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $res["domicilio"] . '">';
    }else{
      echo '<input type="text" name="domicilio" class="form-control" value="' . $res["domicilio"] . '">';
    }
    echo '
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">Comentario:</label>
    <div class="col-md-9">';
    if($valor==1){
      echo '<textarea class="form-control" rows="8" readonly="" name="comentario">'.$res["comentario"].'</textarea>';
    }else{
      echo '<textarea class="form-control" name="comentario" rows="8" name="comentario">'.$res["comentario"].'</textarea>';
    }
    echo '
    </div>
    </div>';
    if($valor==2){#opcion de enviar o cancelar los cambios realizados al cliente
      echo '
      <input type="submit" class="btn btn-icon" name="cancelar" value="Cancelar">
      <input type="submit" class="btn btn-icon btn-success" name="submit" value="Registrar">';
    }else{#obcion de regresar por si no quiere editar
      echo '
      <input type="submit" class="btn btn-icon" name="regresar" value="Regresar">';
    }
    echo '
    </form>
    ';
  }

  #funcion la cual borrara un registro en tal id
  public function borrarID($num){
    if(isset($_GET["id_borrar"])){
      $datosController = $_GET["id_borrar"];
      #se selecciona que tabla buscara
      switch ($num) {
        case 1:
        $tabla="clientes";
        break;
        case 2:
        $tabla="articulos";
        break;
      }
      #se manda a llamar la funcion la cual eliminara el registro
      $respuesta = Datos::borrarDatosID($datosController, $tabla);
      //se imprime la respuesta en la vista
      if($respuesta == "success"){
        echo '<script>location.href="index.php?action='.$tabla.'";</script>';
      }else{
        echo "<script>location.href='index.php;</script>";
      }
    }
  }

  #funcion que cuenta el numero total para el dashboard
  public static function contarController($num){
    #se selecciona que tabla buscara
    switch ($num) {
      case 1:
        $tabla="clientes";
        break;
      case 2:
        $tabla="articulos";
        break;
      case 3:
        $tabla="pedidos";
        break;
      case 4:
        $tabla="ventas";
        break;
    }
    $respuesta = Datos::tablaModel($tabla);
    #teniendo los resultados si hay escribira el numero total

    echo count($respuesta);#trae las filas y las convierte a numero
  }

  #-------------------------------------
  public function VistaArticulo(){
    #llama a la funcion la cual traera todos los datos de la tabla de los articulos
  $respuesta = Datos::VerTablas("articulos");
    #usamos un ciclo para imprimir todos los registros de la tabla de articulos
    foreach($respuesta as $row => $item){
      echo '
      <td>'.$item["clave"].'</td>
      <td>'.$item["nombre"].'</td>
      <td>$'.$item["precio"].'</td>
      <td>'.$item["descripcion"].'</td>
      <td style="text-align: center;"><a href="index.php?action=datos_articulos&id='.$item["id_articulo"].'">
      <button class="btn btn-icon btn-primary"> <i class="mdi mdi-magnify-plus"></i> </button></a></td>
      <td style="text-align: center;"><a href="index.php?action=articulos&id_borrar='.$item["id_articulo"].'">
      <button class="btn btn-icon btn-danger"> <i class="fa fa-remove"></i> </button></a></td>';
      echo '</tr>';

    }
  }

  #funcion para ver los select
  public function selectController($tabla){
    $respuesta = Datos::VerTablas($tabla);
    foreach($respuesta as $row => $item) {
      if($tabla=="categorias"){#dependiendo de la tabla es el select que se mostrara
        echo '<option value='.$item["id_categoria"].'> '.$item["nombre"].' </option>';
      }elseif ($tabla=="departamentos") {
        echo '<option value='.$item["id_departamento"].'> '.$item["nombre"].' </option>';
      }elseif ($tabla=="unidad_compra") {
        echo '<option value='.$item["id_unidad"].'> '.$item["nombre"].' </option>';
      }elseif ($tabla=="articulos") {
        echo '<option value='.$item["id_articulo"].'> '.$item["nombre"].' </option>';
      }
    }
  }

  #funcion que obtendra los datos del formulario de nuevo articulo, dependiendo de num es la accion que realizara
  public function registroArticuloController($num,$id){
    if(isset($_POST["clave"])){#verifica que exista la variable
      #los datos enviados por el formulario se hicieron con el metodo post y son insertados en un array
      $datosController = array( "clave"=>$_POST["clave"],
       "categoria"=>$_POST["categoria"],
       "nombre"=>$_POST["nombre"],
       "precio"=>$_POST["precio"],
       "departamento"=>$_POST["departamento"],
       "unidad_compra"=>$_POST["unidad_compra"],
       "descripcion"=>$_POST["descripcion"]);
      #se manda a llamar la funcion la cual registrara al nuevo articulo
      if($num==1){
        $respuesta = Datos::registroArticulos($datosController);
      }elseif ($num==2) {#en caso de ya existir articulo lo que hara sera editar los datos del articulo
        $respuesta = Datos::editarArticulo($datosController,$id);
      }
      //se imprime la respuesta en la vista
      if($respuesta == "success"){
        echo "<script>location.href='index.php?action=articulos';</script>";
      }else{
        echo "<script>location.href='index.php;</script>";
      }
    }
  }

  #funcion que muestra los datos del articulo
  public static function obtenerDatosArticulo($id,$valor){
    $datosController = array("id"=>$id);
    #llama a la funcion la cual traera todos los datos de la tabla de los articulos
    $res = Datos::VerDatosEspecific($datosController,"articulos");
    #una vez traido los datos traemos todos los datos de las demas tablas para que no se vea el numero sino su valor
    $categoria = array ("id"=> $res["id_categoria"]);
    $categoria= Datos::VerDatosEspecific($categoria,"categorias");

    $departamento = array ("id"=> $res["id_departamento"]);
    $departamento= Datos::VerDatosEspecific($departamento,"departamentos");

    $unidad_compra = array ("id"=> $res["id_unidad"]);
    $unidad_compra= Datos::VerDatosEspecific($unidad_compra,"unidad_compra");

    if($valor==1){#el valor 1 significa que no esta en modo edicion asi que se le da la opcion de si desea editar
      echo '
      <a href="index.php?action=datos_articulos&id_edit='.$res["id_articulo"].'">
      <button class="btn btn-icon btn-warning"> <i class="mdi mdi-table-edit">  Editar </i> </button></a>';
    }
    #inicio del formulario en donde si tiene el valor 1 no podra editar y de lo contrario podra editar
    echo '
    <form class="form-horizontal" role="form" method="post">

    <div class="form-group">
    <label class="col-md-5 control-label">Clave:</label>
    <div class="col-md-3">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $res["clave"] . '">';
    }else{
      echo '<input type="text" name="clave" class="form-control" value="' . $res["clave"] . '">';
    }
    echo '
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">Nombre:</label>
    <div class="col-md-5">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $res["nombre"] . '">';
    }else{
      echo '<input type="text" name="nombre" class="form-control" value="' . $res["nombre"] . '">';
    }
    echo '
    </div>

    <label class="col-md-1 control-label">Precio:</label>
    <div class="col-md-3">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="$' . $res["precio"] . '">';
    }else{
      echo '<input type="text" name="precio" class="form-control" value="' . $res["precio"] . '">';
    }
    echo '
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">Categoría:</label>
    <div class="col-md-9">';
    #en caso de que sea 1 solo se vera su categoria y si es 2 podra seleccionar otra categoria
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $categoria["nombre"] . '">';
    }else{
      echo'
      <select class="form-control select2" name="categoria">';
      $respuestas = Datos::VerTablas("categorias");
      foreach($respuestas as $row => $item) {
        echo '<option value='.$item["id_categoria"].'> '.$item["nombre"].'</option>';
      }
    }
    echo '
    </select>
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">Departamento:</label>
    <div class="col-md-9">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $departamento["nombre"] . '">';
    }else{
      echo'
      <select class="form-control select2" name="departamento">';
      $respuestas = Datos::VerTablas("departamentos");
      foreach($respuestas as $row => $item) {
        echo '<option value='.$item["id_departamento"].'> '.$item["nombre"].'</option>';
      }
    }
    echo '
    </select>
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">Unidad de Compra:</label>
    <div class="col-md-9">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $unidad_compra["nombre"] . '">';
    }else{
      echo'
      <select class="form-control select2" name="unidad_compra">';
      $respuestas = Datos::VerTablas("unidad_compra");
      foreach($respuestas as $row => $item) {
        echo '<option value='.$item["id_unidad"].'> '.$item["nombre"].'</option>';
      }
    }
    echo '
    </select>
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">Descripción:</label>
    <div class="col-md-9">';
    if($valor==1){
      echo '<textarea class="form-control" rows="8" readonly="" name="comentario">'.$res["descripcion"].'</textarea>';
    }else{
      echo '<textarea class="form-control" name="descripcion" rows="8" name="comentario">'.$res["descripcion"].'</textarea>';
    }
    echo '
    </div>
    </div>';
    if($valor==2){#opcion de enviar o cancelar los cambios realizados al cliente
      echo '
      <input type="submit" class="btn btn-icon" name="cancelar" value="Cancelar">
      <input type="submit" class="btn btn-icon btn-success" name="submit" value="Registrar">';
    }else{#obcion de regresar por si no quiere editar
      echo '
      <input type="submit" class="btn btn-icon" name="regresar" value="Regresar">';
    }
    echo '
    </form>
    ';
  }

  #-------------------------------------
  public function VistaInventario(){
    #llama a la funcion la cual traera todos los datos de la tabla de Inventario
  $respuesta = Datos::VerTablas("inventario");
    #usamos un ciclo para imprimir todos los registros de la tabla de articulos
    foreach($respuesta as $row => $item){
      $datosController = array("id"=>$item["id_articulo"]);
      $res = Datos::VerDatosEspecific($datosController,"articulos");
      echo '
      <td>'.$res["clave"].'</td>
      <td>'.$res["nombre"].'</td>
      <td>'.$item["nueva"].'</td>
      <td>'.$item["actual"].'</td>
      <td>'.$item["diferencia"].'</td>
      <td style="text-align: center;"><a href="index.php?action=datos_inventario&id='.$item["id"].'">
      <button class="btn btn-icon btn-primary"> <i class="mdi mdi-magnify-plus"></i> </button></a></td>';
      echo '</tr>';

    }
  }

  #funcion que obtendra los datos del formulario de nuevo articulo, dependiendo de num es la accion que realizara
  public function updateInventarioController($num,$id){
    if(isset($_POST["inicio"])){#verifica que exista la variable
      #los datos enviados por el formulario se hicieron con el metodo post y son insertados en un array
      $datosController = array( "articulo"=>$_POST["articulo"],
       "inicio"=>$_POST["inicio"]);
      #se manda a llamar la funcion la cual registrara al nuevo articulo
        $respuesta = Datos::registroInventario($datosController);
      //se imprime la respuesta en la vista
      if($respuesta == "success"){
        echo "<script>location.href='index.php?action=inventario';</script>";
      }else{
        echo "<script>location.href='index.php;</script>";
      }
    }
  }


  #funcion que muestra los datos del articulo
  public static function obtenerDatosInventario($id,$valor){
    $datosController = array("id"=>$id);
    #llama a la funcion la cual traera todos los datos de la tabla de los articulos
    $res = Datos::VerDatosEspecific($datosController,"inventario");
    #una vez traido los datos traemos todos los datos de las demas tablas para que no se vea el numero sino su valor
    $arti = array ("id"=> $res["id_articulo"]);
    $arti= Datos::VerDatosEspecific($arti,"articulos");

    if($valor==1){#el valor 1 significa que no esta en modo edicion asi que se le da la opcion de si desea editar
      echo '
      <a href="index.php?action=datos_inventario&id_edit='.$res["id"].'">
      <button class="btn btn-icon btn-warning"> <i class="mdi mdi-table-edit">  Editar </i> </button></a>';
    }
    #inicio del formulario en donde si tiene el valor 1 no podra editar y de lo contrario podra editar
    echo '
    <form class="form-horizontal" role="form" method="post">

    <div class="form-group">
    <label class="col-md-5 control-label">Clave:</label>
    <div class="col-md-3">';
      echo '<input type="text" class="form-control" readonly="" value="' . $arti["clave"] . '">';
    echo '
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">Nombre:</label>
    <div class="col-md-9">';
      echo '<input type="text" class="form-control" readonly="" value="' . $arti["nombre"] . '">';
    echo '
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-3 control-label">Nueva Existencia:</label>
    <div class="col-md-8">';
    if($valor==1){
      echo '<input type="text" class="form-control" readonly="" value="' . $res["nueva"] . '">';
    }else{
      echo '<input type="text" name="nueva" class="form-control" value="' . $res["nueva"] . '">';
    }
    echo '
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-3 control-label">Existencia Actual:</label>
    <div class="col-md-8">';
      echo '<input type="text" class="form-control" readonly="" value="' . $res["actual"] . '">';
    echo '
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-3 control-label">Diferencia:</label>
    <div class="col-md-8">';
    echo '<input type="text" class="form-control" readonly="" value="' . $res["diferencia"] . '">';
    echo '
    </div>
    </div>';
    if($valor==2){#opcion de enviar o cancelar los cambios realizados al cliente
      echo '
      <input type="submit" class="btn btn-icon" name="cancelar" value="Cancelar">
      <input type="submit" class="btn btn-icon btn-success" name="submit" value="Registrar">';
    }else{#obcion de regresar por si no quiere editar
      echo '
      <input type="submit" class="btn btn-icon" name="regresar" value="Regresar">';
    }
    echo '
    </form>
    ';
  }

  #funcion que obtendra los datos del formulario de nuevo articulo, dependiendo de num es la accion que realizara
  public function updateInventarioController2($id){
    if(isset($_POST["nueva"])){#verifica que exista la variable
      $datosController = array("id"=>$id);
      #llama a la funcion la cual traera todos los datos de la tabla de los articulos
      $res = Datos::VerDatosEspecific($datosController,"inventario");
      #los datos enviados por el formulario se hicieron con el metodo post y son insertados en un array
      $datosController = array( "nueva"=>$_POST["nueva"],"id"=>$id,"actual"=>$res["actual"]);
      #se manda a llamar la funcion la cual registrara al nuevo articulo
        $respuesta = Datos::editarInventario($datosController);
      //se imprime la respuesta en la vista
      if($respuesta == "success"){
        echo "<script>location.href='index.php?action=inventario';</script>";
      }else{
        echo "<script>location.href='index.php;</script>";
      }
    }
  }



























  #EDITAR
	#------------------------------------- 
  public function editar_alumno(){
    $datosController = array("matricula" => $_GET["matricula"]);
    	#echo "<script> alert(1) </script>";
    $respuesta = Datos::VerDatosTempo("alumnos",$datosController);
    $datosControllers = array ("id"=> $respuesta["grupo"]);
    $grupo= Datos::VerTablaDatos("grupos",$datosControllers);
    $datosControllers = array ("id"=> $respuesta["carrera"]);
    $carrera= Datos::VerTablaDatos("carreras",$datosControllers);
    	#echo "<script> alert(2) </script>";
    echo ' <div class="form-group">
            <div class="col-md-10">
                <input type="hidden"  class="form-control" value="'.$respuesta["matricula"].'" placeholder="matricula" name="matricula" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Nombre:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" value="'.$respuesta["nombre"].'" placeholder="nombre" name="nombre" required>
            </div>
        </div>
          <div class="form-group">
              <label class="col-md-2 control-label">Apellido:</label>
              <div class="col-md-10">
                  <input type="text" class="form-control" value = "'.$respuesta["apellido"].'"placeholder="Apellido" name="apellido" required>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Grupos:</label>
            <div class="col-md-10">
           <select class="form-control select2" name="grupo">
           <option value="'.$respuesta["grupo"]. '">'.$grupo["nombre"]. '</option>';
    $respuestas = Datos::VerTablas("grupos");
    foreach($respuestas as $row => $item) {
			echo '
						<option value='.$item["id"].'> '.$item["nombre"].'</option>';
			}
              
    echo'        </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">carrera:</label>
            <div class="col-md-10">
            <select class="form-control select2" name="carrera">
            <option value="'.$respuesta["carrera"]. '">'.$carrera["nombre"]. '</option>';
    $respuestas = Datos::VerTablas("carreras");
    foreach($respuestas as $row => $item) {
			echo '
						<option value='.$item["id"].'> '.$item["nombre"].'</option>';
			}
              
    echo'  
              
            </select>
            </div>
          </div>
          <div class="form-group">
              <input type="submit" class="btn btn-info waves-effect waves-light" name="submit" value="Registrar">
          </div>';
      
    
  }
  public function editar_profesor(){
    $datosController = array("id" => $_GET["id"]);
    $respuesta = Datos::VerTablaDatos("maestros",$datosController);
    //$datosController = $_GET["id"];
		//$respuesta = Datos::editarDatos2($datosController, "maestros");
    echo "<script>alert(".$respuesta["id"].");</script>";
    	#echo "<script> alert(2) </script>";
    echo ' 
        <div class="form-group">
            <div class="col-md-10">
                <input type="hidden" class="form-control value="'.$respuesta["id"].'" placeholder="N°de empleado" name="id" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-2 control-label">Nombre:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" value="'.$respuesta["nombre"].'" placeholder="nombre" name="nombre" required>
            </div>
        </div>
        
          <div class="form-group">
              <label class="col-md-2 control-label">Apellido:</label>
              <div class="col-md-10">
                  <input type="text" class="form-control" value="'.$respuesta["apellido"].'" placeholder="Apellido" name="apellido" required>
              </div>
          </div>
    
          <div class="form-group">
            <label class="col-md-2 control-label">Tipo:</label>
            <div class="col-md-10">
            <select class="form-control select2" name="tipo">';
    if ($respuesta["tipo"]== 1){
      $t="Administrador";
    }
    if ($respuesta["tipo"]== 2){
      $t="Profesor";
    }
    
    echo'
              <option value="'.$respuesta["tipo"].'">'.$t.'</option>
              <option value="1">Administrador</option>
              <option value="2">Profesor</option>
            </select>
            </div>
          </div>
          <div class="form-group">
              <label class="col-md-2 control-label">Password:</label>
              <div class="col-md-10">
                  <input type="password" class="form-control" value="'.$respuesta["password"].'" name="password" required>
              </div>
          </div>
          <div class="form-group">
              <input type="submit" class="btn btn-info waves-effect waves-light" name="submit" value="Registrar">
          </div>';
      echo "<script>alert(".$respuesta["id"].");</script>";
          
    
  }
  public function editar_grupo(){
    $datosController = $_GET["id"];
		$respuesta = Datos::editarDatos($datosController, "grupos");
    $datosControllers = array("id"=>$respuesta ["maestro"]);
		$maestro = Datos::VerTablaDatos("maestros", $datosControllers);
		echo'<div class="form-group">
            <label class="col-md-2 control-label">ID:</label>
            <div class="col-md-10">
            <input type="hidden" value="'.$respuesta["id"].'" name="id">
             <input type="text" value= "'.$respuesta["nombre"]. '"class="form-control" placeholder="ID" name="nombre" required>
            </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label" >Nivel:</label>
          <div class="col-md-10">
          <select class="form-control select2" name="nivel" required>
            <option value="'.$respuesta["nivel"]. '">'.$respuesta["nivel"]. '</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Profesor:</label>
          <div class="col-md-10">
          <select class="form-control select2" name="maestro" required>
          <option value='.$respuesta ["maestro"].'> '.$maestro["nombre"].' '.$maestro["apellido"].' </option>';
   $respuestas = Datos::VerTablas("maestros");
    foreach($respuestas as $row => $item) {
			echo '
						<option value='.$item["id"].'> '.$item["nombre"].' '.$item["apellido"].' </option>';
			}
    echo'
          </select>
          </div>
        </div>
          <div class="form-group">
              <input type="submit" class="btn btn-info waves-effect waves-light" name="submit" value="Registrar">
          </div>';
    
    }
  
   #ACTUALIZAR
	#-------------------------------------
 public function actualizar_grupo(){
    if(isset($_POST["nombre"])){
					/**Recibe a traves del método POST el name (html) del formulario,
					se almacenan los datos en una variable de tipo array con sus respectivas
					 propiedades:**/
	    		$datosController = array( "id"=>$_POST["id"],
										      					"nivel"=>$_POST["nivel"],
										      					"maestro"=>$_POST["maestro"],
										  	  					"nombre"=>$_POST["nombre"]);
					/**Se le dice al modelo models/crud.php
          */
          //echo "<script>alert(".$_POST["nivel"].");</script>";
          /*
					(Datos::registroUsuarioModel),que en la clase "Datos",
					la funcion "registroUsuarioModel" reciba en sus 2 parametros los valores
					"$datosController" y el nombre de la tabla a conectarnos la cual es
					"usuarios":*/
					$respuesta = Datos::updateGrupos($datosController);
					//se imprime la respuesta en la vista
					if($respuesta == "success"){
						//header("location:index.php?action=ok");
						echo "<script>location.href='index.php?action=Grupos';</script>";
					}
					else{
						//header("location:index.php");
						echo "<script>location.href='index.php;</script>";
					}
    }
  }
  public function actualizar_alumno(){
    if(isset($_POST["nombre"])){
      //$grupo = $_GET["grupo"];
      $datosController= array("matricula"=>$_POST["matricula"],
                             "nombre"=>$_POST["nombre"],
                             "apellido"=>$_POST["apellido"],
                             "grupo"=>$_POST["grupo"],
                             "carrera"=>$_POST["carrera"]);
      //echo "<script>alert(".$_POST["grupo"].");</script>";
      //echo "<script>alert(".$_POST["carrera"].");</script>";
      $respuesta = Datos::updateAlumnos($datosController);
      if($respuesta == "success"){
						//header("location:index.php?action=ok");
						echo "<script>location.href='index.php?action=Alumnos';</script>";
					}
					else{
						//header("location:index.php");
						echo "<script>location.href='index.php;</script>";
					}
    }
  }
  
  public function actualizar_maestros(){
    if(isset($_POST["nombre"])){
      //$grupo = $_GET["grupo"];
      $datosController= array("id"=>$_POST["id"],
                             "nombre"=>$_POST["nombre"],
                             "apellido"=>$_POST["apellido"],
                             "tipo"=>$_POST["tipo"],
                             "password"=>$_POST["password"]);
      //echo "<script>alert(".$_POST["grupo"].");</script>";
      //echo "<script>alert(".$_POST["carrera"].");</script>";
      $respuesta = Datos::updateMaestros($datosController);
      if($respuesta == "success"){
						//header("location:index.php?action=ok");
						echo "<script>location.href='index.php?action=Profesores';</script>";
					}
					else{
						//header("location:index.php");
						echo "<script>location.href='index.php;</script>";
					}
    }
  }
 
  

	public function VistaProfesor(){
		$respuesta = Datos::VerTablas("maestros");
    /**El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
    foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar
    usarlo con una variable de un tipo diferente de datos o una variable no inicializada.**/
		foreach($respuesta as $row => $item){
			echo'<tr>
				<td>'.$item["id"].'</td>
				<td>'.$item["nombre"].'</td>
				<td>'.$item["apellido"].'</td>';
        #if ($_SESSION["tipo"]==1) {
        echo '
				<td><a href="index.php?action=editar_profesor&id='.$item["id"].'">
				<button type="button" ><i class="fa fa-edit"></i></button></a></td>
				<td><a href="index.php?action=Profesores&idBorrar='.$item["id"].'">
				<button type="button"><i class="fa fa-edit"></i></button></a></td>';
			#}
			echo '</tr>';
		}
	}
  public function VistaGrupos(){
			$respuesta = Datos::VerTablas("grupos");
	    /**El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
	    foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar
	    usarlo con una variable de un tipo diferente de datos o una variable no inicializada.**/
			foreach($respuesta as $row => $item){
				$datosControllers = array("id"=>$item["maestro"]);
				$maestro = Datos::VerTablaDatos("maestros", $datosControllers);   
        if ($_SESSION["tipo"]==2) {
        if($maestro["id"]==$_SESSION["id"]){
				echo'<tr>
					<td>'.$item["nombre"].'</td>
					<td>'.$item["nivel"].'</td>
					<td>'.$maestro["nombre"].' '.$maestro["apellido"].'</td>
          <td><a href="index.php?action=Alumnos&id_grupo='.$item["id"].'">
					<button type="button" ><i class="fa fa-edit"></i></button></a></td>';
        }
        }
	       if ($_SESSION["tipo"]==1) {
	        echo '
          <tr>
          <td>'.$item["nombre"].'</td>
					<td>'.$item["nivel"].'</td>
					<td>'.$maestro["nombre"].' '.$maestro["apellido"].'</td>
					<td><a href="index.php?action=editar_grupo&id='.$item["id"].'">
					<button type="button" ><i class="fa fa-edit"></i></button></a></td>
					<td><a href="index.php?action=Grupos&idBorrar='.$item["id"].'">
					<button type="button"><i class="fa fa-edit"></i></button></a></td>';
				}
				echo '</tr>';
			}
	}
  public function VistaVisita(){
    $respuesta = Datos::VerTablas("visitas");
    foreach($respuesta as $row=>$item){
      if ($_SESSION["tipo"]==2) {
      if($item["matricula"]==$_GET["matricula"]){
      echo'<tr>
      <td>'.$item["idvisita"].'</td>
      <td>'.$item["matricula"].'</td>
      <td>'.$item["horaentrada"].'</td>
      <td>'.$item["horasalida"].'</td>
      <td>'.$item["actividad"].'</td>';
      }
      }
       if ($_SESSION["tipo"]==1) {
      echo'<tr>
      <td>'.$item["idvisita"].'</td>
      <td>'.$item["matricula"].'</td>
      <td>'.$item["horaentrada"].'</td>
      <td>'.$item["horasalida"].'</td>
      <td>'.$item["actividad"].'</td>';
      }
      
      echo '</tr>';
    }
  }
  public function VistaVisitaTemp(){
    $respuesta = Datos::VerTablas("VisitasTemp");
    foreach($respuesta as $row=>$item){
      echo'<tr>
      <td>'.$item["id"].'</td>
      <td>'.$item["matricula"].'</td>
      <td>'.$item["fecha"].'</td>
      <td>'.$item["actividad"].'</td>';
      echo '</tr>';
    }
  }
	#BORRAR REGISTROS
	#------------------------------------
	public function borrarAlumno(){
		if(isset($_GET["idBorrar"])){
			$datosController = $_GET["idBorrar"];
			/**Llama al modelo de borrar los datos, se manda el id y el nombre
			de la tabla del cual se va a eliminar el registro**/
			$respuesta = Datos::borrarDatosAlumno($datosController, "alumnos");
		}
	}
	public function borrarProfesor(){
		if(isset($_GET["idBorrar"])){
			$datosController = $_GET["idBorrar"];
			/**Llama al modelo de borrar los datos, se manda el id y el nombre
			de la tabla del cual se va a eliminar el registro**/
			$respuesta = Datos::borrarDatosModel($datosController, "maestros");
		}
	}
	public function borrarGrupo(){
		if(isset($_GET["idBorrar"])){
			$datosController = $_GET["idBorrar"];
			/**Llama al modelo de borrar los datos, se manda el id y el nombre
			de la tabla del cual se va a eliminar el registro**/
			$respuesta = Datos::borrarDatosModel($datosController, "grupos");
		}
	}
	#REGISTROS
	#------------------------------------
	public function registroProfesores(){
			if(isset($_POST["nombre"])){
				$status=1;
				/**Recibe a traves del método POST el name (html) del formulario,
				se almacenan los datos en una variable de tipo array con sus respectivas
				 propiedades (usuario, password y email):**/
				$datosController = array( "id"=>$_POST["id"],
									      					"apellido"=>$_POST["apellido"],
									      					"nombre"=>$_POST["nombre"],
									  	  					"tipo"=>$_POST["tipo"],
									      					"password"=>$_POST["password"],
										  						"status"=>$status);
				/**Se le dice al modelo models/crud.php
				(Datos::registroUsuarioModel),que en la clase "Datos",
				la funcion "registroUsuarioModel" reciba en sus 2 parametros los valores
				"$datosController" y el nombre de la tabla a conectarnos la cual es
				"usuarios":**/
				$respuesta = Datos::registroMaestros($datosController, "maestros");
				//se imprime la respuesta en la vista
				if($respuesta == "success"){
					//header("location:index.php?action=ok");
					echo "<script>location.href='index.php?action=Profesores';</script>";
				}
				else{
					//header("location:index.php");
					echo "<script>location.href='index.php;</script>";
				}

			}

		}

	public function registroGrupos(){
				if(isset($_POST["nombre"])){
					$id=NULL;
					/**Recibe a traves del método POST el name (html) del formulario,
					se almacenan los datos en una variable de tipo array con sus respectivas
					 propiedades:**/
					$datosController = array( "id"=>$id,
										      					"nivel"=>$_POST["nivel"],
										      					"maestro"=>$_POST["maestro"],
										  	  					"nombre"=>$_POST["nombre"]);
					/**Se le dice al modelo models/crud.php
					(Datos::registroUsuarioModel),que en la clase "Datos",
					la funcion "registroUsuarioModel" reciba en sus 2 parametros los valores
					"$datosController" y el nombre de la tabla a conectarnos la cual es
					"usuarios":**/
					$respuesta = Datos::registroGrupos($datosController, "grupos");
					//se imprime la respuesta en la vista
					if($respuesta == "success"){
						//header("location:index.php?action=ok");
						echo "<script>location.href='index.php?action=Grupos';</script>";
					}
					else{
						//header("location:index.php");
						echo "<script>location.href='index.php;</script>";
					}
				}
  }
public function registroVisitasTemp(){
		if(isset($_POST["matricula"])){
			$id=null;
         	$hora=date("H");
         	if ($hora>="09" and $hora<="18"){//validar hora de cai abierto
         		$hora=date("i");
         		if($hora>="00" and $hora<="10"){//validar cai 10 min aceptables
         			$hoy = date("Y-m-d H:i:s");
         			/**Recibe a traves del método POST el name (html) del formulario,
					se almacenan los datos en una variable de tipo array con sus respectivas
					 propiedades (usuario, password y email):**/
					$datosController=array( "id"=>$id,
											"matricula"=>$_POST["matricula"],
											"actividad"=>$_POST["actividad"],
											"fecha"=>$hoy); 

					/**Se valida que el usuario no se encuentre registrado en la misma hora**/
          $validar = Datos::VerDatosTempo("alumnos", $datosController);
          if($validar["matricula"] == $_POST["matricula"]){
            /**Se envian los datos al modelo  para realizar el registro temporl**/	
            $respuesta = Datos::registroVistasTemp($datosController, "visitastemp");
            //se imprime la respuesta en la vista
            if($respuesta == "success"){
              //header("location:index.php?action=ok");
              echo "<script>location.href='index.php?action=Vistas';</script>";
            }
            else{
              //header("location:index.php");
              echo "<script>location.href='index.php?action=Profesores;</script>";
            }
          }
         		}else{
         			echo "llegaste tarde no entras";
         		}
         	}else{
         		echo "Esta cerrado...";
         	}
		}
	}

}

?>
