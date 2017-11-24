<?php
class PayData {
	public static $tablename = "pagosempleado";

	public function PayData(){
		$this->empleado = "";
		$this->salario = "";
		$this->diastrabajo = "";
		$this->horasextra = "";
		$this->indemniz = "";
		$this->descuento = "";
		$this->adelantos = "";
		$this->afp = "";
		$this->seguro = "";
		$this->creado_el = "NOW()";
	}


	public function add(){
		$sql = "insert into ".self::$tablename." (empleado,salario,diastrabajo,horasextra,indemniz,descuento,adelantos,afp,seguro,creado_el) ";
		$sql .= "value (\"$this->empleado\",\"$this->salario\",\"$this->diastrabajo\",\"$this->horasextra\",\"$this->indemniz\",\"$this->descuento\",\"$this->adelantos\",\"$this->afp\",\"$this->seguro\",NOW())";
		return Executor::doit($sql);
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
		$sql = "update ".self::$tablename." set empleado=\"$this->empleado\",salario=\"$this->salario\",diastrabajo=\"$this->diastrabajo\",horasextra=\"$this->horasextra\",indemniz=\"$this->indemniz\",descuento=\"$this->descuento\",adelantos=\"$this->adelantos\",afp=\"$this->afp\",seguro=\"$this->seguro\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new PayData());
	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new PayData());

	}

public static function getPays(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
$r=array(); 



		while($r = $query[0]->fetch_array()){
		$gross = ($r['salario']) + ($r['indemniz']);
		$descuento = $r['descuento'];
		$hextra = 	$r['horasextra'] * 2;  	
 		$desc = $gross * ($r['seguro']) + ($r['afp']) ;
 		$netpay = $gross + $hextra + $r['adelantos'] - $descuento - $desc;
			$array[$cnt] = new PayData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->empleado = $r['empleado'];
			$array[$cnt]->salario = $r['salario'];
			$array[$cnt]->diastrabajo = $r['diastrabajo'];
			$array[$cnt]->horasextra = $r['horasextra'];
			$array[$cnt]->indemniz = $r['indemniz'];
			$array[$cnt]->adelantos = $r['adelantos'];
			$array[$cnt]->afp = $r['afp'];
			$array[$cnt]->seguro = $r['seguro'];
			$array[$cnt]->total = $netpay;
			$array[$cnt]->creado_el = $r['creado_el'];
			$cnt++;
		}
		return $array;
	}

}

?>