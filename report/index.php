<?php 
	require_once('conexion/conexion.php');	
	$usuario = 'SELECT * FROM emp_empleado ORDER BY id DESC';	
	$usuarios=$mysqli->query($usuario);

  if(isset($_POST['create_pdf'])){
  require_once('tcpdf/tcpdf.php');
  
  $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor('Leonel Fabián');
  $pdf->SetTitle($_POST['reporte_name']);
  $pdf->setPrintHeader(false); 
  $pdf->setPrintFooter(false);
  $pdf->SetMargins(20, 20, 20, false); 
  $pdf->SetAutoPageBreak(true, 20); 
  $pdf->SetFont('Helvetica', '', 10);
  $pdf->addPage();

  $content = '';
  
  $content .= '
    <div class="row">
          <div class="col-md-12">
              <h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>
        
      <table border="1" cellpadding="5">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Cargo</th>
            <th>DUI</th>
            <th>Salario</th>
          </tr>
        </thead>
  ';
  
  
  while ($user=$usuarios->fetch_assoc()) { 
      if($user['id']){  $color= '#f5f5f5'; }else{ $color= '#fbb2b2'; }
  $content .= '
    <tr bgcolor="'.$color.'">
            <td>'.$user['nombre'].'</td>
            <td>'.$user['apellido'].'</td>
            <td>'.$user['telefono'].'</td>
            <td>'.$user['cargo'].'</td>
            <td>'.$user['dui'].'</td>
            <td>$. '.$user['salario'].'</td>
        </tr>
  ';
  }
  
  $content .= '</table>';
  
  $content .= '
    <div class="row padding">
          <div class="col-md-12" style="text-align:center;">
              <span>Pdf Creator </span><a href="https://pagosasi2.000webhostapp.com/">ASI 2</a>
            </div>
        </div>
      
  ';
  
  $pdf->writeHTML($content, true, 0, true, 0);

  $pdf->lastPage();
  $pdf->output('Reporte.pdf', 'I');
}

?>
		 
          
        
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Exportar a PDF - ASI 2</title>
<meta name="keywords" content="">
<meta name="description" content="">
<!-- Meta Mobil
================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid">
        <div class="row padding">
        	<div class="col-md-12">
            	<?php $h1 = "Reporte de Empleados";  
            	 echo '<h1>'.$h1.'</h1>'
				?>
            </div>
        </div>
    	<div class="row">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Cargo</th>
            <th>DUI</th>
            <th>Salario</th>
          </tr>
        </thead>
        <tbody>
        <?php 
			while ($user=$usuarios->fetch_assoc()) {   ?>
          <tr class="<?php if($user['id']){ echo 'id';}else{ echo 'danger';} ?>">
            <td><?php echo $user['nombre']; ?></td>
            <td><?php echo $user['apellido']; ?></td>
            <td><?php echo $user['telefono']; ?></td>
            <td><?php echo $user['cargo']; ?></td>
            <td><?php echo $user['dui']; ?></td>
            <td>$. <?php echo $user['salario']; ?></td>
          </tr>
         <?php } ?>
        </tbody>
      </table>
              <div class="col-md-12">
              	<form method="post">
                	<input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                	<input type="submit" name="create_pdf" class="btn btn-danger pull-right" value="Generar PDF">
                </form>
              </div>
      	</div>
    </div>
</body>
</html>