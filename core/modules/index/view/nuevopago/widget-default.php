<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$hostname = "localhost";
$user = "root";
$password = "";
$database = "serviagro";
$con = mysql_connect($hostname, $user, $password) 
or die("DB Connection Failed!");
mysql_select_db($database, $con) or die("DB Connection Failed!");


$qry=mysql_query("select * from v_empleado"); 
$row=array(); 
while($r=mysql_fetch_assoc($qry)){ 
  $row[]=array($r['persona'],$r['salario']); 
} 
?> 
<div class="row">
  <div class="col-md-12">
    <h1>Pago a Empleado</h1>
    <br>
    <form class="form-horizontal" method="post" id="agregarcliente" action="index.php?view=agregarpago" role="form">
      <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Empleado*</label>
        <div class="col-md-5">
          <td> 
            <select name="empleado" id="empleado" class="form-control" class="empleado" onchange="document.getElementById('salario').value=this.options[this.selectedIndex].getAttribute('salario')"> 
              <option>-Seleccione Empleado-</option>
              <?php foreach($row as $v){ ?> 
                <option salario="<?php echo $v[1] ?>"><?php echo $v[0] ?></option> 
                <?php }?> 
              </select> 
            </td> 
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail1" class="col-lg-2 control-label">Salario*</label>
           <div class="form-group input-group col-md-5">
          <span class="input-group-addon">$</span>
            <input name="salario" id="salario" class="form-control" value= 0 <?php echo $row[0][1] ?> readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail1" class="col-lg-2 control-label">Días Trabajados*</label>
           <div class="form-group input-group col-md-5">
         
            <input type="number" name="diastrabajo" class="form-control" required id="diastrabajo" placeholder="Ingrese días">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail1" class="col-lg-2 control-label">Horas Extra</label>
           <div class="form-group input-group col-md-5">
         
            <input type="number" name="horasextra" class="form-control" required id="horasextra" placeholder="Ingrese Si las hizo">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail1" class="col-lg-2 control-label">Indemnización (Si amerita)</label>
           <div class="form-group input-group col-md-5">
          <span class="input-group-addon">$</span>
            <input type="number" name="indemniz" class="form-control" id="indemniz" value="0">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail1" class="col-lg-2 control-label">Descuento</label>
           <div class="form-group input-group col-md-5">
          <span class="input-group-addon">$</span>
            <input type="number" name="descuento" class="form-control" id="descuento" value="0">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail1" class="col-lg-2 control-label">Adelantos (Si los hubo)</label>
           <div class="form-group input-group col-md-5">
          <span class="input-group-addon">$</span>
            <input type="number" name="adelantos" class="form-control" id="adelantos" placeholder="Ingrese cantidad">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail1" class="col-lg-2 control-label">AFP</label>
          <div class="form-group input-group col-md-5">
          <span class="input-group-addon">$</span>
            <input type="text" name="afp" class="form-control" id="afp" value="0.03">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail1" class="col-lg-2 control-label">Seguro</label>
          <div class="form-group input-group col-md-5">
          <span class="input-group-addon">$</span>
            <input type="text" name="seguro" class="form-control" id="seguro" value="0.0625">
          </div>
        </div>


        <p class="alert alert-info">* Campos obligatorios</p>
        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-primary">Efectuar Pago</button>
          </div>
        </div>
      </form>
    </div>
  </div>