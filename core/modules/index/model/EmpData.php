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
		$sql .= "value (\"$this->nombre\",\"$this->apellido\",\"$this->direccion\",\"$this->telefono\",\"$this->sexo\",\"$this->dui\",\"$this->nit\",\"$this->estado_civil\",\"$this->tipo_contrato\",\"$this->cargo\",\"$this->salario\",\"$this->formapago\",\"$this->fecha_nac\",$this->email)";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set apellido=\"$this->apellido\",nombre=\"$this->nombre\",direccion=\"$this->direccion\",genero=\"$this->genero\",telef1=\"$this->telef1\",fechanac=\"$this->fechanac\",departamento=\"$this->departamento\",posicion=\"$this->posicion\",salario=\"$this->salario\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new EmpData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->apellido = $r['apellido'];
			$data->nombre = $r['nombre'];
			$data->direccion = $r['direccion'];
			$data->genero = $r['genero'];
			$data->telef1 = $r['telef1'];
			$data->fechanac = $r['fechanac'];
			$data->departamento = $r['departamento'];
			$data->posicion = $r['posicion'];
			$data->salario = $r['salario'];			
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
			$array[$cnt]->apellido = $r['apellido'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->direccion = $r['direccion'];
			$array[$cnt]->genero = $r['genero'];
			$array[$cnt]->telef1 = $r['telef1'];
			$array[$cnt]->fechanac = $r['fechanac'];
			$array[$cnt]->departamento = $r['departamento'];
			$array[$cnt]->posicion = $r['posicion'];
			$array[$cnt]->salario = $r['salario'];
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