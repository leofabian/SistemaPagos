<?php
class EmpData {
	public static $tablename = "emp_empleado";

	public function Empdata(){
		$this->nombre = "";
		$this->apellido = "";
		$this->direccion = "";
		$this->telefono = "";
		$this->sexo = "";
		$this->dui = "";
		$this->nit = "";
		$this->estado_civil = "";
		$this->tipo_contrato = "";
		$this->cargo = "";
		$this->salario = "";
		$this->formapago = "";
		$this->fecha_nac = "";	
		$this->email = "";	
	}

	public function add(){
		$sql = "insert into emp_empleado (nombre,apellido,direccion,telefono,sexo,dui,nit,estado_civil,tipo_contrato,cargo,salario,formapago,fecha_nac,email) ";
		$sql .= "value (\"$this->nombre\",\"$this->apellido\",\"$this->direccion\",\"$this->telefono\",\"$this->sexo\",\"$this->dui\",\"$this->nit\",\"$this->estado_civil\",\"$this->tipo_contrato\",\"$this->cargo\",\"$this->salario\",\"$this->formapago\",\"$this->fecha_nac\",\"$this->email\")";
		Executor::doit($sql);
	}


	// INSERT INTO `emp_empleado` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `sexo`, `dui`, `nit`, `estado_civil`, `tipo_contrato`, `cargo`, `salario`, `formapago`, `fecha_nac`, `email`) VALUES (NULL, 'leo', 'fab', 'aklklk', '1979', 'Masculino', '919', '99', 'Soltero', 'Contrato Fijo', 'Administración', '5000', 'Efectivo', '2017-09-18', 'nelson@gmail.com')

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set nombre=\"$this->nombre\",apellido=\"$this->apellido\",direccion=\"$this->direccion\",telefono=\"$this->telefono\",sexo=\"$this->sexo\",dui=\"$this->dui\",nit=\"$this->nit\",estado_civil=\"$this->estado_civil\",tipo_contrato=\"$this->tipo_contrato\",tipo_contrato=\"$this->tipo_contrato\",cargo=\"$this->cargo\",salario=\"$this->salario\",formapago=\"$this->formapago\",fecha_nac=\"$this->fecha_nac\",email=\"$this->email\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new EmpData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->nombre = $r['nombre'];
			$data->apellido = $r['apellido'];
			$data->direccion = $r['direccion'];
			$data->telefono = $r['telefono'];
			$data->sexo = $r['sexo'];
			$data->dui = $r['dui'];
			$data->nit = $r['nit'];
			$data->estado_civil = $r['estado_civil'];
			$data->tipo_contrato = $r['tipo_contrato'];
			$data->cargo = $r['cargo'];
			$data->salario = $r['salario'];
			$data->formapago = $r['formapago'];		
			$data->fecha_nac = $r['fecha_nac'];
			$data->email = $r['email'];	
			$found = $data;
			break;
		}
		return $found;
	}
	

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new EmpData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->apellido = $r['apellido'];
			$array[$cnt]->direccion = $r['direccion'];
			$array[$cnt]->telefono = $r['telefono'];
			$array[$cnt]->sexo = $r['sexo'];
			$array[$cnt]->dui = $r['dui'];
			$array[$cnt]->nit = $r['nit'];
			$array[$cnt]->estado_civil = $r['estado_civil'];
			$array[$cnt]->tipo_contrato = $r['tipo_contrato'];
			$array[$cnt]->cargo = $r['cargo'];
			$array[$cnt]->salario = $r['salario'];
			$array[$cnt]->formapago = $r['formapago'];
			$array[$cnt]->fecha_nac = $r['fecha_nac'];
			$array[$cnt]->email = $r['email'];
			$cnt++;
		}
		return $array;
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre like '%$q%'";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new EmpData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->mail = $r['mail'];
			$array[$cnt]->contrasenia = $r['contrasenia'];
			$array[$cnt]->creado_el = $r['creado_el'];
			$cnt++;
		}
		return $array;
	}


}

?>