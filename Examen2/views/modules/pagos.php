<div class="col-md-12">
  <div class="m-t-40 card-box">
    <form class="form-horizontal" role="form" method="post">
        <div class="form-group has-feedback">
            <label class="col-sm-3 control-label">Grupo</label>
            <div class="col-sm-6">
                <select class="form-control select2" name="grupoAlu" data-placeholder="Grupo ...">
                    <option></option>
                    <?php
                    //Ejecucion de controladores
                    $grupos = new MvcController();
                    $grupos->GruposController();
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="col-sm-3 control-label">Nombre de la Alumna</label>
            <div class="col-sm-6">
                <select class="form-control select2" name="alumna" data-placeholder="Alumna ...">
                    <option></option>
                    <?php
            //Ejecucion de controladores
                    $alumna = new MvcController();
                    $alumna->AlumnasController();
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="col-sm-3 control-label">Nombre de la Madre</label>
            <div class="col-sm-6">
                <input type="text" name="madre" class="form-control">
                <i class="fa fa-envelope form-control-feedback l-h-34"></i>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="col-sm-3 control-label">Fecha de pago</label>
            <div class="col-sm-6">
                <div class="form-group">
                    <div>
                        <div class="input-group">
                            <input type="text" name="fechaPago" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                            <i class="mdi mdi-calendar text-white"></i>
                        </div><!-- input-group -->
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="col-sm-3 control-label">Comprobante de folio</label>
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="file" name="fileToUpload" id="fileToUpload" class="filestyle" data-buttonname="btn-default">
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="col-sm-3 control-label">Folio</label>
            <div class="col-sm-3">
                <input type="text" name="folio" class="form-control" placeholder="Folio de Autorización">
                <i class="fa fa-envelope form-control-feedback l-h-34"></i>
            </div>
        </div>
        <div class="col-md-2 col-md-offset-3"></div>
        <input type="submit"  class="btn btn-primary" name="registrar" id="registrar" value="Registrar" >
    </form>
</div>
</div>
<?php
    //Ejecucion de controladores
    $Pago = new MvcController();
    $Pago->PagoController();
?>