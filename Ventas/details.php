<?php
#conexion con archivo para el html
include_once('utilities.php');
//conexión con las funciones
include_once('db/database_utilities.php');

#con el metodo get obtiene el id que fue enviado por la url 
$id = isset( $_GET['id'] ) ? $_GET['id'] : '';
$user = get_user_by_id( $id );
#se llama a la funcion y  ella traera todos los datos de esa persona con ese id que fue obtenido anteriormente
if( $_POST )#cuando se oprime el boton de agregar entraria al if ya que se utilizo el metodo post
{
  #dependiendo del tipo de usuario es a donde se redigira cuando se haya agregado al nuevo usuario
  if ($user['tipo']==1) {
    #en caso de ser futbolista
    header('Location: sistema_fut.php');
  }else{
    #en caso de ser basquetbolista
    header('Location: sistema_bas.php');
  }
  
  //die();
 #se capturan todos los input los cuales tienen los datos del jugador
  $name = isset( $_POST['name'] ) ? $_POST['name'] : '';
  $posicion = isset( $_POST['posicion'] ) ? $_POST['posicion'] : '';
  $carrera = isset( $_POST['carrera'] ) ? $_POST['carrera'] : '';
  $email = isset( $_POST['email'] ) ? $_POST['email'] : '';

  #dependiendo del tipo de usuario es el parametro que se enviara
  if ($user['tipo']==1) {
    #en caso de ser futbolista se enviara un 1 por ser ese tipo
    update($id, $name,$posicion,$carrera,$email,1);
  }else{
    #en caso de ser futbolista se enviara un 2 por ser ese tipo
    update($id, $name,$posicion,$carrera,$email,2);
  }
  //terminamos la ejecución
  die();

}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
        <script LANGUAGE="JavaScript">
function confirmDel(){
//funcion que ayudara a confirmar si se desea modificar el usuario
if (confirm("¿Realmente desea Modificarlo?"))
    return true; //con esto se ejecuta el href de link
else
    return false ;//en caso de que no, no pasara nada
}
</script>
  </head>
  <body>
    <div class="row">
 
      <div class="large-12 columns">
        <br>
        <a href="sistema_fut.php" class="button radius tiny primary">Home</a>
        <a href="new_user.php" class="button radius tiny secondary">Nuevo</a>
        <h3>Modifica registro</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <form method="post">
                <div class="row">
                  <div class="large-5 columns">
                    <!-- mostramos el numero del jugador-->
                    <label>ID: <?php echo $user['id']; ?>
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Nombre
                      <!--asignamos el valor del arreglo-->
                      <input type="text" name="name" value="<?php echo $user['nombre']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Posicion
                      <!--asignamos el valor del arreglo-->
                      <input type="text" name="posicion" value="<?php echo $user['posicion']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Correo
                      <!--asignamos el valor del arreglo-->
                      <input type="text" name="email" value="<?php echo $user['email']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Carrera
                      <!--asignamos el valor del arreglo-->
                      <input type="text" name="carrera" value="<?php echo $user['carrera']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-4 columns">
                    <label>
                      <!--en este se llama a la funcion antes mencionada la cual modificara al usuario mientras confire-->
                      <input type="submit" class="button success" value="MODIFICAR" onclick="if(confirmDel() == false){return false;}" />
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>