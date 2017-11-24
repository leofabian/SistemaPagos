<?php 
  require_once('conexion/conexion.php');  
  $usuario = 'SELECT * FROM pagosempleado ORDER BY id DESC'; 
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
  $pdf->SetFont('helvetica', '', 10);
  $pdf->addPage();

  $content = '';
  
  $content .= '
    <div class="row">
          <div class="col-md-12">
              <h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>
        
      <table border="1" cellpadding="5">
        <thead>
          <tr>
            <th>Empleado</th>
            <th>Salario</th>
            <th>D.Trabajados</th>
            <th>Indemniz.</th>
            <th>Descuentos</th>
            <th>Fecha Pago</th>
          </tr>
        </thead>
  ';
  
  
  while ($user=$usuarios->fetch_assoc()) { 
      if($user['id']){  $color= '#f5f5f5'; }else{ $color= '#fbb2b2'; }
  $content .= '
    <tr bgcolor="'.$color.'">
            <td>'.$user['empleado'].'</td>
            <td>$ '.$user['salario'].'</td>
            <td>'.$user['diastrabajo'].' Dias</td>
            <td>$ '.$user['indemniz'].'</td>
            <td>$ '.$user['descuento'].'</td>
            <td>'.$user['creado_el'].'</td>
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
  $pdf->output('ReporteContanciaPagos.pdf', 'I');
}



  
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
  $pdf->SetFont('helvetica', '', 10);
  $pdf->addPage();

  $content = '';
  
  $content .= '
    <div class="row">
          <div class="col-md-12">
              <h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>
        
      <table border="1" cellpadding="5">
        <thead>
          <tr>
            <th>Empleado</th>
            <th>Salario</th>
            <th>D.Trabajados</th>
            <th>Indemniz.</th>
            <th>Descuentos</th>
            <th>Fecha Pago</th>
          </tr>
        </thead>
  ';
  
  
  while ($user=$usuarios->fetch_assoc()) { 
      if($user['id']){  $color= '#f5f5f5'; }else{ $color= '#fbb2b2'; }
  $content .= '
    <tr bgcolor="'.$color.'">
            <td>'.$user['empleado'].'</td>
            <td>$ '.$user['salario'].'</td>
            <td>'.$user['diastrabajo'].' Dias</td>
            <td>$ '.$user['indemniz'].'</td>
            <td>$ '.$user['descuento'].'</td>
            <td>'.$user['creado_el'].'</td>
        </tr>
  ';
  }
  
  $content .= '</table>';
  
  $content .= '
    <div class="row padding">
          <div class="col-md-12" style="text-align:center;">
              <span>Pdf Creator </span><a href="https://pagosasi2.000webhostapp.com">Leonel Fabián</a>
            </div>
        </div>
      
  ';
  
  $pdf->writeHTML($content, true, 0, true, 0);

  $pdf->lastPage();
  $pdf->output('ReporteConstanciaPagos.pdf', 'I');
}

?>
     
          
        
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Exportar a PDF</title>
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
              <?php $h1 = "Reporte Constancia de Pagos";  
               echo '<h1>'.$h1.'</h1>'
        ?>
            </div>
        </div>
      <div class="row">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Empleado</th>
            <th>Salario</th>
            <th>Trabajados</th>
            <th>Indemniz.</th>
            <th>Descuentos</th>
            <th>Fecha Pago</th>
          </tr>
        </thead>
        <tbody>
        <?php 
      while ($user=$usuarios->fetch_assoc()) {   ?>
          <tr class="<?php if($user['id'])?>">
            <td><?php echo $user['empleado']; ?></td>
            <td>$ <?php echo $user['salario']; ?></td>
            <td><?php echo $user['diastrabajo'];?> Dias</td>
            <td>$ <?php echo $user['indemniz']; ?></td>
            <td>$ <?php echo $user['descuento']; ?></td>
            <td><?php echo $user['creado_el']; ?></td>
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