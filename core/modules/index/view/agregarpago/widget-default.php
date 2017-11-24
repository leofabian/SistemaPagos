<?php

if(count($_POST)>0){
	$pagosempleado = new PayData();
	$pagosempleado->empleado = $_POST["empleado"];	
	$pagosempleado->salario = $_POST["salario"];
	$pagosempleado->diastrabajo = $_POST["diastrabajo"];
	$pagosempleado->horasextra = $_POST["horasextra"];
	$pagosempleado->indemniz = $_POST["indemniz"];
	$pagosempleado->descuento = $_POST["descuento"];
	$pagosempleado->adelantos = $_POST["adelantos"];
	$pagosempleado->afp = $_POST["afp"];
	$pagosempleado->seguro = $_POST["seguro"];
	$pagosempleado->add();


print "<script>window.location='index.php?view=pagar';</script>";


}
