<?php

if(count($_POST)>0){
	$empleado = EmpData::getById($_POST["id"]);
	$empleado->apellido = $_POST["apellido"];
	$empleado->nombre = $_POST["nombre"];
	$empleado->direccion = $_POST["direccion"];
	$empleado->genero = $_POST["genero"];
	$empleado->telef1 = $_POST["telef1"];
	$empleado->fechanac = $_POST["fechanac"];
	$empleado->departamento = $_POST["departamento"];
	$empleado->posicion = $_POST["posicion"];
	$empleado->salario = $_POST["salario"];	
	$empleado->update();


print "<script>window.location='index.php?view=empleado';</script>";


}


?>