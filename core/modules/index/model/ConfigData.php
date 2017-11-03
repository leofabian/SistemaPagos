<?php
class ConfigData {
	public static $tablename = "configurar";

	public function ConfigData(){
		$this->isss = "";
		$this->afp = "";		
	}


	public function update(){
		$sql = "update ".self::$tablename." set val=\"$this->val\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new ConfigData();
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
			$array[$cnt] = new ConfigData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->isss = $r['isss'];
			$array[$cnt]->afp = $r['afp'];
			$cnt++;
		}
		return $array;
	}

}

?>