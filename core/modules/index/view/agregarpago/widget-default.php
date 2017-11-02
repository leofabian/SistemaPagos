<?php

if(count($_POST)>0){
	$pla_configuraciones = new ConfigurationData();
	$pla_configuraciones->isss = $_POST["isss"];	
	$pla_configuraciones->isss = $_POST["isss"];
	$pla_configuraciones->add();


//print "<script>window.location='index.php?view=configuraciones';</script>";


}

