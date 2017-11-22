<?php
include "../core/autoload.php";
include "../core/modules/index/model/EmpData.php";

$EmpData = EmpData::getAll();


	include 'Plantilla.php';

	$query = "SELECT m.id, m.nombre, m.apellido FROM emp_empleado";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'Id',1,0,'C',1);
	$pdf->Cell(70,6,'Nombre',1,0,'C',1);
	$pdf->Cell(70,6,'Apellido',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,6,utf8_decode($row['id']),1,0,'C');
		$pdf->Cell(70,6,$row['nombre'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['apellido']),1,1,'C');
	}
	$pdf->Output();
?>