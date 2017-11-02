<?php

if(count($_POST)>0){
	$usuario = ConfigurationData::getById($_POST["id"]);
	$usuario->isss = $_POST["isss"];
	$usuario->afp = $_POST["afp"];
	$usuario->update();
print "<script>window.location='index.php?view=sconfiguraciones';</script>";


}


?>