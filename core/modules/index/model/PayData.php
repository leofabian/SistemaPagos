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


	public static function getAllByDateOfficial($start,$end){
 $sql = "select * from ".self::$tablename." where date(creado_el) >= \"$start\" and date(creado_el) <= \"$end\" order by creado_el desc";
		if($start == $end){
		 $sql = "select * from ".self::$tablename." where date(creado_el) = \"$start\" order by creado_el desc";
		}
		$query = Executor::doit($sql);
		return Model::many($query[0],new OperationData());
	}

	public static function getAllByDateOfficialBP($product, $start,$end){
 $sql = "select * from ".self::$tablename." where date(creado_el) >= \"$start\" and date(creado_el) <= \"$end\" and id_producto=$product order by creado_el desc";
		if($start == $end){
		 $sql = "select * from ".self::$tablename." where date(creado_el) = \"$start\" order by creado_el desc";
		}
		$query = Executor::doit($sql);
		return Model::many($query[0],new OperationData());
	}

	public function getProduct(){ return ProductData::getById($this->id_producto);}
	public function getOperationtype(){ return OperationTypeData::getById($this->tipo_operac_id);}





	public static function getQYesF($id_producto){
		$cant=0;
		$operations = self::getAllByProductId($id_producto);
		$input_id = OperationTypeData::getByName("entrada")->id;
		$output_id = OperationTypeData::getByName("salida")->id;
		foreach($operations as $operation){
				if($operation->tipo_operac_id==$input_id){ $cant+=$operation->cant; }
				else if($operation->tipo_operac_id==$output_id){  $cant+=(-$operation->cant); }
		}
		// print_r($data);
		return $cant;
	}



	public static function getAllByProductIdCutId($id_producto,$id_corte){
		$sql = "select * from ".self::$tablename." where id_producto=$id_producto and id_corte=$id_corte order by creado_el desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new OperationData());
	}

	public static function getAllByProductId($id_producto){
		$sql = "select * from ".self::$tablename." where id_producto=$id_producto  order by creado_el desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new OperationData());
	}


	public static function getAllByProductIdCutIdOficial($id_producto,$id_corte){
		$sql = "select * from ".self::$tablename." where id_producto=$id_producto and id_corte=$id_corte order by creado_el desc";
		return Model::many($query[0],new OperationData());
	}


	public static function getAllProductsBySellId($id_venta){
		$sql = "select * from ".self::$tablename." where id_venta=$id_venta order by creado_el desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new OperationData());
	}


	public static function getAllByProductIdCutIdYesF($id_producto,$id_corte){
		$sql = "select * from ".self::$tablename." where id_producto=$id_producto and id_corte=$id_corte order by creado_el desc";
		return Model::many($query[0],new OperationData());
		return $array;
	}

////////////////////////////////////////////////////////////////////
	public static function getOutputQ($id_producto,$id_corte){
		$q=0;
		$operations = self::getOutputByProductIdCutId($id_producto,$id_corte);
		$input_id = OperationTypeData::getByName("entrada")->id;
		$output_id = OperationTypeData::getByName("salida")->id;
		foreach($operations as $operation){
			if($operation->tipo_operac_id==$input_id){ $q+=$operation->q; }
			else if($operation->tipo_operac_id==$output_id){  $q+=(-$operation->q); }
		}
		// print_r($data);
		return $q;
	}

	public static function getOutputQYesF($id_producto){
		$q=0;
		$operations = self::getOutputByProductId($id_producto);
		$input_id = OperationTypeData::getByName("entrada")->id;
		$output_id = OperationTypeData::getByName("salida")->id;
		foreach($operations as $operation){
			if($operation->tipo_operac_id==$input_id){ $q+=$operation->cant; }
			else if($operation->tipo_operac_id==$output_id){  $q+=(-$operation->cant); }
		}
		// print_r($data);
		return $q;
	}

	public static function getInputQYesF($id_producto){
		$q=0;
		$operations = self::getInputByProductId($id_producto);
		$input_id = OperationTypeData::getByName("entrada")->id;
		foreach($operations as $operation){
			if($operation->tipo_operac_id==$input_id){ $q+=$operation->cant; }
		}
		// print_r($data);
		return $q;
	}



	public static function getOutputByProductIdCutId($id_producto,$id_corte){
		$sql = "select * from ".self::$tablename." where id_producto=$id_producto and id_corte=$id_corte and tipo_operac_id=2 order by creado_el desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new OperationData());
	}


	public static function getOutputByProductId($id_producto){
		$sql = "select * from ".self::$tablename." where id_producto=$id_producto and tipo_operac_id=2 order by creado_el desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new OperationData());
	}

////////////////////////////////////////////////////////////////////
	public static function getInputQ($id_producto,$id_corte){
		$q=0;
		return Model::many($query[0],new OperationData());
		$operations = self::getInputByProductId($id_producto);
		$input_id = OperationTypeData::getByName("entrada")->id;
		$output_id = OperationTypeData::getByName("salida")->id;
		foreach($operations as $operation){
			if($operation->tipo_operac_id==$input_id){ $q+=$operation->q; }
			else if($operation->tipo_operac_id==$output_id){  $q+=(-$operation->q); }
		}
		// print_r($data);
		return $q;
	}


	public static function getInputByProductIdCutId($id_producto,$id_corte){
		$sql = "select * from ".self::$tablename." where id_producto=$id_producto and id_corte=$id_corte and tipo_operac_id=1 order by creado_el desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new OperationData());
	}

	public static function getInputByProductId($id_producto){
		$sql = "select * from ".self::$tablename." where id_producto=$id_producto and tipo_operac_id=1 order by creado_el desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new OperationData());
	}

	public static function getInputByProductIdCutIdYesF($id_producto,$id_corte){
		$sql = "select * from ".self::$tablename." where id_producto=$id_producto and id_corte=$id_corte and tipo_operac_id=1 order by creado_el desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new OperationData());
	}

////////////////////////////////////////////////////////////////////////////


}

?>