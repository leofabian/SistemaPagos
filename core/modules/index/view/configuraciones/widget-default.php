<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$hostname = "localhost";
$user = "root";
$password = "";
$database = "pagosasi2";
$con = mysql_connect($hostname, $user, $password) 
or die("DB Connection Failed!");
mysql_select_db($database, $con) or die("DB Connection Failed!");


$qry=mysql_query("select * from configurar"); 
$row=array(); 
while($r=mysql_fetch_assoc($qry)){ 
  $row[]=array($r['isss'],$r['afp']); 
} 
?> 


<div class="row">
	<div class="col-md-12">
	<h1>Editar Valores</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=actualizconfiguracion" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">ISSS*</label>
    <div class="col-md-6">
      <input type="text" name="isss" value="<?php echo $row[0][0] ?>" class="form-control" id="isss" placeholder="Valor ISSS">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">AFP*</label>
    <div class="col-md-6">
      <input type="text" name="afp" value="<?php echo $row[0][1] ?>" class="form-control" id="afp" placeholder="Valor AFP">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id_usuario" value="<?php echo $usuario->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Categoria</button>
    </div>
  </div>
</form>
	</div>
</div>