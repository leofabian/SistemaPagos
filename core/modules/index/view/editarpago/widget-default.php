<?php $pagosempleado = PayData::getById($_GET["id"]);?>
<div class="row">
  <div class="col-md-12">
  <h1>Editar Pago</h1>
  <br>
    <form class="form-horizontal" method="post" id="editarempleado" action="index.php?view=actualizarpago" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Empleado</label>
    <div class="col-md-6">
      <input type="text" name="empleado" value="<?php echo $pagosempleado->empleado;?>" class="form-control" id="empleado" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Salario</label>
    <div class="col-md-6">
      <input type="number" name="salario" value="<?php echo $pagosempleado->salario;?>" required class="form-control" id="salario" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Días Trabajados</label>
    <div class="col-md-6">
      <input type="text" name="diastrabajo" value="<?php echo $pagosempleado->diastrabajo;?>" class="form-control" required id="diastrabajo" placeholder="Dias trabajados">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Horas Extra</label>
    <div class="col-md-6">
      <input type="text" name="horasextra" value="<?php echo $pagosempleado->horasextra;?>" class="form-control" required id="horasextra" placeholder="Horas extras">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Indemnización*</label>
    <div class="col-md-6">
      <input type="text" name="indemniz"  value="<?php echo $pagosempleado->indemniz;?>" class="form-control" id="indemniz" placeholder="$$">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descuento*</label>
    <div class="col-md-6">
      <input type="text" name="descuento"  value="<?php echo $pagosempleado->descuento;?>" class="form-control" id="descuento" placeholder="$$">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Adelantos*</label>
    <div class="col-md-6">
      <input type="text" name="adelantos"  value="<?php echo $pagosempleado->adelantos;?>" class="form-control" id="adelantos" placeholder="$$">
    </div>
  </div>

<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">AFP*</label>
    <div class="col-md-6">
      <input type="text" name="afp"  value="<?php echo $pagosempleado->afp;?>" class="form-control" id="afp">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Seguro*</label>
    <div class="col-md-6">
      <input type="text" name="seguro"  value="<?php echo $pagosempleado->seguro;?>" class="form-control" id="seguro">
    </div>
  </div>


  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $pagosempleado->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Pago</button>
    </div>
  </div>
</form>
  </div>
</div>