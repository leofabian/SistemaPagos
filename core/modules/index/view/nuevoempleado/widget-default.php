<div class="row">
  <div class="col-md-12">
  <h1>Nuevo Empleado</h1>
  <br>
    <form class="form-horizontal" method="post" id="agregarempleado" action="index.php?view=agregarempleado" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" class="form-control" required id="direccion" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Genero*</label>
    <div class="col-md-6">
      <select name="genero" class="form-control" id="genero" placeholder="Selleccione Género">
          <option></option>
          <option>Femenino</option>
          <option>Masculino</option>          
        </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha Nacimeinto*</label>
    <div class="col-md-6">
      <input type="date" name="fechanac" class="form-control" id="fechanac" placeholder="Fecha">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Teléfono*</label>
    <div class="col-md-6">
      <input type="text" name="telef1" class="form-control" id="telef1" placeholder="Telefono">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Departamento*</label>
    <div class="col-md-6">
      <select name="departamento" class="form-control" id="departamento" placeholder="Departamento" tabindex="10">
        <option></option>
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
      <input type="text" name="posicion" class="form-control" id="posicion" placeholder="Posicion">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Salario*</label>
    <div class="col-md-6">
      <input type="text" name="salario" class="form-control" id="salario" placeholder="$$">
    </div>
  </div>

  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Cliente</button>
    </div>
  </div>
</form>
  </div>
</div>