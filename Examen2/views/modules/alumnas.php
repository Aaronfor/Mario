<div class="container">
  <div class="m-t-40 card-box">
    <h5><b>Alumnas</b></h5>
    <table class="table table table-hover m-0">
      <thead>
        <th style="text-align: center;">Folio</th>
        <th style="text-align: center;">Nombre Alumna</th>
        <th style="text-align: center;">Grupo</th>
        <th style="text-align: center;">Nombre Mamá</th>
        <th style="text-align: center;">Fecha de Pago</th>
        <th style="text-align: center;">Fecha de Envío</th>
      </thead>
      <tbody style="text-align: center;">
        <?php
        #Creacion del objeto 
        $visualizarAlumnas = new MvcController();
        $visualizarAlumnas->vistaAlumnasController();
        ?>
      </tbody>
    </table>
  </div>
</div>
