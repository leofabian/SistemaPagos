<?php
class ConfigData {
	public static $tablename = "pla_configuraciones";

	public function ConfigData(){

		//$this->id = "";
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
		while($r = $query[1]->fetch_array()){
			$data->id = $r['id'];
			$data->isss = $r['isss'];
			$data->afp = $r['afp'];
			$found = $data;
			break;
		}
		return $found;
	}

}

?>