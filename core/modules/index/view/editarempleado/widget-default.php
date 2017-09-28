<?php $empleado = EmpData::getById($_GET["id"]);?>
<div class="row">
  <div class="col-md-12">
  <h1>Editar Empleado</h1>
  <br>
    <form class="form-horizontal" method="post" id="editarempleado" action="index.php?view=actualizarempleado" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" value="<?php echo $empleado->nombre;?>" required class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido" value="<?php echo $empleado->apellido;?>" class="form-control" id="apellido" placeholder="Apellido">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" value="<?php echo $empleado->direccion;?>" class="form-control" required id="direccion" placeholder="Direccion">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Teléfono*</label>
    <div class="col-md-6">
      <input type="text" name="telefono"  value="<?php echo $empleado->telefono;?>" class="form-control" id="telefono" placeholder="Telefono">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Genero*</label>
    <div class="col-md-6">
      <select name="sexo" class="form-control" id="sexo" placeholder="Seleccione Género">
          <option><?php echo $empleado->sexo;?></option>
          <option>Femenino</option>
          <option>Masculio</option>          
        </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">#DUI*</label>
    <div class="col-md-6">
      <input type="text" name="dui"  value="<?php echo $empleado->dui;?>" class="form-control" id="dui" placeholder="Telefono">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">#NIT*</label>
    <div class="col-md-6">
      <input type="text" name="nit"  value="<?php echo $empleado->nit;?>" class="form-control" id="nit" placeholder="Telefono">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado Civil*</label>
    <div class="col-md-6">
      <select name="estado_civil" class="form-control" id="estado_civil" placeholder="Estado Civil">
        <option><?php echo $empleado->estado_civil;?></option>
          <option>Soltero</option>
          <option>Casado</option>
          <option>Acompañado</option> 
          <option>Divorciado</option>      
        </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Tipo de Contrato*</label>
    <div class="col-md-6">
      <select name="tipo_contrato" class="form-control" id="tipo_contrato" placeholder="Tipo Contrato">
        <option><?php echo $empleado->tipo_contrato;?></option>
           <option>Contrato fijo</option>
          <option>Contrato temporal</option>   
        </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cargo*</label>
    <div class="col-md-6">
      <input type="text" name="cargo"  value="<?php echo $empleado->cargo;?>" class="form-control" id="cargo" placeholder="Tipo de Contrato">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Salario*</label>
    <div class="col-md-6">
      <input type="text" name="salario"  value="<?php echo $empleado->salario;?>" class="form-control" id="salario" placeholder="$$">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Forma de Pago*</label>
    <div class="col-md-6">
      <select name="formapago" class="form-control" id="formapago" placeholder="Forma de pago">
        <option><?php echo $empleado->formapago;?></option>
           <option>Tranferencia Bancaria</option>
          <option>Efectivo</option> 
        </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha Nacim.*</label>
    <div class="col-md-6">
      <input type="date" name="fecha_nac"  value="<?php echo $empleado->fecha_nac;?>" class="form-control" id="fecha_nac" placeholder="$$">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email"  value="<?php echo $empleado->email;?>" class="form-control" id="email" placeholder="$$">
    </div>
  </div>

  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $empleado->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
    </div>
  </div>
</form>
  </div>
</div>