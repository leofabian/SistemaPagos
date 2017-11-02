<?php
class ConfigurationData {
	public static $tablename = "pla_configuraciones";

	public function ConfigurationData(){

		$this->isss = "";
		$this->afp = "";		
	}

	public function add(){
		$sql = "insert into pla_configuraciones (isss,afp) ";
		$sql .= "value (\"$this->isss\",\"$this->afp\"";
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
		$sql = "update ".self::$tablename." set val=\"$this->val\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new ConfigurationData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->isss = $r['isss'];
			$data->afp = $r['afp'];
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
			$array[$cnt] = new ConfigurationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->isss = $r['isss'];
			$array[$cnt]->afp = $r['afp'];
			$cnt++;
		}
		return $array;
	}


}

?>