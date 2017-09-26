<?php

if(count($_POST)>0){
	$empleado = new EmpData();
	$empleado->nombre = $_POST["nombre"];
	$empleado->apellido = $_POST["apellido"];
	$empleado->direccion = $_POST["direccion"];
	$empleado->telefono = $_POST["telefono"];
	$empleado->sexo = $_POST["sexo"];
	$empleado->dui = $_POST["dui"];
	$empleado->nit = $_POST["nit"];
	$empleado->estado_civil = $_POST["estado_civil"];
	$empleado->tipo_contrato = $_POST["tipo_contrato"];
	$empleado->cargo = $_POST["cargo"];
	$empleado->salario = $_POST["salario"];	
	$empleado->formapago = $_POST["formapago"];	
	$empleado->fecha_nac = $_POST["fecha_nac"];	
	$empleado->email = $_POST["email"];	
	$empleado->salario = $_POST["salario"];	
	$empleado->add();

print "<script>window.location='index.php?view=empleado';</script>";

}