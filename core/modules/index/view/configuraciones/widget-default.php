<?php $pla_configuraciones = ConfigurationData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Valores</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=actualizconfiguracion" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">ISSS*</label>
    <div class="col-md-6">
      <input type="number" name="isss" value="<?php echo $pla_configuraciones->isss;?>" class="form-control" id="isss" placeholder="Valor de Isss">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">AFP*</label>
    <div class="col-md-6">
      <input type="number" name="afp" value="<?php echo $pla_configuraciones->afp;?>" class="form-control" id="afp" placeholder="Valor de AFP">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $pla_configuraciones->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Configuraciones de pago</button>
    </div>
  </div>
</form>
	</div>
</div>