<div class="row">
  <div class="col-md-12">
  <h1>Nuevo Empleado</h1>
  <br>
    <form class="form-horizontal" method="post" id="agregarempleado" action="index.php?view=agregarempleado" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombres*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellidos*</label>
    <div class="col-md-6">
      <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" class="form-control" required id="direccion" placeholder="Direccion">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Teléfono*</label>
    <div class="col-md-6">
      <input type="number" name="telefono" class="form-control" id="telefono" placeholder="Telefono">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Genero*</label>
    <div class="col-md-6">
      <select name="sexo" class="form-control" id="sexo" placeholder="Selleccione Género">
          <option></option>
          <option>Femenino</option>
          <option>Masculino</option>          
        </select>
    </div>
  </div> 

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">DUI*</label>
    <div class="col-md-6">
      <input type="text" name="dui" class="form-control" id="dui" placeholder="Dui">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">NIT*</label>
    <div class="col-md-6">
      <input type="text" name="nit" class="form-control" id="nit" placeholder="Nit">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Est Civil*</label>
    <div class="col-md-6">
      <select name="estado_civil" class="form-control" id="estado_civil" placeholder="Estado Civil">
          <option></option>
          <option>Soltero</option>
          <option>Casado</option>
          <option>Acompañado</option> 
          <option>Divorciado</option>           
        </select>
    </div>
  </div> 

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Tipo Contrato*</label>
    <div class="col-md-6">
      <select name="tipo_contrato" class="form-control" id="tipo_contrato" placeholder="Contrato">
          <option></option>
          <option>Contrato fijo</option>
          <option>Contrato temporal</option>          
        </select>
    </div>
  </div> 

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cargo*</label>
    <div class="col-md-6">
      <select name="cargo" class="form-control" id="cargo" placeholder="Cargo o área" tabindex="10">
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
    <label for="inputEmail1" class="col-lg-2 control-label">Salario*</label>
    <div class="col-md-6">
      <input type="number" name="salario" class="form-control" id="salario" placeholder="salario">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Forma de pago*</label>
    <div class="col-md-6">
      <select name="formapago" class="form-control" id="formapago" placeholder="Forma de pago" tabindex="10">
        <option></option>
          <option>Tranferencia Bancaria</option>
          <option>Efectivo</option>   
        </select>
    </div>
  </div>

<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha Nacimiento*</label>
    <div class="col-md-6">
      <input type="date" name="fecha_nac" class="form-control" id="fecha_nac" placeholder="Fecha">
    </div>
  </div>

<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" id="email" placeholder="email">
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