<?php $empleado = EmpData::getById($_GET["id"]);?>
<div class="row">
  <div class="col-md-12">
  <h1>Editar Empleado</h1>
  <br>
    <form class="form-horizontal" method="post" id="editarempleado" action="index.php?view=actualizarempleado" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido" value="<?php echo $empleado->apellido;?>" class="form-control" id="apellido" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" value="<?php echo $empleado->nombre;?>" required class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" value="<?php echo $empleado->direccion;?>" class="form-control" required id="direccion" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Genero*</label>
    <div class="col-md-6">
      <select name="genero" class="form-control" id="genero" placeholder="Selleccione Género">
          <option><?php echo $empleado->genero;?></option>
          <option>Femenino</option>
          <option>Masculio</option>          
        </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha Nacimeinto*</label>
    <div class="col-md-6">
      <input type="date" name="fechanac"  value="<?php echo $empleado->fechanac;?>" class="form-control" id="fechanac" placeholder="Fecha">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Teléfono*</label>
    <div class="col-md-6">
      <input type="text" name="telef1"  value="<?php echo $empleado->telef1;?>" class="form-control" id="telef1" placeholder="Telefono">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Departamento*</label>
    <div class="col-md-6">
      <select name="departamento" class="form-control" id="departamento" placeholder="Departamento">
        <option><?php echo $empleado->departamento;?></option>
          <option>Administración</option>
          <option>Ventas</option>
          <option>Despacho</option>
          <option>Bodega</option>
          <option>Seguridad</option>
          <option>Limpieza</option>      
        </select>
    </div>
  </div>

<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Posición*</label>
    <div class="col-md-6">
      <input type="text" name="posicion"  value="<?php echo $empleado->posicion;?>" class="form-control" id="posicion" placeholder="Posicion">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Salario*</label>
    <div class="col-md-6">
      <input type="text" name="salario"  value="<?php echo $empleado->salario;?>" class="form-control" id="salario" placeholder="$$">
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